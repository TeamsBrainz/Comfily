@extends('layouts.app')

@section('content')

<main class="container">
    <div>
        <h3>Report scams and fraud.</h3>
    <p>
        With so many kinds of scams, it's hard to figure out where to report each type. Gather emails, receipts, and phone numbers so you’re prepared to complete your report.
    </p>

    </div>
    <div>
        <h3>Tell us what happened</h3>
        <p>Report a scam, a company, or an agent and find out what to do to protect yourself. </p>
        <h3>Help stop fraud</h3>
        <p>We use and share reports with our law enforcement partners to help with investigations.</p>
    </div>

    <div><a href="https://www.npf.gov.ng/info/contacts_mgt.php" target="_blank">Get Started Now</a></div>
    <div class="report">
        <h4>Is your report about any of these common problems?</h4>
        <p>Choose the best fit. If you don't see your problem,<br>Choose “Something else.”</p>
    </div>

    <form action="" method="POST">
        <div class="my-3 form">
            <label class="form-lebel" for="impersonator">An impersonator</label>
        <input id="impersonator"  class="form-control mb-3 border-info"type="text">
        </div>
        <div class="my-3 form">
            <label class="form-lebel" for="predenders">Who were they pretending to be?</label>
        <input id="predenders" class="form-control mb-3 border-info" type="text">
        <button type="submit" class="btn">Submit</button>
    </div>

    </form>
</main>

@endsection
