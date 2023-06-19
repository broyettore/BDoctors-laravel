@extends('layouts.app')


@section('content')

    <div class="container py-3">
            <h1 class="mb-3">Fill the form:</h1>

        <div>
            @include('partials.errors')
        </div>
        
        <form action="{{ route('admin.doctor.update', $doctor->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $doctor->address) }}">
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number Number</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number', $doctor->phone_number) }}">
            </div>

            <div class="mb-3">
                <label for="services" class="form-label">Services</label>
                <input type="text" class="form-control" id="services" name="services" value="{{ old('services', $doctor->services) }}">
            </div>

            <div class="mb-3">
                <label for="cv" class="form-label">Cv</label>
                <input type="file" class="form-control" id="cv" name="cv" value="{{ old('cv', $doctor->cv) }}">
            </div>

            <div class="mb-3">
                <label for="photo" class="form-label">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo" value="{{ old('photo', $doctor->photo) }}">
            </div>

   
            @foreach ($specialisations as $specialisation)
                <div class="form-check form-check-inline mb-3">
                    <input class="form-check-input" type="checkbox" id="specialisations" value="{{ $specialisation->id }}"
                        name="specialisations[]"
                        {{ in_array($specialisation->id, old('specialisations', [])) ? 'checked' : '' }}>
                    <label class="form-check-label" for="specialisations">{{ $specialisation->name }}</label>
                </div>
            @endforeach

            <div class="mb-3">
                <input type="submit" value="Save" class="btn ms-btn-primary">
            </div>
        </form>
        
    </div>
@endsection