@extends('layouts.app')

@section('content')
<div class='container'>
    <div class="d-flex justify-content-center">
        <div class="card w-50">
            <div class="card-header"> testing</div>
            <form class="p-3" action="@yield('action','{{route("addProduct")}}')" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="name_input">Product Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name_input" name="name" placeholder="">
                    @error('name') 
                    <div class="pb-1 fw-bold border-1 text-danger">
                        {{$message }}
                    </div>
                     @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="Category">Category</label>
                    <select class="form-control @error('category') is-invalid @enderror" id="Category" name="category">
                        <option value="" selected hidden>Select product Category</option>
                        @foreach ($categories as $category)
                            <option value="{{$category['id']}}">{{$category['name']}}</option>
                        @endforeach
                    </select>
                    @error('category') 
                    <div class="pb-1 fw-bold border-1 text-danger">
                        {{$message }}
                    </div>
                     @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="detail">Detail</label>
                    <textarea class="form-control @error('detail') is-invalid @enderror" id="detail" name='detail'  rows="10"></textarea>
                    @error('detail') 
                    <div class="pb-1 fw-bold border-1 text-danger">
                        {{$message }}
                    </div>
                     @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="price">Price</label>
                    <input class="form-control @error('price') is-invalid @enderror" id="price" name='price'>
                    @error('price') 
                    <div class="pb-1 fw-bold border-1 text-danger">
                        {{$message }}
                    </div>
                     @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="formFile">Photo</label>
                    <input class="form-control @error('photo') is-invalid @enderror" type="file" id="formFile" name='photo'>
                    @error('photo') 
                    <div class="pb-1 fw-bold border-1 text-danger">
                        {{$message }}
                    </div>
                     @enderror
                </div>

                <button type="submit" class="btn btn-secondary mt-3">Add Product</button>
            </form>
        </div>
    </div>
</div>
    @endsection
    
