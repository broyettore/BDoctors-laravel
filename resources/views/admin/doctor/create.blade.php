@extends('layouts.app')


@section('content')

    <div class="container py-3">
            <h1 class="mb-3">Fill the form:</h1>

        <div>
            @include('partials.errors')
        </div>
        
        <form action="{{ route('admin.doctor.store') }}" method="post" enctype="multipart/form-data">
        @csrf

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number') }}">
            </div>

            <div class="mb-3">
                <label for="services" class="form-label">Services</label>
                <input type="text" class="form-control" id="services" name="services" value="{{ old('services') }}">
            </div>

            <div class="mb-3">
                <label for="cv" class="form-label">Cv</label>
                <input type="file" class="form-control" id="cv" name="cv" value="{{ old('cv') }}">
            </div>

            <div class="mb-3">
                <label for="photo" class="form-label">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo" value="{{ old('photo') }}">
            </div>

            <div class="form-check form-check-inline p-0 mb-3">
                @foreach ($specialisations as $specialisation)
                    <input type="checkbox" class="btn-check" value="{{$specialisation->id}}" name="specialisations[]" {{in_array($specialisation->id, old('specialisations', [])) ? 'checked' : ''}} id="specialisations" autocomplete="off">
                    <label class="btn btn-outline-primary mb-2 me-2" for="specialisations">{{ $specialisation->name }}</label>             
                @endforeach
            </div>

            <div class="mb-3">
                <input type="submit" value="Submit" class="btn ms-btn-primary">
            </div>
        </form>
        
    </div>
@endsection