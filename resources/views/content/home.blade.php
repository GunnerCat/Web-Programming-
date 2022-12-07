@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
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
       
            {{-- {{$items['id']}}   --}}
            @foreach($items as $categoryItems)
                
            <div class="card mb-3">
                <div class="card-header">{{$categoryItems[0]['category']['name']}} <a href="#"> View All</a></div>
                
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    <div class="">
                        <div class="d-flex justify-content-auto-start row row-cols-5 ">
                            @foreach($categoryItems as $item)

                            <a class="col text-decoration-none" href="#" >
                                <img class="img-fluid img-thumbnail"   src="{{Storage::url('Images\nerfGun.jpg')}}" alt="Responsive image">
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
            @endforeach            
        </div>
    </div>
</div>
@endsection
