@extends('layouts.layout')

@section('content')

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">


    <div class="content">
        <img src="/img/avamakebelieve2.jpg" alt="" width="450px">
        <div class="title m-b-md">
            Pizza Lists
        </div>
        <!-- <p>{{ $type }} - {{ $base }} - {{ $price }} </p>

           
        
        @if($price > 15) 
            <p>This item is expensive</p>
        @elseif($price  < 5)
            <p>This item is cheap</p>
        @else 
            <p>This item is normally priced</p>
        @endif

        opposite of if 

        @unless($base == "cheesy crust")
            <p>you don't have a cheesy crust</p>
        @endunless

        output regular vanilla php   -->
        <!-- @php

            echo "hello world";
        @endphp -->
        <!-- @php
           print_r($_SERVER['HTTP_USER_AGENT']);
        @endphp -->
        
    </div>


</div>

@endsection

