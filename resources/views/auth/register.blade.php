
@extends('layouts.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="content">
                <h1>Register</h1>
                <form action="{{ route('register')}}" method="post">
                    @csrf
                    <div class="field row align-items-center">
                        <div class="col-4">
                            <label for="name">name:</label>
                        </div>
                        <div class="col-8">
                            <input type="text" name="name" id="name" placeholder="Enter your name" value="{{ old('name')}}">
                            @error('name')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="field row align-items-center">
                        <div class="col-4">
                            <label for="Email">Email:</label>
                        </div>
                        <div class="col-8">
                            <input type="text" name="Email" id="Email" placeholder="Enter your Email" value="{{ old('Email')}}">
                            @error('Email')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
         
                    </div>
                    <div class="field row align-items-center">
                        <div class="col-4">
                            <label for="username">Username:</label>
                        </div>
                        <div class="col-8">
                            <input type="text" name="username" id="username" placeholder="Enter your username" value="{{ old('username')}}">
                            @error('username')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
           
                    </div>
                    <div class="field row align-items-center">
                        <div class="col-4">
                            <label for="password">Password:</label>
                        </div>
                        <div class="col-8">
                            <input type="password" name="password" id="password" placeholder="Choose your Password">
                            @error('password')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
                        
                    </div>
                    <div class="field row align-items-center">
                        <div class="col-4">
                            <label for="password_comfirmation">Confirm Password:</label>
                        </div>
                        <div class="col-8">
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Enter your password again">
                            <!-- @error('password_comfirmation')
                                <p>{{ $message }}</p>
                            @enderror -->
                        </div>
     
                    </div>
                    <button type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection