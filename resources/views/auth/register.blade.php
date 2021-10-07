@extends('main.main')

@section('content')
    <div class="signup-form">
        <form action="{{url('register')}}" method="post">
            @csrf
            <h2>Register</h2>
            <hr>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
					<span class="input-group-text">
						<span class="fa fa-user"></span>
					</span>
                    </div>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                           placeholder="Name" >
                </div>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-paper-plane"></i>
					</span>
                    </div>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                           placeholder="Email Address"
                           >
                </div>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-child"></i>
					</span>
                    </div>
                    <input type="text" id="age" class="form-control @error('age') is-invalid @enderror" name="age"
                           placeholder="Age" >
                </div>
                @error('age')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-lock"></i>
					</span>
                    </div>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                           placeholder="Password"
                           >
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-lock"></i>
						<i class="fa fa-check"></i>
					</span>
                    </div>
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Confirm Password"
                           >
                </div>
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg">Register</button>
            </div>
        </form>
        <div class="text-center">Already have an account? <a href="{{url('/')}}">Login here</a></div>
    </div>
@endsection
