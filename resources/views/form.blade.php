<x-main>

<x-slot name="title">
contact                                          
</x-slot>
    <body>
    

<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRceoweKtVIOWzRJ7N_sc0D-IDezshoXfhqMyTHTxdiFlR2l9Yy46jW5-a0sEDR2qHu8vk&usqp=CAU" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					@if($errors->any())
                            <div class="alert alert-danger">
                              <ul>
                             @foreach ($errors->all() as $error)
                              <li>{{$error}}</li>
                            @endforeach
                              </ul>
                </div>
                     @endif
					<form action="{{route('send')}}" method="POST">
						@method('POST')
						@csrf
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="email" id="email" name="email" class="form-control input_user" value="{{ old('title') }}" placeholder="email">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" id="password" name="password" class="form-control input_pass" value="" placeholder="password">
						</div>
	                        <div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="text" id="message" name="message" class="form-control input_pass" value="{{ old('title') }}" placeholder="come ti senti?">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="button" class="btn login_btn">Login</button>
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="#" class="ml-2">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
    </body>
</x-main>
