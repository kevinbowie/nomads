@extends('layouts.success')
@section('title', 'Success Checkout')

@section('content')
<main>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
            <img src="{{ url('frontend/images/ic_mail.png') }}" alt="Success Logo">
            <h1>Oops!</h1>
            <p>Your transaction is unfinished.</p>
            <a href="{{ url('/') }}" class="btn btn-homepage mt-3 px-5">Home Page</a>
        </div>
    </div>
</main>
@endsection