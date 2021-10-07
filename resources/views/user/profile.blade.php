@extends('main.main')

@section('content')
    @include('partials.header')
    <div class="signup-form">
        @if (Session::has('message'))
            <div class="alert alert-warning" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif
        <form action="{{url('update/profile')}}" method="post">
            @csrf
            <h2>Profile</h2>
            <hr>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
					<span class="input-group-text">
						<span class="fa fa-user"></span>
					</span>
                    </div>
                    <input type="text" value="{{$user->name}}" class="form-control @error('name') is-invalid @enderror" name="name"
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
                    <input type="email" value="{{$user->email}}" class="form-control" name="email"
                           placeholder="Email Address"
                           disabled >
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-child"></i>
					</span>
                    </div>
                    <input type="text" value="{{$user->age}}" id="age" class="form-control @error('age') is-invalid @enderror" name="age"
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
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg">Update</button>
            </div>
        </form>
    </div>
@endsection
