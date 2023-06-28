@extends('layouts.app')


@section('content')
    <div class="container py-3">
        <h1 class="mb-3">Aggiungi dettagli medici: </h1>

        <div>
            @include('partials.errors')
        </div>

        <form action="{{ route('admin.doctor.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="user_id" value="{{Auth::user()->id}}" class="d-none">
            <div class="mb-3">
                <label for="address" class="form-label">Indirizzo</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number"
                    value="{{ old('phone_number') }}">
            </div>

            <div class="mb-3">
                <label for="services" class="form-label">Prestazioni</label>
                <input type="text" class="form-control" id="services" name="services" value="{{ old('services') }}">
            </div>

            <div class="mb-3">
                <label for="cv" class="form-label">CV</label>
                <input type="file" class="form-control" id="cv" name="cv">
                <a target="_blank" id="file-cv-link" class="btn btn-primary mt-1 d-none" href="{{ asset('storage/' . $doctor->cv) }}">
                    Apri CV
                </a>
            </div>

            <label for="photo" class="form-label">Foto</label>
            <div id="photo-container" class="img-thumbnail mb-3">
                <input type="file" class="form-control" id="photo" name="photo">
                <div class="preview pt-3">
                    <img class="d-block" id="file-photo-preview"
                        @if ($doctor->photo) src="{{ asset('storage/' . $doctor->photo) }}" alt="{{ $doctor->photo }}" @endif>
                </div>
            </div>

            @foreach ($specialisations as $specialisation)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="specialisations" value="{{ $specialisation->id }}"
                        name="specialisations[]"
                        {{ in_array($specialisation->id, old('specialisations', [])) ? 'checked' : '' }}>
                    <label class="form-check-label" for="specialisations">{{ $specialisation->name }}</label>
                </div>
            @endforeach
            <div class="mb-3">
                <input type="submit" value="Aggiungi" class="btn ms-btn-primary">
            </div>
        </form>

    </div>
@endsection

