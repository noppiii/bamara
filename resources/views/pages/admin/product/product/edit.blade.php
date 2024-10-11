@extends('components.admin.main')
@section('title')
    Edit Product | {{ config('app.name') }}
@endsection
@section('pages')
    Edit Product Admin
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="text-primary">Edot Product</h5>
                                <p>Here you can edit product</p>
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
                <form class="card-body" action="{{ route('admin.product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row g-3">
                        <div class="row mb-3 mt-4">
                            <label class="col-sm-2 form-label" for="product-name">Name</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="ti ti-signature"></i></span>
                                    <input
                                        type="text"
                                        id="product-name"
                                        class="form-control"
                                        placeholder="Enter product name"
                                        name="name"
                                        value="{{ old('name', $product->name) }}"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="row mb-3 mt-4">
                            <label class="col-sm-2 form-label" for="product-stock">Stock</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="ti ti-brand-unsplash"></i></span>
                                    <input
                                        type="text"
                                        id="product-stock"
                                        class="form-control"
                                        placeholder="Enter product stock"
                                        name="stock"
                                        value="{{ old('stock', $product->stock) }}"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="row mb-3 mt-4">
                            <label class="col-sm-2 form-label" for="product-price">Price</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="ti ti-number"></i></span>
                                    <input
                                        type="text"
                                        id="product-price"
                                        class="form-control"
                                        placeholder="Enter product price"
                                        name="price"
                                        value="{{ old('price', $product->price) }}"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="removedImages" id="removedImages" value="">

                    <div class="row g-3">
                        <div class="row mb-3 mt-4">
                            <label class="col-sm-2 form-label" for="product-images">Images</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="ti ti-photo"></i></span>
                                    <input type="file" name="images[]" multiple class="form-control" accept="image/*" id="product-images"/>
                                    <label class="input-group-text" for="product-images">Upload</label>
                                </div>

                                <div class="mt-2">
                                    @foreach($product->images as $image)
                                        <div class="d-inline-block position-relative me-2 mb-2">
                                            <img src="{{ asset('store/product/image/' . $image->image_path) }}" alt="Product Image" width="100" class="img-fluid" data-image-id="{{ $image->id }}"/>
                                            <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0" onclick="removeImage('{{ $image->id }}')">Remove</button>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="row mb-3 mt-4">
                            <label class="col-sm-2 form-label" for="select-categories">Category</label>
                            <div class="col-sm-10">
                                <div class="select2-primary">
                                    <select id="select-categories" class="select2 form-select" name="category_product[]" multiple>
                                        @foreach ($allCategoryProducts as $data)
                                            <option value="{{ $data->id }}" {{ in_array($data->id, $product->categories->pluck('id')->toArray()) ? 'selected' : '' }}>
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
                            <label class="col-sm-2 form-label" for="select-tags">Tag</label>
                            <div class="col-sm-10">
                                <div class="select2-info">
                                    <select id="select-tags" class="select2 form-select" name="tag_product[]" multiple>
                                        @foreach ($allTagProducts as $data)
                                            <option value="{{ $data->id }}" {{ in_array($data->id, $product->tags->pluck('id')->toArray()) ? 'selected' : '' }}>
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
                            <label class="col-sm-2 form-label" for="select-discount">Discount</label>
                            <div class="col-sm-10">
                                <div class="select2-success">
                                    <select id="select-discount" class="select2-icons form-select" name="discount_id">
                                        <option value="">No Discount</option>
                                        @foreach ($allDiscounts as $data)
                                            <option value="{{ $data->id }}" {{ $product->discount_id == $data->id ? 'selected' : '' }} data-icon="ti ti-ticket">
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
                            <label class="col-sm-2 form-label" for="short-description">Short Description</label>
                            <div class="col-sm-10">
                                <div id="full-editor2">{!! $product->short_description !!}</div>
                                <textarea id="content2" name="short_description" style="display:none;">{!! $product->short_description !!}</textarea>                            </div>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="row mb-3 mt-4">
                            <label class="col-sm-2 form-label" for="full-description">Description</label>
                            <div class="col-sm-10">
                                <div id="full-editor">{!! $product->description !!}</div>
                                <textarea id="content" name="description" style="display:none;">{!! $product->description !!}</textarea>                                   </div>
                        </div>
                    </div>

                    <div class="pt-4">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Update</button>
                        <button type="reset" class="btn btn-label-secondary">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="drag-target"></div>

    <script>
        function removeImage(imageId) {
            let removedImages = document.getElementById('removedImages').value;
            removedImages += imageId + ',';
            document.getElementById('removedImages').value = removedImages;

            document.querySelector(`img[data-image-id="${imageId}"]`).parentElement.remove();
        }
    </script>
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
