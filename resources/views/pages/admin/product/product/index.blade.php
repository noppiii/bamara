@extends('components.admin.main')
@section('title')
    Product | {{ config('app.name') }}
@endsection
@section('pages')
    Product Admin
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="text-primary">Welcome {{$user->name}}! 🎉</h5>
                                <p>Here you can control and manage all products</p>
                                <button id="viewDataLink" class="btn btn-sm btn-outline-primary">View Data</button>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img
                                    src="{{ asset('image/artikel.jpg') }}"
                                    height="150"
                                    alt="View Badge User"
                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Statistics -->
            <div class="col-lg-8 mb-4 col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title mb-0">Statistics Product</h5>
                        {{-- <small class="text-muted">Updated 1 month ago</small> --}}
                    </div>
                    <div class="card-body pt-2">
                        <div class="row gy-3">
                            <div class="col-md-4 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded-pill bg-label-primary me-3 p-2">
                                        <i class="ti ti-bottle ti-sm"></i>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="mb-0">{{$totalProducts}}</h5>
                                        <small>Total Product</small>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-4 col-6">
                              <div class="d-flex align-items-center">
                                <div class="badge rounded-pill bg-label-info me-3 p-2">
                                  <i class="ti ti-shopping-cart ti-sm"></i>
                                </div>
                                <div class="card-info">
                                  <h5 class="mb-0">{{ $bestSellingProduct->name }}</h5>
                                  <small>Best Selling Product</small>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded-pill bg-label-danger me-3 p-2">
                                        <i class="ti ti-heart ti-sm"></i>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="mb-0">{{$mostProductWishlist->name}}

                                        </h5>
                                        <small>Most Wishlist Product</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Reviews -->
            <div class="col-xl-4 col-lg-6 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="row h-100">
                        <div class="col-sm-5">
                            <div class="d-flex align-items-end h-100 justify-content-center mt-sm-0 mt-3">
                                <img
                                    src="{{ asset('image/add-data.jpg') }}"
                                    class="img-fluid mt-sm-4 mt-md-0"
                                    alt="add-new-roles"
                                    width="100"
                                />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="card-body text-sm-end text-center ps-sm-0">
                                <a href="{{ route('admin.product.create') }}"
                                   class="btn btn-primary mb-2 text-nowrap add-new-role d-block"
                                >
                                    + Product
                                </a>
                                <small class="mb-0 mt-1 d-block">Add product</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-xxl flex-grow-1 container-p-y">
                <!-- DataTable with Buttons -->
                <div class="card">
                    <div class="card-datatable table-responsive pt-0">
                        <table class="datatables-basic table">
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Sale</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1; ?>
                            @foreach($allProducts as $data)
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>
                                        {{ $data->orderItems->sum('quantity') }}
                                    </td>
                                    <td>
                                        {{$data->price}}
                                    </td>
                                    <td>
                                        @if($data->stock === 0)
                                            <span class="badge bg-label-danger">{{ $data->stock }}</span>
                                        @elseif($data->stock <= 5)
                                            <span class="badge bg-label-warning">{{ $data->stock }}</span>
                                        @else
                                            <span class="badge bg-label-success">{{ $data->stock }}</span>
                                        @endif

                                    </td>
                                    <td>
                                        <img
                                            src="{{ asset('store/product/image/' . $data->images->firstOrFail()->image_path) }}"
                                            alt="product-image"
                                            width="200"
                                            class="img-fluid"
                                            data-app-light-img="illustrations/boy-verify-email-light.png"
                                            data-app-dark-img="illustrations/boy-verify-email-dark.png"
                                        />
                                    </td>
                                    <td>
                                        <div class="d-inline-block">
                                            <a href="javascript:;"
                                               class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                               data-bs-toggle="dropdown"><i
                                                    class="text-primary ti ti-dots-vertical"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end m-0">'
                                                <button data-bs-toggle="modal"
                                                        data-bs-target="#viewProduct{{ $data->id }}"
                                                        class="dropdown-item"><i class="ti ti-eye me-1"></i>View
                                                </button>
                                                <a href="{{ route('admin.product.edit', $data->id) }}"
                                                   class="dropdown-item"><i class="ti ti-pencil me-1"></i>Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <button data-bs-toggle="modal"
                                                        data-bs-target="#deleteProduct{{ $data->id }}"
                                                        class="dropdown-item text-danger delete-record"><i
                                                        class="ti ti-trash me-1"></i>Delete
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- ============= SHOW DATA =============== --}}
        @foreach ($allProducts as $data)
            <div class="modal fade" id="viewProduct{{ $data->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-simple modal-edit-product">
                    <div class="modal-content p-3 p-md-5">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="text-center mb-4">
                                <h3 class="mb-2">{{ $data->name }}</h3>
                                <p class="text-muted">Information about {{ $data->name }}.</p>
                            </div>
                            <form id="editProductForm" class="row g-3" onsubmit="return false">
                                <div class="col-12 text-center">
                                    <div class="onboarding-media">
                                        <img
                                            src="{{ asset('store/product/images/' . $data->images->firstOrFail()) }}"
                                        alt="{{ $data->name }}"
                                        width="273"
                                        class="img-fluid"
                                        data-app-light-img="illustrations/product-light.png"
                                        data-app-dark-img="illustrations/product-dark.png"
                                        />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="modalEditProductName">Product Name</label>
                                    <input
                                        type="text"
                                        id="modalEditProductName"
                                        name="modalEditProductName"
                                        class="form-control"
                                        placeholder="Enter product name"
                                        value="{{ $data->name }}"
                                    />
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="modalEditProductPrice">Price</label>
                                    <input
                                        type="text"
                                        id="modalEditProductPrice"
                                        name="modalEditProductPrice"
                                        class="form-control"
                                        placeholder="Enter product price"
                                        value="{{ number_format($data->price, 0, ',', '.') }}"
                                    />
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="modalEditProductStock">Stock</label>
                                    <input
                                        type="number"
                                        id="modalEditProductStock"
                                        name="modalEditProductStock"
                                        class="form-control"
                                        placeholder="Enter stock quantity"
                                        value="{{ $data->stock }}"
                                    />
                                </div>
                                <div class="col-12">
                                    <label class="form-label d-block">Product Categories</label>
                                    @foreach($data->categories as $category)
                                    <span class="badge bg-label-primary">{{ $category->name }}</span>
                                    @endforeach
                                </div>
                                <div class="col-12">
                                    <label class="form-label d-block">Product Tags</label>
                                    @foreach($data->tags as $tag)  <!-- Adjust for tag relationship -->
                                    <span class="badge bg-label-info">{{ $tag->name }}</span>
                                    @endforeach
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="modalEditProductDescription">Description</label>
                                    <textarea
                                        id="modalEditProductDescription"
                                        class="form-control"
                                        placeholder="Enter product description"
                                        aria-label="Enter product description"
                                        style="height: 240px;"
                                    >{{ $data->description }}</textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="reset" data-bs-dismiss="modal"
                                            aria-label="Close"
                                            class="btn btn-primary me-sm-3 me-1">Close
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach



        {{-- ====================== DELETE DATA ======================== --}}
        @foreach ($allProducts as $data)
            <div
                class="modal-onboarding modal fade animate__animated"
                id="onboardHorizontalImageModal{{ $data->id }}"
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
                                <h4 class="onboarding-title text-body text-danger">Hapus {{ $data->nama }}</h4>
                                <small class="onboarding-info">
                                    Dengan menghapus {{ $data->nama }}, data ini akan terhapus secara permanen.
                                </small>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('admin.product.destroy', $data->id) }}">
                            @csrf
                            @method('DELETE')
                            <div class="modal-footer border-0">
                                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    @endforeach

        {{-- ====================== DELETE DATA ======================== --}}
        @foreach ($allProducts as $data)
            <div
                class="modal-onboarding modal fade animate__animated"
                id="deleteProduct{{ $data->id }}"
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
                        <form method="POST" action="{{ route('admin.product.destroy', $data->id) }}">
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
