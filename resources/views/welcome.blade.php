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
            <div class="welcome_form" autocomplete="off" class="overflow-hidden">
                <h1 class="text-center mt-2"><u>Business ERP</u></h1>
                <!-- step one sigin up -->
                <div class="step-one">
                    <!-- compnay name input -->
                    <div class="form-group overflow-hidden ">
                        <label for="companyName" class="d-none">Company Name</label>
                        <input type="text" class="form-control welcome-form-name round-0 required" id="companyName" name="company_name" placeholder="COMPANY NAME" >
                        
                    </div>

                    <!-- compnay name input -->

                    <div class="form-group overflow-hidden">
                        <label for="tegline" class="d-none">TAGLINE</label>
                        <input type="text" class="form-control welcome-form-name round-0 " id="tegline" name="tegline" placeholder="TAGLINE">
                        
                    </div>

                    
                    
                    <!-- compnay name input -->

                    <div class="form-group overflow-hidden">
                        <label for="website" class="d-none">WEBSITE</label>
                        <input type="website" class="form-control welcome-form-name round-0 " id="website" name="website" placeholder="WEBSITE">
                       
                    </div>

                    <!-- compnay name input -->

                    <div class="form-group overflow-hidden">
                        <label for="emailid" class="d-none">EMAIL ID</label>
                        <input type="email" class="form-control welcome-form-name round-0 required" id="emailid" name="emailid" placeholder="EMAIL ID">
                       
                    </div>
                    <!-- compnay name input -->

                    <div class="form-group overflow-hidden">
                        <label for="founder" class="d-none">FOUNDER</label>
                        <input type="text" class="form-control welcome-form-name round-0 required" id="founder" name="founder" placeholder="FOUNDER">
                        <small class="text-danger m-2 d-none"><i class="fa fa-warning"></i>field Can't Empty</small>
                    </div>
                    <!-- compnay name input -->

                    <div class="form-group overflow-hidden">
                        <label for="founderEmail" class="d-none">FOUNDER EMAIL</label>
                        <input type="email" class="form-control welcome-form-name round-0 required" id="founderEmail" name="email" placeholder="FOUNDER EMAIL">
                        <small class="text-danger m-2 d-none"><i class="fa fa-warning"></i>field Can't Empty</small>
                    </div>
                    <!-- NEXT BUTTON  -->
                    <div class="form-group overflow-hidden">
                        <button class="btn step-one-next-btn float-end">NEXT</button>

                    </div>
                </div>
                <!-- step two sigin up -->
                <div class="step-two  d-none">
                    <!-- compnay name input -->
                    <div class="form-group overflow-hidden ">
                        <label for="companyName" class="d-none">Contact Number</label>
                        <input type="text" class="form-control welcome-form-name round-0" id="ContactNumber" name="Contact_Number" placeholder="Contact Number">
                    </div>

                    <!-- compnay name input -->

                    <div class="form-group overflow-hidden">
                        <label for="tegline" class="d-none">STREET ADDRESS</label>
                        <input type="text" class="form-control welcome-form-name round-0" id="StreetAddress" name="StreetAddress" placeholder="STREET ADDRESS">
                    </div>

                    <!-- compnay name input -->

                    <div class="form-group overflow-hidden">
                        <label for="tegline" class="d-none">CITY</label>
                        <input type="text" class="form-control welcome-form-name round-0" id="City" name="City" placeholder="CITY">
                    </div>

                    <!-- compnay name input -->

                    <div class="form-group overflow-hidden">
                        <label for="website" class="d-none">STATE</label>
                        <input type="website" class="form-control welcome-form-name round-0" id="State" name="State" placeholder="STATE">
                    </div>

                    <!-- compnay name input -->

                    <div class="form-group overflow-hidden">
                        <label for="emailid" class="d-none">COUNTRY</label>
                        <input type="email" class="form-control welcome-form-name round-0" id="Country" name="Country" placeholder="COUNTRY">
                    </div>
                    <!-- compnay name input -->

                    <div class="form-group overflow-hidden">
                        <label for="founder" class="d-none">PINCODE</label>
                        <input type="text" class="form-control welcome-form-name round-0" id="Pincode" name="Pincode" placeholder="PINCODE">
                    </div>
                    <!-- compnay name input -->

                    <!-- NEXT BUTTON  -->
                    <div class="form-group overflow-hidden">
                        <button class="btn step-two-back-btn float-left">Back</button>
                        <button class="btn step-two-next-btn float-end">Next</button>
                    </div>
                </div>
                <!--  -->
                <!-- step-three sigin up -->
                <div class="step-three  d-none">
                    <!-- compnay gstin input -->
                    <div class="form-group overflow-hidden ">
                        <label for="gstin" class="d-none">GSTIN</label>
                        <input type="number" class="form-control welcome-form-name round-0" id="gstin" name="gstin" placeholder="GSTIN">
                    </div>

                    <!-- compnay starting date input -->

                    <div class="form-group overflow-hidden">
                        <label for="StartingDate" class="d-none">STARTING DATE</label>
                        <input type="Date" class="form-control welcome-form-name round-0" id="StartingDate" name="StartingDate" placeholder="STARTING DATE">
                    </div>

                    <!-- compnay startingDate input -->

                    <div class="form-group overflow-hidden">
                        <label for="startingDate" class="d-none">ENDING DATE</label>
                        <input type="text" class="form-control welcome-form-name round-0" id="startingDate" name="startingDate" placeholder="ENDING DATE">
                    </div>

                    <!-- compnay date input -->

                    <div class="form-group overflow-hidden">
                        <label for="date" class="d-none">DATE</label>
                        <input type="date" class="form-control welcome-form-name round-0" id="date" name="date" placeholder="DATE">
                    </div>

                    <!-- compnay facebookUrl input -->

                    <div class="form-group overflow-hidden">
                        <label for="facebookUrl" class="d-none">FACEBOOK URL</label>
                        <input type="url" class="form-control welcome-form-name round-0" id="facebookUrl" name="facebookUrl" placeholder="FACEBOOK URL">
                    </div>
                    <!-- compnay name input -->

                    <div class="form-group overflow-hidden">
                        <label for="twitterUrl" class="d-none">TWITTER URL</label>
                        <input type="url" class="form-control welcome-form-name round-0" id="twitterUrl" name="twitterUrl" placeholder="PITWITTER URL">
                    </div>
                    <!-- compnay name input -->

                    <!-- NEXT BUTTON  -->
                    <div class="form-group overflow-hidden">
                        <button class="btn step-three-back-btn float-left">Back</button>
                        <button class="btn step-three-next-btn float-end">Next</button>
                    </div>
                </div>

                <!-- step-four sigin up -->
                <div class="step-four  d-none">
                    <!-- compnay whatsapp number input -->
                    <div class="form-group overflow-hidden ">
                        <label for="whatsapp" class="d-none">WHATSAPP NUMBER</label>
                        <input type="number" class="form-control welcome-form-name round-0" id="whatsapp" name="whatsapp" placeholder="WHATSAPP NUMBER">
                    </div>

                    <!-- compnay Catagory input -->

                    <div class="form-group overflow-hidden">
                        <label for="Catagory" class="d-none">CATAGORY</label>
                        <select id="category" class="form-control welcome-form-name round-0"name="category">
                            <option value="select">Select</option>
                            <option value="select">Select</option>
                            <option value="select">Select</option>
                            <option value="select">Select</option>
                            <option value="select">Select</option>
                            <!-- Add other options here -->
                        </select>

                    </div>


                    <!-- NEXT BUTTON  -->
                    <div class="form-group overflow-hidden">
                        <button class="btn step-four-back-btn float-left">Back</button>
                        <button class="btn step-four-submit-btn float-end">SUBMIT</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection