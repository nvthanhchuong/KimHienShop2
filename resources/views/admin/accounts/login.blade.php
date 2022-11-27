@extends('layouts.app')
@section('title', 'Sign In')
@section('content')
	<div class="bg-login-page">
        <div class="login-form clearfix">
				<div class="image-login">
					<img src="{{ asset('images/login-form.jpg') }}" alt="">
				</div>
			<form action="{{ route('login.loginAction') }}" method="POST">
				@csrf
				<div class="sign-in">
					<div class="sign-in-title">
						<h3>Sign In</h3>
					</div>
					<div class="sign-in-form">
						<div class="input-group mb-3 ip-email">
							<span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
							<input type="email" class="form-control" placeholder="Email address" name="email" aria-label="Email" aria-describedby="basic-addon1">
						</div>
						<div class="input-group mb-3 ip-password">
							<span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
							<input type="password" class="form-control" placeholder="Password" name="password" aria-label="Password" aria-describedby="basic-addon1">
						</div>
						<div class="form-check remember-me">
							<input class="form-check-input c5" type="checkbox" value="" id="flexCheckDefault">
  							<label class="form-check-label" for="flexCheckDefault">Remember me</label>
						  </div>
						<div class="btn-sign-in">
							<button type="submit" class="btn">Sign in</button>
						</div>
					</div>
				</div>
			</form>
		</div>
		<!--Footer-->
		<div class="footer">
			<div class="footer-title">
				<p>Coppyright © by <strong><a href="https://facebook.com/nvthanhchuong" target="_blank">ThanhChuong™</a></strong></p>
			</div>
		</div>
	</div>
@endsection
