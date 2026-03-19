@extends('layouts.admin.index')

@section('content')
    <div class="main-content">
        <div class="row">
            <div class="card stretch stretch-full">
                <div class="card-header">
                    <h5 class="card-title">Leads</h5>
                    <div class="card-header-action">
                        <div class="card-header-btn">
                            <div data-bs-toggle="tooltip" title="Delete">
                                <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger"
                                    data-bs-toggle="remove"> </a>
                            </div>
                            <div data-bs-toggle="tooltip" title="Refresh">
                                <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning"
                                    data-bs-toggle="refresh"> </a>
                            </div>
                            <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success"
                                    data-bs-toggle="expand"> </a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown"
                                data-bs-offset="25, 25">
                                <div data-bs-toggle="tooltip" title="Options">
                                    <i class="feather-more-vertical"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="feather-calendar"></i>Event</a>
                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="feather-trash-2"></i>Deleted</a>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0);" class="dropdown-item"><i
                                        class="feather-settings"></i>Settings</a>
                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips &
                                    Tricks</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body custom-card-action p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr class="border-b">
                                    <th>Khách hàng</th>
                                    <th>Xe quan tâm</th>
                                    <th>Thời gian</th>
                                    <th>Ghi chú</th>
                                    <th class="text-end">Liên hệ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($customers as $customer)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="avatar-text avatar-md bg-soft-primary text-primary">
                                                    {{ strtoupper(substr($customer->name, 0, 1)) }}
                                                </div>
                                                <div>
                                                    <span class="d-block fw-semibold">{{ $customer->name }}</span>
                                                    <span
                                                        class="fs-12 d-block fw-normal text-muted">{{ $customer->email ?? '—' }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="d-block fw-semibold">{{ $customer->car }}</span>
                                            <span class="fs-12 text-muted">{{ $customer->price }}</span>
                                        </td>
                                        <td>{{ $customer->created_at->format('d/m/Y H:i') }}</td>
                                        <td>
                                            <span class="fs-12 text-muted text-truncate d-block" style="max-width:180px">
                                                {{ $customer->note ?? '—' }}
                                            </span>
                                        </td>
                                        <td class="text-end">
                                            <a href="tel:{{ $customer->phone }}"
                                                class="btn btn-sm btn-soft-success d-inline-flex align-items-center gap-1">
                                                <i class="feather-phone-call"></i> {{ $customer->phone }}
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center text-muted py-4">Chưa có khách hàng nào</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    {{ $customers->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
