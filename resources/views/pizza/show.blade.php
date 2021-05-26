

@extends('layouts.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-6">
            <div>
                <p> Order from {{ $pizza->name }}</p>
                <p> type - {{ $pizza->type }}</p>
                <p> base -{{ $pizza->base }}</p>
                <p> Extra Toppings</p>
                <ul>
                    @foreach($toppings as $topping)
                        <li>{{ $topping }}</li>
                    @endforeach
                </ul>
            </div>
            <form action="/pizza/{{ $pizza->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Complete order</button>
            </form>
        
            <a href="/pizza">Back To all Pizzas</a>
            
        </div>

    </div>

</div>

@endsection

