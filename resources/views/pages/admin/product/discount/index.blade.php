@extends('components.admin.main')
@section('title')
    Category Product | {{ config('app.name') }}
@endsection
@section('pages')
    Category Product Admin
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="text-primary">Welcome {{$user->name}}! 🎉</h5>
                                <p>Here you can control and manage all discount</p>
                                <button id="viewDataLink" class="btn btn-sm btn-outline-primary">View Data</button>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img
                                    src="{{ asset('image/bidang-psikolog.jpg') }}"
                                    height="150"
                                    alt="View Badge User"
                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navbar pills -->
            <div class="row g-4 mb-4">
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>Total Discount</span>
                                    <div class="d-flex align-items-center my-1">
                                        <h4 class="mb-0 me-2">{{$totalDiscount}}</h4>
                                        {{--                                        <span class="text-success">(+29%)</span>--}}
                                    </div>
                                    <small>Total discount product</small>
                                </div>
                                <span class="badge bg-label-primary rounded p-2">
                    <i class="ti ti-ticket ti-sm"></i>
                  </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>Biggest Discount</span>
                                    <div class="d-flex align-items-center my-1">
                                        <h6 class="mb-0 me-2">{{$biggestDiscountProduct->name}}</h6>
                                        {{--                                        <span class="text-success">(+18%)</span>--}}
                                    </div>
                                    <small>This discount has a discount of {{$biggestDiscountProduct->percentage}}
                                        %</small>
                                </div>
                                <span class="badge bg-label-secondary rounded p-2">
                    <i class="ti ti-ticket ti-sm"></i>
                  </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>Most Discount</span>
                                    <div class="d-flex align-items-center my-1">
                                        <h6 class="mb-0 me-2">{{$discountWithMostProduct->name}}</h6>
                                        {{--                                        <span class="text-danger">(-14%)</span>--}}
                                    </div>
                                    <small>Discount with the most products</small>
                                </div>
                                <span class="badge bg-label-info rounded p-2">
                    <i class="ti ti-ticket ti-sm"></i>
                  </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>Add Discount</span>
                                    <div class="d-flex align-items-center my-1">
                                        <button class="btn btn-primary"
                                                data-bs-toggle="modal"
                                                data-bs-target="#addcategory">
                                            <i class="ti ti-plus me-2"></i>Add Discount
                                        </button>
                                    </div>
                                    {{-- <small>&nbsp;</small> --}}
                                </div>
                                <span class="badge bg-label-primary rounded p-2">
                    <i class="ti ti-ticket ti-sm"></i>
                  </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card mb-4">
                        <form action="{{route('admin.discount.index')}}" method="GET">
                            <div class="card-body demo-vertical-spacing demo-only-element">
                                <div class="row mb-2">
                                    <div class="col-md-10">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text" id="basic-addon-search31"><i
                                                    class="ti ti-search"></i></span>
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="Cari data discount product..."
                                                aria-label="Cari data discount product..."
                                                aria-describedby="basic-addon-search31"
                                                name="search"
                                                value="{{ $search }}"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <button type="submit" class="btn btn-primary mx-1">
                                            <span class="ti ti-search me-1"></span>Search
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--/ Navbar pills -->

            <!-- Teams Cards -->
            <div class="row g-4">
                @if(count($allDiscount) > 0)
                    @foreach ($allDiscount as $data)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <a href="javascript:;" class="d-flex align-items-center">
                                            <div
                                                class="avatar rounded-circle badge bg-label-primary me-2 d-flex align-items-center justify-content-center"
                                                style="width: 40px; height: 40px;">
                                                <i class="ti ti-ticket"></i>
                                            </div>
                                            <div class="me-2 text-body h5 mb-0">{{$data->name}}</div>
                                        </a>
                                        <div class="ms-auto">
                                            <ul class="list-inline mb-0 d-flex align-items-center">
                                                <li class="list-inline-item">
                                                    <div class="dropdown">
                                                        <button
                                                            type="button"
                                                            class="btn dropdown-toggle hide-arrow p-0"
                                                            data-bs-toggle="dropdown"
                                                            aria-expanded="false"
                                                        >
                                                            <i class="ti ti-dots-vertical text-muted"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li>
                                                                <button class="dropdown-item"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#editcategory{{ $data->id }}">
                                                                    <i class="ti ti-pencil me-2"></i>Edit Discount
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <hr class="dropdown-divider"/>
                                                            </li>
                                                            <li>
                                                                <button class="dropdown-item text-danger"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#deletecategory{{ $data->id }}">
                                                                    <i class="ti ti-trash me-2"></i>Delete Discount
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="mb-3">
                                        This discount has a discount of
                                        @if($data->percentage)
                                            <span class="badge bg-label-success">{{ $data->percentage }} %</span>
                                        @elseif($data->amount)
                                            <span class="badge bg-label-success">Rp. {{ $data->amount }}</span>
                                        @endif
                                    </p>
                                    <div class="d-flex align-items-center pt-1">
                                        <div class="d-flex align-items-center">
                                            <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                                <li
                                                    data-bs-toggle="tooltip"
                                                    data-popup="tooltip-custom"
                                                    data-bs-placement="top"
                                                    title="Vinnie Mostowy"
                                                    class="avatar avatar-sm pull-up"
                                                >
                                                    <img class="rounded-circle" src="../../assets/img/avatars/5.png"
                                                         alt="Avatar"/>
                                                </li>
                                                <li
                                                    data-bs-toggle="tooltip"
                                                    data-popup="tooltip-custom"
                                                    data-bs-placement="top"
                                                    title="Allen Rieske"
                                                    class="avatar avatar-sm pull-up"
                                                >
                                                    <img class="rounded-circle" src="../../assets/img/avatars/12.png"
                                                         alt="Avatar"/>
                                                </li>
                                                <li
                                                    data-bs-toggle="tooltip"
                                                    data-popup="tooltip-custom"
                                                    data-bs-placement="top"
                                                    title="Julee Rossignol"
                                                    class="avatar avatar-sm pull-up"
                                                >
                                                    <img class="rounded-circle" src="../../assets/img/avatars/6.png"
                                                         alt="Avatar"/>
                                                </li>
                                                <li class="avatar avatar-sm">
                              <span
                                  class="avatar-initial rounded-circle pull-up"
                                  data-bs-toggle="tooltip"
                                  data-bs-placement="top"
                                  title="8 more"
                              >+8</span
                              >
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="text-center">
                        <img src="{{ asset('image/data-not-found.png') }}" alt="No Data Image" class="img-fluid w-40"/>
                    </div>
                @endif
            </div>
            <div class="row mt-4">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        @if ($allDiscount->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link" aria-hidden="true">&laquo;</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $allDiscount->previousPageUrl() }}" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                        @endif

                        <!-- Tombol Halaman -->
                        @php
                            $start = max($allDiscount->currentPage() - 2, 1);
                            $end = min($start + 4, $allDiscount->lastPage());

                            if ($end - $start < 4) {
                                $start = max($end - 4, 1);
                            }
                        @endphp

                        @for ($i = $start; $i <= $end; $i++)
                            <li class="page-item {{ $i == $allDiscount->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $allDiscount->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor

                        <!-- Tombol Next -->
                        @if ($allDiscount->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $allDiscount->nextPageUrl() }}" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        @else
                            <li class="page-item disabled">
                                <span class="page-link" aria-hidden="true">&raquo;</span>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
            <!--/ Teams Cards -->
        </div>
        <!-- / Content -->
    </div>

    {{-- ====================== ADD DATA ======================== --}}
    <div class="modal fade" id="addcategory" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                        <h4 class="onboarding-title text-body text-primary">Add New Discount</h4>
                        <small class="onboarding-info">
                            Please provide the necessary details for the new discount to effectively apply it to the
                            relevant products.
                        </small>

                    </div>
                    <form method="POST" action="{{ route('admin.discount.store') }}" class="row g-3">
                        @csrf
                        <div class="col-12 col-md-12">
                            <div class="input-group input-group-merge">
            <span id="basic-icon-default-fullname2" class="input-group-text">
                <i class="ti ti-signature"></i>
            </span>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="basic-icon-default-fullname"
                                    placeholder="Enter discount name"
                                    aria-label="Enter discount name"
                                    aria-describedby="basic-icon-default-fullname2"
                                    name="name"
                                    required
                                />
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <label for="discount-percentage" class="form-label">Percentage Discount (%)</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="ti ti-percentage"></i></span>
                                <input
                                    type="number"
                                    step="0.01"
                                    min="0"
                                    max="100"
                                    class="form-control"
                                    id="discount-percentage"
                                    placeholder="Enter percentage discount"
                                    name="percentage"
                                />
                            </div>
                            <small class="text-muted">Leave blank if using a fixed amount discount.</small>
                        </div>

                        <div class="col-12 col-md-6">
                            <label for="discount-amount" class="form-label">Fixed Amount Discount</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="ti ti-currency-dollar"></i></span>
                                <input
                                    type="number"
                                    step="0.01"
                                    min="0"
                                    class="form-control"
                                    id="discount-amount"
                                    placeholder="Enter fixed amount discount"
                                    name="amount"
                                />
                            </div>
                            <small class="text-muted">Leave blank if using a percentage discount.</small>
                        </div>

                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                            <button
                                type="reset"
                                class="btn btn-label-secondary"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            >
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- ====================== EDIT DATA ======================== --}}
    @foreach ($allDiscount as $data)
        <div class="modal fade" id="editcategory{{$data->id}}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h4 class="onboarding-title text-body text-primary">Edit Discount</h4>
                            <small class="onboarding-info">
                                Please update the information for this discount to ensure it is applied correctly to the
                                relevant products.
                            </small>
                        </div>
                        <form method="POST" action="{{ route('admin.discount.update', $data->id) }}" class="row g-3">
                            @csrf
                            @method('PUT')

                            <div class="col-12 col-md-12">
                                <div class="input-group input-group-merge">
            <span id="basic-icon-default-fullname2" class="input-group-text">
                <i class="ti ti-signature"></i>
            </span>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="basic-icon-default-fullname"
                                        placeholder="Enter discount name"
                                        aria-label="Enter discount name"
                                        aria-describedby="basic-icon-default-fullname2"
                                        name="name"
                                        value="{{ $data->name }}"
                                        required
                                    />
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <label for="discount-percentage" class="form-label">Percentage Discount (%)</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="ti ti-percentage"></i></span>
                                    <input
                                        type="number"
                                        step="0.01"
                                        min="0"
                                        max="100"
                                        class="form-control"
                                        id="discount-percentage"
                                        placeholder="Enter percentage discount"
                                        name="percentage"
                                        value="{{ $data->percentage }}"
                                    />
                                </div>
                                <small class="text-muted">Leave blank if using a fixed amount discount.</small>
                            </div>

                            <div class="col-12 col-md-6">
                                <label for="discount-amount" class="form-label">Fixed Amount Discount</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="ti ti-currency-dollar"></i></span>
                                    <input
                                        type="number"
                                        step="0.01"
                                        min="0"
                                        class="form-control"
                                        id="discount-amount"
                                        placeholder="Enter fixed amount discount"
                                        name="amount"
                                        value="{{ $data->amount }}"
                                    />
                                </div>
                                <small class="text-muted">Leave blank if using a percentage discount.</small>
                            </div>

                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">Update</button>
                                <button
                                    type="reset"
                                    class="btn btn-label-secondary"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                >
                                    Cancel
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    @endforeach

    {{-- ====================== DELETE DATA ======================== --}}
    @foreach ($allDiscount as $data)
        <div
            class="modal-onboarding modal fade animate__animated"
            id="deletecategory{{ $data->id }}"
            tabindex="-1"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content text-center">
                    <div class="modal-header border-0">
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body onboarding-horizontal p-0 d-block">
                        <div class="onboarding-media">
                            <img
                                src="{{ asset('image/delete.jpg') }}"
                                alt="boy-verify-email-light"
                                width="273"
                                class="img-fluid"
                                data-app-light-img="illustrations/boy-verify-email-light.png"
                                data-app-dark-img="illustrations/boy-verify-email-dark.png"
                            />
                        </div>
                        <div class="onboarding-content mb-0">
                            <h4 class="onboarding-title text-body text-danger">Delete {{ $data->name }}</h4>
                            <small class="onboarding-info">
                                By deleting {{ $data->name }}, this data will be permanently removed.
                            </small>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('admin.discount.destroy', $data->id) }}">
                        @csrf
                        @method('DELETE')
                        <div class="modal-footer border-0">
                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
