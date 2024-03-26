@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Doctor Details</h2>
            <div class="form-group">
                <strong>Name:</strong>
                {{ $doctor->name }}
            </div>
            <div class="form-group">
                <strong>Address:</strong>
                {{ $doctor->address }}
            </div>
            <div class="form-group">
                <strong>Specialist:</strong>
                {{ $doctor->specialist }}
            </div>
            <a class="btn btn-primary" href="{{ route('doctors.index') }}">Back</a>
        </div>
    </div>
@endsection
