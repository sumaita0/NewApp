@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Our Services</h1>
        </div>
    </div>

    <div class="row mt-5">
        @include('partials.service')
    </div>
</div>
@endsection