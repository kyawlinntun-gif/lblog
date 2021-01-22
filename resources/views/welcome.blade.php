@extends('layouts.main')

@section('content')

    <div class="container">
        @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
        @endif

        <h1>Home Page</h1>

        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)    
                    <tr>
                        <th scope="row">{{ $student->id }}</th>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->email }}</td>
                        <td> <a href="{{ url('/edit/' . $student->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a> <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
