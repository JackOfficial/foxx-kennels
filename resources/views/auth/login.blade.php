@extends('layouts.app')
@section('content')

	<!-- Main Container  -->
	<div class="main-container container" style="margin-top: 20px;">
		<ul class="breadcrumb">
			<li><a href="/"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Account</a></li>
			<li>Login</li>
		</ul>
		
		<div class="row">
			<div id="content" class="col-sm-12">
				<div class="page-login">
				
					<div class="account-border">
						<div class="row">
							<div class="col-sm-6 new-customer">
								<div class="well">
									<h2><i class="fa fa-file-o" aria-hidden="true"></i> New Customer</h2>
									<p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
									<p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
									<p>
										<a href="{{ url('/redirect') }}" class="btn btn-success btn-block"> <i class="fa fa-google"></i> &nbsp; Sign Up with
											Google</a>
									</p>
									<p>
										<a href="{{ url('/redirect') }}" class="btn btn-primary btn-block"> <i class="fa fa-facebook"></i> &nbsp; Sign Up with
											Facebook</a>
									</p>
									<div class="row my-2">
										<div class="col-md-5"><hr></div>
										<div class="col-md-2 text-center">or</div>
										<div class="col-md-5"><hr></div>
													</div>  
													<p>
														<a href="{{ route('register') }}" class="btn btn-danger btn-block"> <i class="fa fa-envelope"></i> &nbsp; Sign Up With Your Email</a>
													</p>							
								</div>
							</div>
							
							<form  method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
								@csrf
								<div class="col-sm-6 customer-login">
									<div class="well">
										<h2><i class="fa fa-file-text-o" aria-hidden="true"></i> Returning Customer</h2>
										<p><strong>I am a returning customer</strong></p>
										<div class="form-group">
											<label class="control-label " for="input-email">E-Mail Address</label>
											<input type="text" name="email" value="{{ old('email') }}" id="email" class="form-control @error('email') is-invalid @enderror" required />
											@error('email')
											<span class="invalid-feedback" role="alert" style="color:red;">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
										</div>
										<div class="form-group">
											<label class="control-label " for="input-password">Password</label>
											<input type="password" name="password" value="" id="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password" />
											@error('password')
											<span class="invalid-feedback" role="alert" style="color:red;">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
										</div>

										<div class="form-group">
											<input type="checkbox" checked="" name="remember" value="" id="remember" {{ old('remember') ? 'checked' : '' }}/>
											<span class="custom-control-label"> Remember </span>
										</div>
									</div>
									<div class="bottom-form">

										@if (Route::has('password.request'))
										<a href="{{ route('password.request') }}" class="float-right">{{ __('Forgot Password?') }}</a>
										@endif

										

										<input type="submit" value="Login" class="btn btn-default pull-right" />
									</div>
								</div>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- //Main Container -->

@endsection