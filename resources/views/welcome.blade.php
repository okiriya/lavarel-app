
@extends('layouts.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="mssg">
                <p>{{ session('mssg') }}</p>
            </div>
            <div class="content">
                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <a href="/pizza/create">Order a pizza</a>        
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection





