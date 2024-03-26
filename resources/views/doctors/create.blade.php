@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h2>Add New Doctor</h2>
        <form action="{{ route('doctors.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Address:</label>
                <input type="text" name="address" class="form-control" value="{{ old('address') }}" required>
                @error('address')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Specialist:</label>
                <input type="text" name="specialist" class="form-control" value="{{ old('specialist') }}" required>
                @error('specialist')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection