<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string',
            'phone' => 'required|string',
            'car'   => 'required|string',
            'price' => 'nullable|string',
            'url'   => 'required|string',
            'email' => 'nullable|email',
            'note'  => 'nullable|string',
            'date'  => 'nullable|string',
            'time'  => 'nullable|string',
        ]);

        $customer = Customer::create($request->only('name', 'phone', 'car', 'price', 'url', 'email', 'note', 'date', 'time'));

        $this->sendSlackNotification($customer);

        return response()->json(['success' => true], 201);
    }

    private function sendSlackNotification(Customer $customer): void
    {
        $webhook = config('services.slack.webhook_url');
        if (!$webhook) {
            return;
        }

        $isRegis = str_contains((string) $customer->url, '/regis');
        $source  = $isRegis ? 'Đăng ký lái thử (/regis)' : 'Form tư vấn (trang xe)';

        $fields = [
            ['type' => 'mrkdwn', 'text' => "*Họ tên:*\n" . ($customer->name ?: '—')],
            ['type' => 'mrkdwn', 'text' => "*SĐT:*\n" . ($customer->phone ?: '—')],
            ['type' => 'mrkdwn', 'text' => "*Email:*\n" . ($customer->email ?: '—')],
            ['type' => 'mrkdwn', 'text' => "*Mẫu xe:*\n" . ($customer->car ?: '—')],
        ];

        if ($customer->price) {
            $fields[] = ['type' => 'mrkdwn', 'text' => "*Giá:*\n{$customer->price}"];
        }
        if ($customer->date || $customer->time) {
            $schedule = trim(($customer->date ?? '') . ' ' . ($customer->time ?? ''));
            $fields[] = ['type' => 'mrkdwn', 'text' => "*Lịch hẹn:*\n{$schedule}"];
        }

        $blocks = [
            [
                'type' => 'header',
                'text' => ['type' => 'plain_text', 'text' => '🚗 Khách hàng mới — ' . $source],
            ],
            ['type' => 'section', 'fields' => $fields],
        ];

        if ($customer->note) {
            $blocks[] = [
                'type' => 'section',
                'text' => ['type' => 'mrkdwn', 'text' => "*Ghi chú:*\n{$customer->note}"],
            ];
        }

        $blocks[] = [
            'type' => 'context',
            'elements' => [
                ['type' => 'mrkdwn', 'text' => "🔗 <{$customer->url}|Trang gửi> · 🆔 #{$customer->id} · 🕒 " . $customer->created_at?->format('d/m/Y H:i')],
            ],
        ];

        try {
            $response = Http::timeout(5)->post($webhook, [
                'text'   => "Khách hàng mới: {$customer->name} — {$customer->phone} — {$customer->car}",
                'blocks' => $blocks,
            ]);

            Log::info('Slack notification sent', [
                'customer_id' => $customer->id,
                'status'      => $response->status(),
                'body'        => $response->body(),
            ]);

            if (!$response->successful()) {
                Log::warning('Slack returned non-2xx', [
                    'customer_id' => $customer->id,
                    'status'      => $response->status(),
                    'body'        => $response->body(),
                ]);
            }
        } catch (\Throwable $e) {
            Log::warning('Slack notification failed', ['error' => $e->getMessage(), 'customer_id' => $customer->id]);
        }
    }
}
