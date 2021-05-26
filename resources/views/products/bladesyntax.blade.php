@extends('layouts.layout')

@section('content')

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">


    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>
        


        <!-- blade for loop   -->

        <!-- @for($i = 0; $i < count($pizzas); $i++)
            <p>{{ $pizzas[$i]['type'] }}</p>
        @endfor -->


        <!-- blade for loop   -->

        @foreach($pizzas as $pizza)
            <div>   
                {{$loop->index}} {{ $pizza["type"] }} - {{ $pizza["base"] }}
                @if($loop->first)
                    <span> - first in the loop</span>
                @endif

                @if($loop->last)
                    <span> - last in the loop</span>
                @endif
            </div>
            
        @endforeach
    </div>

    
</div>

@endsection

