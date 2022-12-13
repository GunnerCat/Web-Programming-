@extends('layouts.app')

@section('content')
<div class="container d-flex flex-column align-items-center">
    
    <div class="card mb-3 col-7 flex-row overflow-auto h-100">
        <div class="card-body justify-content-start d-flex col-5">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <img class="img-thumbnail col-4"   src="{{Storage::url($item['photo'])}}" alt="Responsive image">
            <div class="d-flex flex-column m-3">     
                <div class="fw-bold h3 text-break">{{$item['name']}}</div>
                    <div class="d-flex flex-row">    
                        <div class="me-5 vw-auto">Detail: </div>
                        <p class="text-break">{{$item['detail']}}</p>
                    </div>
                    <div class="d-flex flex-row">    
                        <div class="me-5 vw-auto">Price: &nbsp;</div>
                        <p>{{'IDR. '.number_format($item['price'], 2, '.', ',')}}</p>
                    </div>
                    @if(Auth::check() && Auth::user()['admin']==false)
                    <form id="form" action="{{route('addToCart')}}" method="POST">
                        @csrf
                        <div class="d-flex flex-row">
                            <div class="me-5 vw-auto">qty: &nbsp;&nbsp;&nbsp;&nbsp;</div>
                            <input type="text" id="quantity" name="quantity">
                        </div>

                        <input type="hidden"  id="item_id" name="item_id" value="{{$item['id']}}">
                        <input type="hidden"  id="user_id" name="user_id" value="{{Auth::user()['id']}}">
                        <input type="hidden"  id="item_price" name="price" value="{{$item['price']}}" hden>
                        <button id="btn" type="submit" class="btn btn-outline-dark mt-3 col-4">
                            {{__('Purchase') }}
                        </button>
                    </form>
                    @endif
                </div>
            </div>
            
        </div>
    </div>    
</div>
@endsection
