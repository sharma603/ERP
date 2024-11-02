@extends('default.default')
<!-- this is title -->
@section('title')
Script ERP
@endsection
@section('custome-css')
<link href="{{ asset('lang/css/welcome.css') }}" rel="stylesheet">
@endsection
@section('cutome-js')
<script src="{{ asset('lang/javascript/welcome.js') }}"></script>

@endsection
<!-- this body -->
@section('body')<div class="container border">
    <div class="row">
        <div class="col-6 border" id="box-1">
            <img src="{{ asset('images/welcome.jpg') }}" alt="Welcome Image" class="img-fluid">
        </div>
        <div class="col-6">
            <div class="welcome_form" autocomplete="off">
                <h1 class="text-center mt-2"><u>Business ERP</u></h1>
                <!-- step one sigin up -->
                <div class="step-one">
                    <!-- compnay name input -->
                    <div class="form-group overflow-hidden ">
                        <label for="companyName" class="d-none">Company Name</label>
                        <input type="text" class="form-control welcome-form-name round-0" id="companyName" name="company_name" placeholder="COMPANY NAME">
                    </div>

                    <!-- compnay name input -->

                    <div class="form-group overflow-hidden">
                        <label for="tegline" class="d-none">TAGLINE</label>
                        <input type="text" class="form-control welcome-form-name round-0" id="tegline" name="tegline" placeholder="TAGLINE">
                    </div>

                     <!-- compnay name input -->

                     <div class="form-group overflow-hidden">
                        <label for="tegline" class="d-none">TAGLINE</label>
                        <input type="text" class="form-control welcome-form-name round-0" id="tegline" name="tegline" placeholder="TAGLINE">
                    </div>

                     <!-- compnay name input -->

                     <div class="form-group overflow-hidden">
                        <label for="website" class="d-none">WEBSITE</label>
                        <input type="website" class="form-control welcome-form-name round-0" id="website" name="website" placeholder="WEBSITE">
                    </div>

                     <!-- compnay name input -->

                     <div class="form-group overflow-hidden">
                        <label for="emailid" class="d-none">EMAIL ID</label>
                        <input type="email" class="form-control welcome-form-name round-0" id="emailid" name="emailid" placeholder="EMAIL ID">
                    </div>
                     <!-- compnay name input -->

                    <div class="form-group overflow-hidden">
                        <label for="founder" class="d-none">FOUNDER</label>
                        <input type="text" class="form-control welcome-form-name round-0" id="founder" name="founder" placeholder="FOUNDER">
                    </div>
                     <!-- compnay name input -->

                     <div class="form-group overflow-hidden">
                        <label for="founderEmail" class="d-none">FOUNDER EMAIL</label>
                        <input type="email" class="form-control welcome-form-name round-0" id="founderEmail" name="email" placeholder="FOUNDER EMAIL">
                    </div>
                    <!-- NEXT BUTTON  -->
                    <div class="form-group overflow-hidden">    
                        <button class="btn float-end">NEXT</button> 

                </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection