@extends('layouts.app')

@section('content')

<main class="container">
    <h3>Log In.</span></h3>
    <p>
        Log In to your Comfily account to explore place to live in Asaba!
    </p>

    <form action="{{route('login')}}" method="POST">
        @csrf
        <div class="my-5 form">
            <div class="mb-3">
                <input name="email" class="form-control border-info @error('email') is-invalid
            @enderror" type="email" placeholder="Enter a valid email address">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    {{$message}}
                </span>
            @enderror
            </div>
            <div class="mb-3">
                <input name="password" class="form-control border-info @error('password') is-invalid
            @enderror" type="password" placeholder="Enter Password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    {{$message}}
                </span>
            @enderror
            </div>
            <button type="submit" class="btn">Log In</button>
        </div>
    </form>
</main>

@endsection
