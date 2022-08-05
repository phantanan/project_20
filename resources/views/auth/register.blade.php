@extends('layouts.admin.master')

@section('text')
<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
					@csrf
					<center>
						<img src="{{asset('admin/images/logo.png')}}">
					</center>
					<span class="login100-form-title p-b-34 p-t-15">
                        register
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Enter name">
						<input class="input100" type="text" name="name" placeholder="name">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf205;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter phone">
						<input class="input100" type="text" name="phone" placeholder="phone">
						<span class="focus-input100" data-placeholder="&#xf2be;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter address">
						<input class="input100" type="text" name="address" placeholder="address">
						<span class="focus-input100" data-placeholder="&#xf196;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter  email address">
						<input class="input100" type="email" name="email" placeholder="email">
						<span class="focus-input100" data-placeholder="&#xf15a;"></span>
					</div>
                    
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Enter Confirm Password">
						<input class="input100" type="password" name="password_confirmation" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
                    
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
                            Register
						</button>
					</div>

				</form>
@endsection