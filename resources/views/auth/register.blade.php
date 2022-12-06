@extends('layouts.app')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<div class="container w-50">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        {{-- Name --}}
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        {{-- Password --}}
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

                        {{-- Gender --}}
                        <div class="row mb-3 ">
                            <label for="radio_button_gender" class="col-md-4 col-form-label text-md-end" >{{ __('Gender') }}</label>

                            <div class="d-flex flex-column col-md-6 @error('radio_button_gender') is-invalid  @enderror">
                                {{--no error message when validation failed, please add--}}
                                <div class="d-inline-flex form-check">
                                    <input class="form-check-input me-1 " type="radio" name="radio_button_gender" id="Male" value="Male" required>
                                    <label class="form-check-label" for="Male">
                                        Male
                                    </label>
                                </div>
                                <div class="d-inline-flex form-check">
                                    <input class="form-check-input me-1" type="radio"  name="radio_button_gender" id="Female" value="Female" required>
                                    <label class="form-check-label" for="Female">
                                        Female
                                    </label>
                                </div>
                                @error('radio_button_gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                
                            </div>

                        {{-- DOB --}}
                        <div class="row mb-3 ">
                            <label for="DOB" class="col-md-4 col-form-label text-md-end"> {{ __('Date of birth') }}</label>
                            <div class="col-md-6">
                                {{-- if possible make this a button instead of a writeable input box, but i dont really know how to make it :/ --}}
                                <input class="date form-control @error('DOB') is-invalid @enderror" name="DOB" style="float:right" type="text" data-toggle="tooltip" title="yy-mm-dd" >
                                @error('DOB')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Country name isnt using quite a db relationship that i want, storaging base on country id, but oh well maybe later--}}
                        <div class="row mb-3">
                            <label for="country" class="col-md-4 col-form-label text-md-end">{{ __('Country') }}</label>
                            <div class="col-md-6">
                                <select class="col-form-label form-control @error('country') is-invalid @enderror" style="" name="country" >
                                    <option value="" selected disabled hidden>Select a country</option>
                                    @foreach ($Countries as $country)
                                    <option value={{$country['name']}}>{{$country['name']}}</option>
                                    @endforeach
                                    
                                </select>
                                @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <p> have an Account? <a href="{{route('login')}}">Login Here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('.date').datepicker({  
       format: 'yyyy-mm-dd'
     });  

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

</script> 
@endsection
