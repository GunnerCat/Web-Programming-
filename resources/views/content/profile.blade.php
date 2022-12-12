@extends('layouts.app')

@section('content')
<div class='container'>
    <div class="d-flex justify-content-center">
        <div class="card w-50">
            <div class="card-header"> Profile</div>
            <div class="m-4 mt-2">
                <div class="form-group mb-3">
                    <label for="name_input">Name</label>
                    <input type="text" class="form-control" id="name_input" name="name" value="{{Auth::user()['name']}}" disabled>
                </div>
                
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input class="form-control" id="email" name='email' value="{{Auth::user()['email']}}" disabled>
                </div>
                <div class="form-group mb-3">
                    <label for="gender">Gender</label>
                    <input class="form-control" type="text" id="gender" value="{{Auth::user()['gender']}}" disabled>
                </div>     
                <div class="form-group mb-3">
                    <label for="DOB">Date of Birth</label>
                    <input class="form-control" type="text" id="DOB" name='dob' value="{{Auth::user()['dob']}}" disabled>
                </div>
                <div class="form-group mb-3">
                    <label for="name_input">Country</label>
                    <input type="text" class="form-control" id="name_input" name="country" value="{{Auth::user()['country']['name']}}" disabled>
                </div>

            </div>
                
        </div>
    </div>
</div>

@endsection

