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

        <h1>Edit Page</h1>

        <form action="{{ url('/update/' . $student->id) }}" method="POST">
            @method('put')
            <p class="text-center h4 mb-4">Edit Student</p>

            @csrf

            <!-- Name input -->
            <div class="form-outline mb-4">
                <input type="text" id="name" class="form-control" name="name" value="{{ $student->name }}" />
                <label class="form-label" for="name">နာမည်</label>
            </div>

            <!-- Phone input -->
            <div class="form-outline mb-4">
                <input type="text" id="phone" class="form-control" name="phone" value="{{ $student->phone }}" />
                <label class="form-label" for="phone">ဖုန်းနံပါတ်</label>
            </div>

            <!-- Address input -->
            <div class="form-outline mb-4">
                <input type="text" id="address" class="form-control" name="address" value="{{ $student->address }}" />
                <label class="form-label" for="address">နေရပ်လိပ်စာ</label>
            </div>
            
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="email" class="form-control" name="email" value="{{ $student->email }}" />
                <label class="form-label" for="email">E-mail</label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block">UPDATE DATA</button>
        </form>
    </div>

@endsection
