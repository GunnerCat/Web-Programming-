@extends('layouts.app')

@section('content')
<div class="container d-flex flex-column justify-content-center align-items-center">
    
    <div class="card mb-3 col-7 flex-row overflow-auto h-100">
        <div class="card-body justify-content-start d-flex col-5">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <img class="img-thumbnail col-4"   src="{{Storage::url('Images\nerfGun.jpg')}}" alt="Responsive image">
            <div class="d-flex flex-column m-3">     
                <div class="fw-bold h3 text-break">{{$item['name']}}</div>
                    <div class="d-flex flex-row">    
                        <div class="me-5 vw-auto">Detail: </div>
                        <p class="text-break">{{$item['detail']}}</p>
                    </div>
                    <div class="d-flex flex-row">    
                        <div class="me-5 vw-auto">Price: &nbsp;</div>
                        <p>{{$item['price']}}</p>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="me-5 vw-auto">qty: &nbsp; &nbsp; </div>
                        <input type="text">
                    </div>
                    <button type="submit" class="btn btn-outline-dark mt-3 col-4">
                        {{ __('Purchase') }}
                    </button>
                </div>
            </div>
            
        </div>
    </div>    
</div>
@endsection
