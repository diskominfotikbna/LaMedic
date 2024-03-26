@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Edit Doctor</h2>
            <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" value="{{ $doctor->name }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Address:</label>
                    <input type="text" name="address" value="{{ $doctor->address }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Specialist:</label>
                    <input type="text" name="specialist" value="{{ $doctor->specialist }}" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
