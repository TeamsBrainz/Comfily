@extends('layouts.app')

@section('content')
    <main class="container">
        <h3>Sign Up.</h3>
        <p>
            Create your Comfily account to explore your dream place to live in Asaba!
        </p>

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="my-5 form">
                <input value="{{ old('name') }}" name="name"
                    class="form-control border-info @error('name') is-invalid
                @enderror" type="text"
                    placeholder="Enter your Name" id="name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
                <input value="{{ old('phoneNumber') }}" name="phoneNumber"
                    class="form-control mt-3 border-info @error('phoneNumber') is-invalid
                @enderror"
                    type="tel" placeholder="Enter Phone Number" id="phoneNumber">
                <input value="{{ old('email') }}" name="email" class="form-control mt-3 border-info @error('email') is-invalid
                @enderror" type="email"
                    placeholder="Enter a valid email address" id="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
                <input name="password"
                    class="form-control mt-3 border-info @error('password') is-invalid
                    @enderror"
                    type="password" placeholder="Enter Password" id="password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
                <input name="password_confirmation" class="form-control mt-3 border-info @error('password_confirmation') is-invalid
                @enderror" type="password"
                    placeholder="Confirm Password" id="pasword_confirmation">
                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
                <button type="submit" class="btn mt-3">Sign Up</button>
            </div>
        </form>
    </main>
@endsection
