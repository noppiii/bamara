@extends('components.admin.main')
@section('title')
    Dashboard Penjualan | {{ config('app.name') }}
@endsection
@section('pages')
    Dashboard Penjualan
@endsection
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Sales last year -->
            <div class="col-xl-3 col-md-4 col-6 mb-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5 class="card-title mb-0">Sales</h5>
                        <small class="text-muted">Last Year</small>
                    </div>
                    <div>
                        {!! $lastYearChart->container() !!}
                    </div>
                    <div class="card-body pt-0">
                        <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                            <h4 class="mb-0 text-success">Rp. {{$amountSalesLastYear}}</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sessions Last month -->
            <div class="col-xl-3 col-md-4 col-6 mb-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5 class="card-title mb-0">Users</h5>
                        <small class="text-muted">Last Month</small>
                    </div>
                    <div class="card-body">
                        <div>
                            {!! $userLastMonthChart->container() !!}
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                            <h4 class="mb-0">{{$totalUser}} Users</h4>
                            {{--                            <small class="text-success">+12.6%</small>--}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Revenue Growth -->
            <div class="col-xl-6 col-md-8 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="col-xl-4 d-flex flex-column">
                                <div class="card-title mb-auto">
                                    <h5 class="mb-1 text-nowrap">Revenue Growth</h5>
                                    <small>Weekly Report</small>
                                </div>
                                <div class="chart-statistics">
                                    <h3 class="card-title mb-1">Rp.{{$totalSalesLastWeek}}</h3>
                                    <span class="badge bg-label-success">Rp. {{$totalSalesToday}}</span>
                                </div>
                            </div>
                            <div class="col-xl-8">{!! $revenueGrowthChart->container() !!}</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earning Reports Tabs-->
            <div class="col-12 col-xl-8 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title mb-0">
                            <h5 class="mb-0">Earning Reports</h5>
                            <small class="text-muted">Yearly Earnings Overview</small>
                        </div>
                        <div class="dropdown">
                            <button
                                class="btn p-0"
                                type="button"
                                id="earningReportsTabsId"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsTabsId">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs widget-nav-tabs pb-3 gap-4 mx-1 d-flex flex-nowrap" role="tablist">
                            <li class="nav-item">
                                <a
                                    href="javascript:void(0);"
                                    class="nav-link btn active d-flex flex-column align-items-center justify-content-center"
                                    role="tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#navs-orders-id"
                                    aria-controls="navs-orders-id"
                                    aria-selected="true"
                                >
                                    <div class="badge bg-label-secondary rounded p-2">
                                        <i class="ti ti-shopping-cart ti-sm"></i>
                                    </div>
                                    <h6 class="tab-widget-title mb-0 mt-2">Orders</h6>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    href="javascript:void(0);"
                                    class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                                    role="tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#navs-sales-id"
                                    aria-controls="navs-sales-id"
                                    aria-selected="false"
                                >
                                    <div class="badge bg-label-secondary rounded p-2">
                                        <i class="ti ti-bottle ti-sm"></i>
                                    </div>
                                    <h6 class="tab-widget-title mb-0 mt-2">Product</h6>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    href="javascript:void(0);"
                                    class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                                    role="tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#navs-profit-id"
                                    aria-controls="navs-profit-id"
                                    aria-selected="false"
                                >
                                    <div class="badge bg-label-secondary rounded p-2">
                                        <i class="ti ti-currency-dollar ti-sm"></i>
                                    </div>
                                    <h6 class="tab-widget-title mb-0 mt-2">Profit</h6>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    href="javascript:void(0);"
                                    class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                                    role="tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#navs-income-id"
                                    aria-controls="navs-income-id"
                                    aria-selected="false"
                                >
                                    <div class="badge bg-label-secondary rounded p-2">
                                        <i class="ti ti-news ti-sm"></i>
                                    </div>
                                    <h6 class="tab-widget-title mb-0 mt-2">Blog</h6>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    href="javascript:void(0);"
                                    class="nav-link btn d-flex align-items-center justify-content-center disabled"
                                    role="tab"
                                    data-bs-toggle="tab"
                                    aria-selected="false"
                                >
                                    <div class="badge bg-label-secondary rounded p-2"><i class="ti ti-plus ti-sm"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content p-0 ms-0 ms-sm-2">
                            <div class="tab-pane fade show active" id="navs-orders-id" role="tabpanel">
                                <div>{!! $orderLastYearChart->container() !!}</div>
                            </div>
                            <div class="tab-pane fade" id="navs-sales-id" role="tabpanel">
                                <div>{!! $orderItemLastYearChart->container() !!}</div>
                            </div>
                            <div class="tab-pane fade" id="navs-profit-id" role="tabpanel">
                                <div>{!! $profitYearChart->container() !!}</div>
                            </div>
                            <div class="tab-pane fade" id="navs-income-id" role="tabpanel">
                                <div id="earningReportsTabsIncome"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sales last 6 months -->
            <div class="col-md-6 col-xl-4 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title mb-0">
                            <h5 class="mb-0">Transaction</h5>
                            <small class="text-muted">List of Transactions By Payment Method</small>
                        </div>
                        <div class="dropdown">
                            <button
                                class="btn p-0"
                                type="button"
                                id="salesLastMonthMenu"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesLastMonthMenu">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div>{!! $transactionPaymentMethodChart->container() !!}</div>
                    </div>
                </div>
            </div>

            <!-- Browser States -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title m-0 me-2">
                            <h5 class="m-0 me-2">Incoming Order</h5>
                            <small class="text-muted">List of Incoming Orders</small>
                        </div>
                        <div class="dropdown">
                            <button
                                class="btn p-0"
                                type="button"
                                id="employeeList"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="employeeList">
                                <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            @foreach($recentOrder as $order)
                                <li class="d-flex mb-4 pb-1 align-items-center">
                                    <img
                                        src="{{asset('store/user/profile' . $order->user->profile_picture)}}"
                                        alt="Chrome"
                                        height="28"
                                        class="me-3 rounded"
                                    />
                                    <div class="d-flex w-100 align-items-center gap-2">
                                        <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                                            <div>
                                                <h6 class="mb-0">{{$order->user->name}}</h6>
                                            </div>

                                            <div class="user-progress d-flex align-items-center gap-2">
                                                <h6 class="mb-0 text-primary"><i
                                                        class="ti ti-bottle me-2"></i>{{$order->orderItems->count()}}
                                                    Item</h6>
                                            </div>
                                        </div>
                                        <div class="chart-progress" data-color="secondary" data-series="85"></div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Project Status -->
            <div class="col-12 col-xl-4 mb-4 col-md-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="mb-0 card-title">Blog Status</h5>
                        <div class="dropdown">
                            <button
                                class="btn p-0"
                                type="button"
                                id="projectStatusId"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectStatusId">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="badge rounded bg-label-warning p-2 me-3 rounded">
                                <i class="ti ti-currency-dollar ti-sm"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
                                <div class="me-2">
                                    <h6 class="mb-0">Blog 1</h6>
                                    <small class="text-muted">3 Views</small>
                                </div>
                                <p class="mb-0 text-success">+10.2%</p>
                            </div>
                        </div>
                        <div id="projectStatusChart"></div>
                        <div class="d-flex justify-content-between mb-3">
                            <h6 class="mb-0">Like</h6>
                            <div class="d-flex">
                                <p class="mb-0 me-3">26 Likes</p>
                                <p class="mb-0 text-success">+139.34</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mb-3 pb-1">
                            <h6 class="mb-0">Comments</h6>
                            <div class="d-flex">
                                <p class="mb-0 me-3">3 Comments</p>
                                <p class="mb-0 text-success">+576.2</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Active Projects -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title mb-0">
                            <h5 class="mb-0">Stock Product</h5>
                            <small class="text-muted">List of Products with Available Stock</small>
                        </div>
                        <div class="dropdown">
                            <button
                                class="btn p-0"
                                type="button"
                                id="activeProjects"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="activeProjects">
                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                <a class="dropdown-item" href="javascript:void(0);">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            @foreach($productStock as $product)
                                <li class="mb-3 pb-1 d-flex">
                                    <div class="d-flex w-50 align-items-center me-3">
                                        <img
                                            src="{{ asset('store/product/image/' . $product->images->firstOrFail()->image_path) }}"
                                            alt="laravel-logo"
                                            class="me-3"
                                            width="35"
                                        />
                                        <div>
                                            <h6 class="mb-0">{{ $product->name }}</h6>
                                            <small class="text-muted">{{ $product->orderItems->count() }} Sell</small>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-grow-1 align-items-center">
                                        <div class="progress w-100 me-3" style="height: 8px">
                                            <div
                                                class="progress-bar {{ $product->stock <= 5 ? 'bg-danger' : 'bg-success' }}"
                                                role="progressbar"
                                                style="width: {{ $product->stock <= 5 ? '100%' : '54%' }}"
                                                aria-valuenow="{{ $product->stock }}"
                                                aria-valuemin="0"
                                                aria-valuemax="100"
                                            ></div>
                                        </div>
                                        <span class="{{ $product->stock <= 5 ? 'text-danger' : 'text-success' }}">
                                            {{ $product->stock }}
                                        </span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Last Transaction -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title m-0 me-2">Last Transaction</h5>
                        <div class="dropdown">
                            <button
                                class="btn p-0"
                                type="button"
                                id="teamMemberList"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="teamMemberList">
                                <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-borderless border-top">
                            <thead class="border-bottom">
                            <tr>
                                <th>PAYMENT</th>
                                <th>NOMINAL</th>
                                <th>DATE</th>
                                <th>STATUS</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($recentTransaction as $transaction)
                                <tr>
                                    <td>
                                        <small>{{ ucwords($transaction->payment_method) }}</small>
                                    </td>
                                    <td>
                                        <small>{{number_format($transaction->nominal, 0, ',', '.')}}</small>
                                    </td>
                                    <td>
                                        <small>{{ \Carbon\Carbon::parse($transaction->transaction_time)->format('d M Y') }}</small>
                                    </td>
                                    <td>
                                        @if($transaction->status === 'cancel')
                                            <span class="badge bg-label-danger">Cancel</span>
                                        @elseif($transaction->status === 'waiting payment')
                                            <span class="badge bg-label-warning">Waiting Payment</span>
                                        @elseif($transaction->status === 'success')
                                            <span class="badge bg-label-success">Success</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Activity Timeline -->
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title m-0 me-2 pt-1 mb-2">Activity Timeline</h5>
                        <div class="dropdown">
                            <button
                                class="btn p-0"
                                type="button"
                                id="timelineWapper"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="timelineWapper">
                                <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <ul class="timeline ms-1 mb-0">
                            <li class="timeline-item timeline-item-transparent ps-4">
                                <span class="timeline-point timeline-point-primary"></span>
                                <div class="timeline-event">
                                    <div class="timeline-header">
                                        <h6 class="mb-0">Wishlist</h6>
                                    </div>
                                    @if($latestWishlist && $latestWishlist->product)
                                        <p class="mb-2">{{ $latestActivity->first_name }} {{$latestActivity->last_name}} add {{ $latestWishlist->product->name }} to wishlist at {{\Carbon\Carbon::parse($latestWishlist->created_at)->format('d M Y')}}</p>
                                    @else
                                        <p class="mb-2">No recent wishlist activity.</p>
                                    @endif
                                </div>
                            </li>
                            <li class="timeline-item timeline-item-transparent ps-4">
                                <span class="timeline-point timeline-point-success"></span>
                                <div class="timeline-event">
                                    <div class="timeline-header">
                                        <h6 class="mb-0">Cart</h6>
                                    </div>
                                    @if($latestCart && $latestCart->product)
                                        <p class="mb-2">{{ $latestActivity->first_name }} {{$latestActivity->last_name}} add {{ $latestCart->product->name }} to cart at {{\Carbon\Carbon::parse($latestWishlist->created_at)->format('d M Y')}}</p>
                                    @else
                                        <p class="mb-2">No recent cart activity.</p>
                                    @endif
                                </div>
                            </li>
                            <li class="timeline-item timeline-item-transparent ps-4">
                                <span class="timeline-point timeline-point-danger"></span>
                                <div class="timeline-event">
                                    <div class="timeline-header">
                                        <h6 class="mb-0">Order</h6>
                                    </div>
                                    @if($latestOrder && $latestOrder->orderItems->isNotEmpty())
                                        <p class="mb-2">
                                            {{ $latestOrder->first_name }} {{ $latestOrder->last_name }}
                                            do order {{ $latestOrder->orderItems->first()->product->name }}
                                            on {{ \Carbon\Carbon::parse($latestOrder->created_at)->format('d M Y') }}
                                        </p>
                                    @else
                                        <p class="mb-2">No recent order activity.</p>
                                    @endif
                                </div>
                            </li>
                            <li class="timeline-item timeline-item-transparent ps-4 border-0">
                                <span class="timeline-point timeline-point-info"></span>
                                <div class="timeline-event pb-0">
                                    <div class="timeline-header">
                                        <h6 class="mb-0">Payment</h6>
                                    </div>
                                    @if($latestPayment)
                                        <p class="mb-2">
                                            Payment of {{ number_format($latestPayment->nominal, 0, ',', '.') }}
                                            via {{ ucfirst($latestPayment->payment_method) }}
                                            on {{ \Carbon\Carbon::parse($latestPayment->transaction_time)->format('d M Y') }}
                                        </p>
                                    @else
                                        <p class="mb-2">No recent payment activity.</p>
                                    @endif
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->


    <script src="{{ $lastYearChart->cdn() }}"></script>

    {{ $lastYearChart->script() }}
    {{ $userLastMonthChart->script() }}
    {{ $revenueGrowthChart->script() }}
    {{ $orderLastYearChart->script()  }}
    {{ $orderItemLastYearChart->script() }}
    {{ $profitYearChart->script() }}
    {{ $transactionPaymentMethodChart->script() }}
@endsection
