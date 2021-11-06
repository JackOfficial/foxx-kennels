
@extends('layouts.app')
@section('content')

<div class="main-container container" style="margin-top: 20px;">
    <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Account</a></li>
        <li>Register</li>
    </ul>
    
    <div class="row">
        <div id="content" class="col-sm-12">
            <h2 class="title">Register Account</h2>
            <p>If you already have an account with us, please login at the <a href="{{route('login')}}">login</a>.</p>
 <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="form-horizontal account-register clearfix">
    @csrf
                <fieldset id="account">
                    <legend>Your Personal Details</legend>
                    <div class="form-group required" style="display: none;">
                        <label class="col-sm-2 control-label">Customer Group</label>
                        <div class="col-sm-10">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="customer_group_id" value="1" checked="checked"> Default
                                </label>
                            </div>
                        </div>
                    </div>
                    <div></div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="name">Full Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="{{old('name')}}" placeholder="Full Name" id="name" class="form-control @error('name') is-invalid @enderror" required autocomplete="name">
                            @error('name')
                            <span class="invalid-feedback" role="alert" style="color:red;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" value="{{old('email')}}"  placeholder="E-Mail" id="email" class="form-control @error('email') is-invalid @enderror" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert" style="color:red;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
                        <div class="col-sm-10">
                            <input type="tel" name="phone" value="{{old('phone')}}"  placeholder="Telephone" id="phone" class="form-control @error('phone') is-invalid @enderror" required autocomplete="phone" >
                            @error('phone')
                            <span class="invalid-feedback" role="alert" style="color:red;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                </fieldset>
                <fieldset id="address">
                    <legend>Your Address</legend>
                    
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-city">City</label>
                        <div class="col-sm-10">
                            <input type="text" name="city" value="{{old('city')}}"  placeholder="City" id="city" class="form-control @error('city') is-invalid @enderror" required autocomplete="city">
                            @error('city')
                            <span class="invalid-feedback" role="alert" style="color:red;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-country">Country</label>
                        <div class="col-sm-10">
                            <select name="country" id="country" class="form-control @error('country') is-invalid @enderror" autocomplete="country" required>
                                <option value=""> --- Please Select --- </option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Burundi">Burundi</option>
                                <option value="DRC">DRC</option>
                                <option value="Tanzania">Tanzania</option>
                            </select>
                            @error('country')
                            <span class="invalid-feedback" role="alert" style="color:red;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Your Password</legend>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="password">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" value="{{old('password')}}"  placeholder="Password" id="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert" style="color:red;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-confirm">{{ __('Confirm Password') }}</label>
                        <div class="col-sm-10">
                            <input type="password" name="password_confirmation" value="{{old('confirm')}}"  placeholder="Password Confirm" id="password-confirm" class="form-control" required autocomplete="new-password">
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Newsletter</legend>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Subscribe</label>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                                <input type="radio" name="subscribe" value="1" checked="checked"> Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="subscribe" value="0"> No
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="buttons">
                    <div class="pull-right">By signing up, you agree to our <a href="#" class="agree"><b>terms of use</b></a>
                      &nbsp; &nbsp;<input type="submit" name="signup" value="Sign Up" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- //Main Container -->

@endsection
