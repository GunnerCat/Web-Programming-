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
            <div class="card mb-3">
                <div class="card-header">{{$category['name']}}</div>
                
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    <div class="container">
                        <div class="d-flex justify-content-auto row row-cols-5 ">
                            @foreach($items as $item)
                            <a class="col text-decoration-none" href="{{route('productDetail',$item['id'])}}" >
                                <img class="img-fluid img-thumbnail"   src="{{Storage::url($item['photo'])}}" alt="Responsive image">
                                <div class="text-start row ">
                                    <span class="d-inline-block text-truncate" style="max-width:300px; ">{{$item['name']}} </span>
                                    <span >IDR {{$item['price']}}</span>
                                </div>
                            </a>

                            @endforeach
                            
                        </div>
                    </div>
                    
                    
                </div>
            </div>      
        </div>
    </div>
</div>
@endsection
