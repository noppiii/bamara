@extends('components.admin.main')
@section('title')
    Tag Product | {{ config('app.name') }}
@endsection
@section('pages')
    Tag Product Admin
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
                                <p>Di sini Anda dapat mengontrol dan mengelola semua tag product</p>
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
                                    <span>Total Tag</span>
                                    <div class="d-flex align-items-center my-1">
                                        <h4 class="mb-0 me-2">{{$totalTags}}</h4>
                                        {{--                                        <span class="text-success">(+29%)</span>--}}
                                    </div>
                                    <small>Total Tag Product</small>
                                </div>
                                <span class="badge bg-label-primary rounded p-2">
                    <i class="ti ti-tag ti-sm"></i>
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
                                    <span>Tag Favorite</span>
                                    <div class="d-flex align-items-center my-1">
                                        <h6 class="mb-0 me-2">{{$favoriteTags->name}}</h6>
                                        {{--                                        <span class="text-success">(+18%)</span>--}}
                                    </div>
                                    <small>Tag with the Most Product Sales</small>
                                </div>
                                <span class="badge bg-label-secondary rounded p-2">
                    <i class="ti ti-tag ti-sm"></i>
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
                                    <span>Bidang Favorit</span>
                                    <div class="d-flex align-items-center my-1">
                                        <h6 class="mb-0 me-2">{{$mostProductTags->name}}</h6>
                                        {{--                                        <span class="text-danger">(-14%)</span>--}}
                                    </div>
                                    <small>Tag with the most products</small>
                                </div>
                                <span class="badge bg-label-info rounded p-2">
                    <i class="ti ti-tag ti-sm"></i>
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
                                    <span>Tambah Tag</span>
                                    <div class="d-flex align-items-center my-1">
                                        <button class="btn btn-primary"
                                                data-bs-toggle="modal"
                                                data-bs-target="#addTag">
                                            <i class="ti ti-plus me-2"></i>Add Tag
                                        </button>
                                    </div>
                                    {{-- <small>&nbsp;</small> --}}
                                </div>
                                <span class="badge bg-label-primary rounded p-2">
                    <i class="ti ti-tag ti-sm"></i>
                  </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card mb-4">
                        <form action="{{route('admin.tag-product.index')}}" method="GET">
                            <div class="card-body demo-vertical-spacing demo-only-element">
                                <div class="row mb-2">
                                    <div class="col-md-10">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text" id="basic-addon-search31"><i
                                                        class="ti ti-search"></i></span>
                                            <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Cari data tag product..."
                                                    aria-label="Cari data tag product..."
                                                    aria-describedby="basic-addon-search31"
                                                    name="search"
                                                    value="{{ $search }}"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <button type="submit" class="btn btn-primary mx-1">
                                            <span class="ti ti-search me-1"></span>Cari
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
                @if(count($allTags) > 0)
                    @foreach ($allTags as $data)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <a href="javascript:;" class="d-flex align-items-center">
                                            <div class="me-2 text-body h5 mb-0">{{ $data->name }}</div>
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
                                                                        data-bs-target="#editTag{{ $data->id }}">
                                                                    <i class="ti ti-pencil me-2"></i>Edit Tag
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <hr class="dropdown-divider"/>
                                                            </li>
                                                            <li>
                                                                <button class="dropdown-item text-danger"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#deleteTag{{ $data->id }}">
                                                                    <i class="ti ti-trash me-2"></i>Delete Tag
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center pt-1">
                                        <div class="d-flex align-items-center">
                                            <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                                @foreach ($data->products as $products)
                                                    @if ($products)
                                                        <li
                                                                data-bs-toggle="tooltip"
                                                                data-popup="tooltip-custom"
                                                                data-bs-placement="top"
                                                                title="{{ $products->name }}"
                                                                class="avatar avatar-sm pull-up"
                                                        >
                                                            <img class="rounded-circle"
                                                                 src="{{asset('store/user/photo/psikolog/' . $products->images->firstOrFail())}}"
                                                                 alt="{{ $products->name }}"/>
                                                        </li>
                                                    @endif
                                                @endforeach
                                                <li class="avatar avatar-sm">
                                                @if ($data->products->count() > 4)
                                                    <li class="avatar avatar-sm">
                                                         <span
                                                                 class="avatar-initial rounded-circle pull-up"
                                                                 data-bs-toggle="tooltip"
                                                                 data-bs-placement="top"
                                                                 title="{{ $data->products->count() - 4 }} more"
                                                         >{{ $data->products->count() - 4 }}</span
                                                         >
                                                    </li>
                                                @endif
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
                        <!-- Tombol Previous -->
                        @if ($allTags->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link" aria-hidden="true">&laquo;</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $allTags->previousPageUrl() }}" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                        @endif

                        <!-- Tombol Halaman -->
                        @php
                            $start = max($allTags->currentPage() - 2, 1);
                            $end = min($start + 4, $allTags->lastPage());

                            if ($end - $start < 4) {
                                $start = max($end - 4, 1);
                            }
                        @endphp

                        @for ($i = $start; $i <= $end; $i++)
                            <li class="page-item {{ $i == $allTags->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $allTags->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor

                        <!-- Tombol Next -->
                        @if ($allTags->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $allTags->nextPageUrl() }}" aria-label="Next">
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
    <div class="modal fade" id="addTag" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                        <h4 class="onboarding-title text-body text-primary">Add New Tag</h4>
                        <small class="onboarding-info">
                            Please provide the information for the new tag to better categorize your products.
                        </small>

                    </div>
                    <form method="POST" action="{{ route('admin.tag-product.store') }}" class="row g-3">
                        @csrf
                        <div class="col-12 col-md-12">
                            <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                            ><i class="ti ti-signature"></i
                                ></span>
                                <input
                                        type="text"
                                        class="form-control"
                                        id="basic-icon-default-fullname"
                                        placeholder="Enter tag name"
                                        aria-label="Enter tag name"
                                        aria-describedby="basic-icon-default-fullname2"
                                        name="name"
                                />
                            </div>
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
    @foreach ($allTags as $data)
        <div class="modal fade" id="editTag{{$data->id}}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h4 class="onboarding-title text-body text-primary">Edit Tag</h4>
                            <small class="onboarding-info">
                                Please update the information for this tag to ensure your products are properly
                                categorized.
                            </small>
                        </div>
                        <form method="POST" action="{{ route('admin.tag-product.update', $data->id) }}" class="row g-3">
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
                                            placeholder="Enter tag name"
                                            aria-label="Enter tag name"
                                            aria-describedby="basic-icon-default-fullname2"
                                            name="name"
                                            value="{{ $data->name }}"
                                    />
                                </div>
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
    @endforeach

    {{-- ====================== DELETE DATA ======================== --}}
    @foreach ($allTags as $data)
        <div
            class="modal-onboarding modal fade animate__animated"
            id="deleteTag{{ $data->id }}"
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
                    <form method="POST" action="{{ route('admin.tag-product.destroy', $data->id) }}">
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
