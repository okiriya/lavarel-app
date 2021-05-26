@extends('layouts.layout')

@section('content')

<div class="container">
    <div class="content">
        
         <h1>create a new pizza</h1>
      
        <form action="/pizza" method="POST">
            @csrf
            <div class="fields">
                <label for="name">Your name</label>
                <input type="text" name="name" id="name" placeholder="Enter your name" value="{{ old('name')}}">
                @error('name')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="fields">
                <label for="type">Choose pizza type</label>
                <select name="type" id="type">
                    <option value="{{ old('type') }}" selected hidden>
                        @php
                            if(old('type')){
                                echo old('type');
                            } else {
                                echo 'select your pizza type';
                            }
                        @endphp
                    </option>
                    <option value="magarita">Magarita</option>
                    <option value="hawaiian">Hawaiian</option>
                    <option value="veg supreme">Veg supreme</option>
                    <option value="volcano">Volcano</option>
                </select>
            </div>

            <div class="fields">
                <label for="base">Choose base type</label>
                <select name="base" id="base">
                    <option value="{{ old('base') }}" selected hidden>
                        @php
                            if(old('base')){
                                echo old('base');
                            } else {
                                echo 'select your base type';
                            }
                        @endphp
                    </option>
                    <option value="cheesy crust">Cheesy crust</option>
                    <option value="garlic crust">Garlic crust</option>
                    <option value="thin $ crispy">Thin $ crispy</option>
                    <option value="thick">Thick</option>
                </select>
            </div>

            <div class="fields">
                <fieldset>
                    <label >Extra toppings</label>
                    <input type="checkbox" name="toppings[]" value="mushroons"> Mushroons <br>
                    <input type="checkbox" name="toppings[]" value="peppers"> peppers <br>
                    <input type="checkbox" name="toppings[]" value="garlic"> garlic <br>
                    <input type="checkbox" name="toppings[]" value="olives"> olives <br>
                </fieldset>
                @error('toppings')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
     
            <input type="submit" value="Order Pizza">
        </form>
    
    </div>


</div>

@endsection