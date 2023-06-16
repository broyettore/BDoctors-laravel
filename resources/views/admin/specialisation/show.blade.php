@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-3 fs-1">{{ $specialisation->name }}</h1>
        <ul class="mb-3">
            <li>Name: {{ $specialisation->name }}</li>
            <li>Description: {{ $specialisation->description }}</li>
        </ul>

        <a href="{{ route('admin.specialisation.edit', $specialisation->id) }}" class="btn ms-btn-primary">Edit Pecialisation</a>
        <a href="#" class="btn btn-danger" data-bs-toggle="modal"
            data-bs-target="#project-{{ $specialisation->id }}">Delete</a>
        <a href="{{ route('admin.specialisation.index') }}" class="btn ms-btn-primary">Home</a>

    </div>
    <div class="modal fade" id="project-{{ $specialisation->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sei sicuro di voler cancellare
                        {{ $specialisation->name }}?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form action="{{ route('admin.specialisation.destroy', $specialisation) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
