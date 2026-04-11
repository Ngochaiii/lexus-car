@extends('layouts.admin.index')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="card stretch stretch-full">
            <div class="card-header">
                <h5 class="card-title">Leads <span class="badge bg-soft-primary text-primary ms-1">{{ $customers->total() }}</span></h5>
                <div class="card-header-action">
                    <div class="card-header-btn">
                        <div data-bs-toggle="tooltip" title="Refresh">
                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"></a>
                        </div>
                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body custom-card-action p-0">

                {{-- Desktop table --}}
                <div class="table-responsive d-none d-md-block">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr class="border-b">
                                <th>Khách hàng</th>
                                <th>Xe quan tâm</th>
                                <th>Lịch hẹn</th>
                                <th>Ghi chú</th>
                                <th>Thời gian đăng ký</th>
                                <th class="text-end">Liên hệ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($customers as $c)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-text avatar-md bg-soft-primary text-primary">
                                                {{ strtoupper(substr($c->name, 0, 1)) }}
                                            </div>
                                            <div>
                                                <span class="d-block fw-semibold">{{ $c->name }}</span>
                                                <span class="fs-12 d-block fw-normal text-muted">{{ $c->email ?? '—' }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="d-block fw-semibold">{{ $c->car }}</span>
                                        <span class="fs-12 text-muted">{{ $c->price ?? '—' }}</span>
                                    </td>
                                    <td>
                                        @if($c->date)
                                            <span class="d-block fw-semibold">{{ \Carbon\Carbon::parse($c->date)->locale('vi')->isoFormat('ddd, D/M/YYYY') }}</span>
                                            <span class="fs-12 text-muted">{{ $c->time ?? '—' }}</span>
                                        @else
                                            <span class="text-muted">—</span>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="fs-12 text-muted text-truncate d-block" style="max-width:180px">
                                            {{ $c->note ?? '—' }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="d-block fs-13">{{ $c->created_at->timezone('Asia/Ho_Chi_Minh')->format('d/m/Y') }}</span>
                                        <span class="fs-12 text-muted">{{ $c->created_at->timezone('Asia/Ho_Chi_Minh')->format('H:i') }}</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="tel:{{ $c->phone }}"
                                            class="btn btn-sm btn-soft-success d-inline-flex align-items-center gap-1">
                                            <i class="feather-phone-call"></i> {{ $c->phone }}
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted py-5">
                                        <i class="feather-inbox" style="font-size:2rem;display:block;margin-bottom:8px;opacity:.4"></i>
                                        Chưa có khách hàng nào
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- Mobile cards --}}
                <div class="d-md-none p-3">
                    @forelse ($customers as $c)
                        <div class="border rounded-3 p-3 mb-3" style="background:var(--bs-body-bg,#fff)">
                            {{-- Header --}}
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <div class="avatar-text avatar-md bg-soft-primary text-primary flex-shrink-0">
                                    {{ strtoupper(substr($c->name, 0, 1)) }}
                                </div>
                                <div class="flex-grow-1 min-w-0">
                                    <div class="fw-semibold text-truncate">{{ $c->name }}</div>
                                    <div class="fs-12 text-muted">{{ $c->email ?? '—' }}</div>
                                </div>
                                <a href="tel:{{ $c->phone }}" class="btn btn-sm btn-soft-success flex-shrink-0">
                                    <i class="feather-phone-call"></i>
                                </a>
                            </div>

                            {{-- Info rows --}}
                            <div class="d-flex flex-column gap-1 fs-13 mt-2">
                                <div class="d-flex justify-content-between">
                                    <span class="text-muted">Xe:</span>
                                    <span class="fw-semibold text-end">{{ $c->car }}@if($c->price) <span class="text-muted fw-normal">({{ $c->price }})</span>@endif</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="text-muted">SĐT:</span>
                                    <a href="tel:{{ $c->phone }}" class="fw-semibold">{{ $c->phone }}</a>
                                </div>
                                @if($c->date)
                                <div class="d-flex justify-content-between">
                                    <span class="text-muted">Lịch hẹn:</span>
                                    <span class="fw-semibold">{{ \Carbon\Carbon::parse($c->date)->format('d/m/Y') }}{{ $c->time ? ' · '.$c->time : '' }}</span>
                                </div>
                                @endif
                                @if($c->note)
                                <div class="d-flex justify-content-between gap-2">
                                    <span class="text-muted flex-shrink-0">Ghi chú:</span>
                                    <span class="text-end text-truncate">{{ $c->note }}</span>
                                </div>
                                @endif
                                <div class="d-flex justify-content-between">
                                    <span class="text-muted">Đăng ký:</span>
                                    <span>{{ $c->created_at->timezone('Asia/Ho_Chi_Minh')->format('d/m/Y H:i') }}</span>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center text-muted py-5">
                            <i class="feather-inbox" style="font-size:2rem;display:block;margin-bottom:8px;opacity:.4"></i>
                            Chưa có khách hàng nào
                        </div>
                    @endforelse
                </div>

            </div>

            <div class="card-footer">
                {{ $customers->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
