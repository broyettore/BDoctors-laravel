@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach ($users as $user)
                <tbody>
                    <tr>
                        <td>{{$user->first_name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->email}}</td>
                        
                        <td>
                            <a href="{{route('admin.user.show', $user->id)}}" class="btn btn-primary">Vai al Profilo</a>
                        </td>
                        
                    </tr>
                </tbody>
            @endforeach
        </table>


    </div>
@endsection
