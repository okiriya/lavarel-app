
@extends('layouts.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="content">
                <h1>PizzaList</h1>
                @foreach($pizzas as $pizza)
                    <div>   
                        <a href="/pizza/{{ $pizza->id }}">{{ $pizza->name }}</a>
                    </div> 
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection