@extends('layouts.app')


@section('content')

    <div class="container py-3">
        <h1 class="mb-3">Fill the form:</h1>

        <div>
            @include('partials.errors')
        </div>

        <form action="{{ route('admin.doctor.update', $doctor->id) }}" method="post" enctype="multipart/form-data"
            class="edit-doctor-form">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address"
                    value="{{ old('address', $doctor->address) }}">
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number Number</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number"
                    value="{{ old('phone_number', $doctor->phone_number) }}">
            </div>

            <div class="mb-3">
                <label for="services" class="form-label">Services</label>
                <input type="text" class="form-control" id="services" name="services"
                    value="{{ old('services', $doctor->services) }}">
            </div>

            <div class="mb-3">
                <label for="cv" class="form-label">Cv</label>

                <div class="d-flex align-items-center">
                    <div>
                        <input type="text" class="d-none delete-cv-input" name="remove-cv">
                        <input type="file" class="form-control d-none new-cv-input" id="cv" name="cv"
                            value="{{ old('cv', $doctor->cv) }}">
                        <label for="cv" class="btn btn-warning select-cv-label">Select new CV</label>
                    </div>
                    @if ($doctor->cv)
                        <div class="ms-3">
                            <button type="button" id="delete-input" class="btn btn-danger delete-cv-btn">Delete current CV</button>
                        </div>
                        <label for="" class="text-success ms-2 delete-cv-success d-none">CV successfully
                            removed</label>
                    @endif
                </div>
                @if ($doctor->cv != null)
                   <a target="_blank" id="file-cv-link" class="btn btn-primary mt-1" href="{{ asset('storage/' . $doctor->cv) }}">
                    Open your CV
                </a> 
                @endif
                
            </div>

            <div class="mb-3">
                <label for="photo" class="form-label">Photo</label>

                <div class="d-flex">
                    <div>
                        <input type="text" class="d-none delete-photo-input" name="remove-photo">
                        <input type="file" class="form-control d-none new-photo-input" id="photo" name="photo">
                        <label for="photo" class="btn btn-warning select-photo-label">Select new photo</label>
                    </div>
                    @if ($doctor->photo)
                        <div class="ms-3">
                            <button type="button" class="btn btn-danger delete-photo-btn">Delete current Photo</button>
                        </div>
                        <label for="" class="text-success ms-2 delete-photo-success d-none">Photo successfully
                            removed</label>
                    @endif
                </div>

                    <div class="pt-3">
                        <img class="d-block preview" id="file-photo-preview"
                            @if ($doctor->photo) src="{{ asset('storage/' . $doctor->photo) }}" alt="{{ $doctor->photo }}" @endif>
                    </div>

            </div>

            @if ($errors->any())
                @foreach ($specialisations as $specialisation)
                    <div class="form-check form-check-inline mb-3">
                        <input class="form-check-input" type="checkbox" id="specialisations"
                            value="{{ $specialisation->id }}" name="specialisations[]"
                            {{ in_array($specialisation->id, old('specialisations', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for="specialisations">{{ $specialisation->name }}</label>
                    </div>
                @endforeach
            @else
                @foreach ($specialisations as $specialisation)
                    <div class="form-check form-check-inline mb-3">
                        <input class="form-check-input" type="checkbox" id="specialisations"
                            value="{{ $specialisation->id }}" name="specialisations[]"
                            {{ Auth::user()->doctor->specialisations->contains($specialisation->id) ? 'checked' : '' }}>
                        <label class="form-check-label" for="specialisations">{{ $specialisation->name }}</label>
                    </div>
                @endforeach
            @endif

            <div class="mb-3">
                <input type="submit" value="Save" class="btn ms-btn-primary">
            </div>
        </form>

    </div>
@endsection