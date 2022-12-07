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
                <div class="card-header">{{'Items for '.$_GET["query"] }} </div>
                
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    <div class="container  ">
                        <div class="d-flex justify-content-center  row row-cols-5 ">
                            {{-- please insert data from here, change it to foreach --}}
                            @for ($j = 0; $j < 10; $j++)
                            <a class="col mb-5" href="#">
                                <img class="img-fluid img-thumbnail"   src="{{Storage::url('Images\nerfGun.jpg')}}" alt="Responsive image">
                                <div class="text-start row ">
                                    <span class="d-inline-block text-truncate" style="max-width:300px; ">Nerf Gun 2022 Super Weapon </span>
                                    <span>IDR 123123412</span>
                                </div>
                            </a>
                            @endfor
                            
                        </div>
                    </div>
                    
                    
                </div>
            </div>

            
        </div>
    </div>
</div>
@endsection
