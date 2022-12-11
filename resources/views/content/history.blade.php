@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xxl-12">
            @foreach($receipts  as $key=>$items)
            <div class="card mb-3">
                <div class="card-header">Transaction Date: {{$items['created_at']}}   </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="container">
                        <div class="row h2 fw-bold">
                            <div class="col-6 border ">
                              Name
                            </div>
                            <div class="col border">
                              Quantity
                            </div>
                            <div class="col border">
                              Sub Price
                            </div>
                        </div>
                            @foreach($items['items'] as $item)
                            <div class="row h3 mb-0">
                                <div class="col-6 border">
                                  {{$item['name']}}
                                </div>
                                <div class="col border">
                                    {{$item['pivot']['quantity']}}
                                </div>
                                <div class="col border">
                                    {{'IDR. '.number_format($item['price'], 2, '.', ',')}}
                                </div>
                            </div>
                            @endforeach
                            <div class="row h3 mb-0">
                                <div class="col-6 border">
                                    Total
                                </div>
                                <div class="col border">
                                    {{$items['totalQuantity']}} item(s)
                                </div>
                                <div class="col border">
                                    {{'IDR. '.number_format($items['totalPrice'], 2, '.', ',')}}
                                </div>
                            </div>
                        
                    </div>
                    
                    
                </div>
            </div>
            
            @endforeach            
        </div>
    </div>
</div>
@endsection
