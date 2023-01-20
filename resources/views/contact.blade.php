@extends('layouts.app')

@section('content')

<main class="container">
    <h3>Contact Us.</h3>
    <p>
        Please contact us for any question or request you may have, through this form. Your request will be
        processed by our staff and we will get back to you as soon as possible.
    </p>

    <form action="">
        <div class="my-5 form">
            <input class="form-control mb-3 border-info" type="text" placeholder="Enter your Name">
            <input class="form-control mb-3 border-info" type="text" placeholder="Enter a valid email address">
            <textarea class="form-control mb-3 border-info" name="" id="" placeholder="Enter your message"></textarea>
            <button type="submit" class="btn">Submit</button>
        </div>
    </form>
</main>

@endsection
