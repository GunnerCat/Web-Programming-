@extends('layouts.app')

@section('content')

<div class="container d-flex flex-column align-items-center">
    @if(count($receipt)==0 )
        {{"there is nothing here :D"}}
    @else
        @if (count($receipt[0]['items'])==0)
            {{"there is nothing here :D"}}
        @else
            @foreach ($receipt as $items)
            @foreach ($items['items'] as $item)
            
            <div class="card mb-3 col-7 flex-row overflow-auto ">
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
                            <div class="me-5 vw-auto">Detail: &nbsp;&nbsp;&nbsp;&nbsp;</div>
                            <p class="text-break">{{$item['detail']}}</p>
                        </div>
                        <div class="d-flex flex-row">    
                            <div class="me-5 vw-auto">Quantity:</div>
                            <p>{{$item['pivot']['quantity']}}</p>
                            
                        </div>
                        <div class="d-flex flex-row">    
                            <div class="me-5 vw-auto">Price: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                            <p>{{'IDR.'.number_format($item['price']*$item['pivot']['quantity'], 2, '.', ',')}}</p>
                        </div>
                    </div>
                </div>
            </div>
                
            @endforeach 
            @endforeach
        @endif
        @endif
    
</div> 

@endsection
