@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            {{-- please insert data from here, change it to foreach --}}
            @for ($i = 0; $i < 3; $i++)
            <div class="card mb-3">
                <div class="card-header">{{ __('Dashboard') }} <a href="#"> View All</a></div>
                
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    <div class="">
                        <div class="d-flex justify-content-evenly  row row-col-5 ">
                            {{-- please insert data from here, change it to foreach --}}
                            @for ($j = 0; $j < 5; $j++)
                            <div class="border border-primary col-2 ">
                                <img class="img-fluid img-thumbnail"   src="{{Storage::url('Images\nerfGun.jpg')}}" alt="Responsive image">
                                <div class="text-start row ">
                                    <span class="d-inline-block text-truncate" style="max-width:300px; ">Nerf Gun 2022 Super Weapon </span>
                                    <span>IDR 123123412</span>
                                </div>
                            </div>
                            @endfor
                            
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            @endfor
            
        </div>
    </div>
</div>
@endsection
