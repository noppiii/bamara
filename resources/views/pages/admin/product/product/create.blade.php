@extends('components.admin.main')
@section('title')
    Add Product | {{ config('app.name') }}
@endsection
@section('pages')
    Add Product Admin
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="text-primary">Add Product</h5>
                                <p>Here you can add product</p>
                                <button id="viewDataLink" class="btn btn-sm btn-outline-primary">View Form</button>
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
            <!-- Multi Column with Form Separator -->
            <div class="card mb-4">
                <form class="card-body" action="{{ route('admin.product.store') }}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="row mb-3 mt-4">
                            <label class="col-sm-2 form-label" for="basic-icon-default-email">Name</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="ti ti-signature"></i></span>
                                    <input
                                        type="text"
                                        id="basic-icon-default-email"
                                        class="form-control"
                                        placeholder="Enter product name"
                                        aria-describedby="basic-icon-default-email2"
                                        name="name"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="row mb-3 mt-4">
                            <label class="col-sm-2 form-label" for="basic-icon-default-email">Stock</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="ti ti-brand-unsplash"></i></span>
                                    <input
                                        type="text"
                                        id="basic-icon-default-email"
                                        class="form-control"
                                        placeholder="Enter product stock"
                                        aria-describedby="basic-icon-default-email2"
                                        name="stock"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="row mb-3 mt-4">
                            <label class="col-sm-2 form-label" for="basic-icon-default-email">Price</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="ti ti-number"></i></span>
                                    <input
                                        type="text"
                                        id="basic-icon-default-email"
                                        class="form-control"
                                        placeholder="Enter product stock"
                                        aria-describedby="basic-icon-default-email2"
                                        name="price"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row g-3">
                            <div class="row mb-3 mt-4">
                                <label class="col-sm-2 form-label" for="basic-icon-default-email">
                                    Image</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class="ti ti-photo"></i></span>
                                        <input type="file" name="images[]" multiple class="form-control" accept="image/*" id="inputGroupFile02"/>
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="row mb-3 mt-4">
                                <label class="col-sm-2 form-label" for="basic-icon-default-email">Category</label>
                                <div class="col-sm-10">
                                    <div class="select2-primary">
                                        <select id="select2Primary" class="select2 form-select"
                                                name="category_product[]" multiple>
                                            @foreach ($allCategoryProducts as $data)
                                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="row mb-3 mt-4">
                                <label class="col-sm-2 form-label" for="basic-icon-default-email">Tag</label>
                                <div class="col-sm-10">
                                    <div class="select2-info">
                                        <select id="select2Info" class="select2 form-select" name="tag_product[]"
                                                multiple>
                                            @foreach ($allTagProducts as $data)
                                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="row g-3">
                        <div class="row mb-3 mt-4">
                            <label class="col-sm-2 form-label" for="basic-icon-default-email">Discount</label>
                            <div class="col-sm-10">
                                <div class="select2-success">
                                    <select id="select2Icons" class="select2-icons form-select" name="discount_id">
                                        <option value="">No Discount</option>
                                        @foreach ($allDiscounts as $data)
                                            <option value="{{ $data->id }}" {{ old('discount_id') == $data->id ? 'selected' : '' }} data-icon="ti ti-ticket">
                                                {{ $data->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row g-3">
                            <div class="row mb-3 mt-4">
                                <label class="col-sm-2 form-label" for="basic-icon-default-email">Sort Description</label>
                                <div class="col-sm-10">
                                    <div id="full-editor2"></div>
                                    <textarea id="content2" name="short_description" style="display:none;"></textarea>
                                </div>
                            </div>
                        </div>
                    <div class="row g-3">
                        <div class="row mb-3 mt-4">
                            <label class="col-sm-2 form-label" for="basic-icon-default-email">Description</label>
                            <div class="col-sm-10">
                                <div id="full-editor"></div>
                                <textarea id="content" name="description" style="display:none;"></textarea>
                            </div>
                        </div>
                    </div>
                        <div class="pt-4">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                            <button type="reset" class="btn btn-label-secondary">Cancel</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <div class="drag-target"></div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var quillDescription = new Quill('#full-editor', {
                theme: 'snow'
            });

            var quillSortDescription = new Quill('#full-editor2', {
                theme: 'snow'
            });

            var form = document.querySelector('form');
            form.onsubmit = function () {
                var contentDescription = document.querySelector('#content');
                contentDescription.value = quillDescription.root.innerHTML;

                var contentSortDescription = document.querySelector('#content2');
                contentSortDescription.value = quillSortDescription.root.innerHTML;
            };
        });
    </script>

@endsection
