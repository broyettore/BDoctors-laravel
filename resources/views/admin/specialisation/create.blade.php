@extends('layouts.app')


@section('content')

    <div class="container py-3">
        <a href="{{ route('admin.specialisation.index') }}" class="btn ms-btn-primary mb-5">Home</a>

        <h1 class="mb-3">Fill the form:</h1>

        <div>
            @include('partials.errors')
        </div>

        <form action="{{ route('admin.specialisation.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" style="resize: none;" rows="5">{{ old('description') }}</textarea>
            </div>
            <div class="mb-3">
                <input type="submit" value="Save" class="btn ms-btn-primary">
            </div>
        </form>

    </div>
@endsection
