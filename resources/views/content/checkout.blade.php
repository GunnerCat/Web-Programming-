@extends('layouts.app')

@section('content')

<div class="container d-flex flex-column align-items-center vh-100">
    @if(!$receipt)
        {{"there is nothing here :D"}}
    @else
        {{-- @foreach ($receipt as  $receipt) --}}
        @foreach ($receipt['items'] as $key=> $item)

        
        <div class="card mb-3 col-7 flex-row overflow-auto ">
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
                        {{-- how to padding? --}}
                        <div class="me-5 vw-auto">Detail: &nbsp;&nbsp;&nbsp;&nbsp;</div>
                        <p class="text-break">{{$item['detail']}}</p>
                    </div>
                    <div class="d-flex flex-row">    
                        <div class="me-5 vw-auto">Quantity:</div>
                            <p>{{$item['pivot']['quantity']}}</p>
                            
                        </div>
                        <div class="d-flex flex-row">    
                            <div class="me-5 vw-auto">Price Each:</div>
                            <p>{{'IDR.'.number_format($item['price'], 2, '.', ',')}}</p>
                        </div>
                        <div class="d-flex flex-row">    
                            <div class="me-5 vw-auto">Price: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                            <p>{{'IDR.'.number_format($item['price']*$item['pivot']['quantity'], 2, '.', ',')}}</p>
                        </div>
                        <form action="{{route('manageItem')}}" method="post">
                            @csrf
                            <div>
                                <input type="hidden" value="{{$item['id']}}" name="item_id">
                                <input type="hidden" value="{{$key}}" name="item_location">
                                <input type="hidden" value="{{$receipt['id']}}" name="receipt_id">
                                <button name="action" value="edit" type="submit" class="btn btn-primary">Edit</button>
                                <button name="action" value="remove" type="submit" class="btn btn-primary">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach 
        <div class="flex-row position-absolute">
            <div class="fixed-bottom d-flex py-2 bg-light border border-dark justify-content-center align-items-center">
                <div>
                    Total Price: {{'IDR.'.number_format($receipt['totalPrice'], 2, '.', ',')}} 
                </div>
                <form id="form" action="{{route('purchase')}}" method="post">
                    @csrf
                    <button id="btn" style="width: 200px" type="submit" class="mw-50 btn btn-outline-dark col-4">
                        {{__('Purchase') }}
                    </button>
                </form>
            </div>
        </div>
        {{-- @endforeach --}}
    @endif
</div> 

@endsection
