@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <h2>Doctors</h2>
        </div>
        <div class="col-md-2">
            <a class="btn btn-success" href="{{ route('doctors.create') }}">Add Doctor</a>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Address</th>
            <th>Specialist</th>
            <th>Action</th>
        </tr>
        @foreach ($doctors as $doctor)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->address }}</td>
                <td>{{ $doctor->specialist }}</td>
                <td>
                    <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('doctors.show', $doctor->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('doctors.edit', $doctor->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
