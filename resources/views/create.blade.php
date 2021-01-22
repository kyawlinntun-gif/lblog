@extends('layouts.main')

@section('content')

    <div class="container my-4">

        @if ($errors->any())

            @foreach ($errors->all() as $error)
            
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>

            @endforeach
            
        @endif

        <h1>Create Page</h1>

        <form action="{{ url('/') }}" method="POST">
            <p class="text-center h4 mb-4">Add Student</p>

            @csrf

            <!-- Name input -->
            <div class="form-outline mb-4">
                <input type="text" id="name" class="form-control" name="name" />
                <label class="form-label" for="name">နာမည်</label>
            </div>

            <!-- Phone input -->
            <div class="form-outline mb-4">
                <input type="text" id="phone" class="form-control" name="phone" />
                <label class="form-label" for="phone">ဖုန်းနံပါတ်</label>
            </div>

            <!-- Address input -->
            <div class="form-outline mb-4">
                <input type="text" id="address" class="form-control" name="address" />
                <label class="form-label" for="address">နေရပ်လိပ်စာ</label>
            </div>
            
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="email" class="form-control" name="email" />
                <label class="form-label" for="email">E-mail</label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block">ADD DATA</button>
        </form>
    </div>

@endsection
