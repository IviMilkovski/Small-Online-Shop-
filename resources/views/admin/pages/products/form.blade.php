@extends('layouts.admin')

@section('title')
    Admin | Lil'Shop | Product | Form
@endsection

@section('description')
    Online shop - Edit or Add products
@endsection

@section('keywords')
    admin panel, product, category, edit, add
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">
                @if($action == "create")
                    Create product
                @else
                    Edit product
                @endif
            </h1>
            <form enctype="multipart/form-data" method="POST"
                  @if($action == "create")
                  action="{{ route('product_create_post') }}"
                  @else

                  action="{{ route('product_edit_post', ['id' => $product->id ]) }}"
                  @endif
            >
                @csrf

                <div class="form-group mt-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}"  placeholder="Name">

                </div>
                <div class="form-group mt-3">
                    <label for="name">Image</label>
                    <input type="file" class="form-control" id="image" name="image"  placeholder="Image">
                    <img src="{{asset('assets/img/'. $product->image)}}" alt="{{ $product->name }}" height="50px">
                </div>
                <div class="form-group mt-3">
                    <label for="name">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{$product->description}}"  placeholder="Description">
                </div>
                @if($action == "edit")
                @foreach($product->prices as $p)
                        <div class="form-group mt-3">
                            <label for="name">Price</label>
                            <input type="text" class="form-control" id="price" name="price" value="{{$p->price}}"  placeholder="Price">
                        </div>
                    @endforeach
                        @else
                        <div class="form-group mt-3">
                            <label for="name">Price</label>
                            <input type="text" class="form-control" id="{{$product->id}}" name="price" value="{{$product->price}}"  placeholder="Price">
                        </div>
                            @endif

                <div class="mt-3">
                    <p>Sizes</p>
                    @foreach($sizes as $size)
                        <div class="custom-control custom-checkbox mr-5">
                            <input type="checkbox" class="custom-control-input" id="size{{ $size->id }}" name="size_id[]" value="{{ $size->id }}"
                                   @if(isset($product) && in_array($size->id, $product->sizes()->pluck('size_id')->toArray()))
                                   checked
                                   @elseif(is_array(old('size_id')) && in_array($size->id, old('size_id')))
                                   checked
                                @endif
                            />
                            <label class="custom-control-label" for="size{{ $size->id }}">{{ $size->name }}</label>
                        </div>
                    @endforeach
                </div>
                <div class="mt-3">
                    <p>Categories</p>
                    @foreach($categories as $category)
                        <div class="custom-control custom-checkbox mr-5">
                            <input type="checkbox" class="custom-control-input" id="category{{ $category->id }}" name="category_id[]" value="{{ $category->id }}"
                                   @if(isset($product) && in_array($category->id, $product->categories()->pluck('category_id')->toArray()))
                                   checked
                                   @elseif(is_array(old('category_id')) && in_array($category->id, old('category_id')))
                                   checked
                                @endif
                            />
                            <label class="custom-control-label" for="category{{ $category->id }}">{{ $category->name }}</label>
                        </div>
                    @endforeach
                </div>
                <div class="mt-3">
                    <p>Colors</p>
                    @foreach($colors as $color)
                        <div class="custom-control custom-checkbox mr-5">
                            <input type="checkbox" class="custom-control-input" id="color{{ $color->id }}" name="color_id[]" value="{{ $color->id }}"
                                   @if(isset($product) && in_array($color->id, $product->colors()->pluck('color_id')->toArray()))
                                   checked
                                   @elseif(is_array(old('color_id')) && in_array($color->id, old('color_id')))
                                   checked
                                @endif
                            />
                            <label class="custom-control-label" for="color{{ $color->id }}">{{ $color->name }}</label>
                        </div>
                    @endforeach
                </div>
                <br>
                <div class="form-group form-check form-check-inline mt-3">
                    <label for="featured">Featured</label>
                    <input type="radio"  class="form-check-input" id="featured"  name="optionFeatured" value="Radio{{$product->featured}}" @if($product->featured) checked  @endif">
                </div>
                <button class="btn btn-success mt-3" type="submit">
                    @if($action == "create")
                        Create
                    @else
                        Edit
                    @endif
                </button>

            </form>
        </div>
    </div>
@endsection
