@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xxl-12">
            <form action="{{route('search')}}" type="get">
                <div class="input-group mb-4 d-flex justify-content-start">
                    <div class="w-75 rounded-start">
                        <input type="search" id="form1" name='query' class="form-control" placeholder="Search"/>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>

            @foreach($items as $key=>$categoryItems)

            <div class="card mb-3">
                {{-- Temporary fix, its bad --}}
                <div class="card-header">{{$categories[$key-1]['name']}}   <a href="{{route('category',$key)}}">View All</a></div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="container">
                        <div class="d-flex justify-content-auto row row-cols-5 ">
                            @foreach($categoryItems as $item)
                            <a class="col text-decoration-none d-flex flex-column"  href="{{route('productDetail',$item['id'])}}" >
                                <div>
                                    <img  src="{{Storage::url($item['photo'])}}" alt="Responsive image" class="cont-img">
                                </div>
                                <div class="position-sticky top-100">
                                    <div class="row">
                                        <span class="d-inline-block text-truncate" style="max-width:300px; ">{{$item['name']}} </span>
                                        <span >{{'IDR. '.number_format($item['price'], 2, '.', ',')}}</span>
                                    </div>
                                </div>
                            </a>

                            @endforeach

                        </div>
                    </div>


                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>
@endsection
