@extends('layouts.app')


@section('content')

    <div class="container py-3">
            <h1 class="mb-3">Riempi i campi:</h1>

        <div>
            @include('partials.errors')
        </div>
        
        <form action="{{ route('admin.specialisation.update', $specialisation) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $specialisation->name) }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <p>
                    <textarea style="resize: none;" rows="5" class="form-control" id="description" name="description">{{ trim(old('description', $specialisation->description)) }}</textarea>
                </p>
            </div>
            <div class="mb-3">
                <input type="submit" value="Save" class="btn ms-btn-primary">
            </div>
        </form>
        
    </div>
@endsection