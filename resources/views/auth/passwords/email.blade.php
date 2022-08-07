@extends('layouts.admin.master')

@section('text')
<form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
					@csrf
					<span class="login100-form-title">
					Reset Password
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100 form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email">
                        
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                             @enderror

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
                        Send Password Reset Link
						</button>
					</div>

					<div class="text-center p-t-40">
						<a class="txt2" href="../login">
                        <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
							login your Account
						</a>
					</div>
				</form>

@endsection