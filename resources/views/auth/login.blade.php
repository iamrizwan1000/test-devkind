@extends('main.main')

@section('content')
    <div class="signup-form">
        @if (Session::has('message'))
            <div class="alert alert-warning" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif

        <form action="{{url('login')}}" method="post">
            @csrf
            <h2>Login</h2>
            <hr>

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
						<i class="fa fa-lock"></i>
					</span>
                    </div>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                           placeholder="Password"
                           >
                </div>
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg">Login</button>
            </div>
        </form>
        <div class="text-center">Do not have an account? <a href="{{url('register')}}">Register here</a></div>
    </div>
@endsection
