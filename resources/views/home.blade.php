@extends('layout')
@section('content')
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        </thead>

        <tbody>
        @foreach($users as $user)
            <tr>
                <th>{{ $user->id }}</th>
                <td>{{ $user->name }} </td>
                <td>{{ $user->email }} </td>
                <td>{{ $user->phone }} </td>
                <td><a href="{{ route('contact-data-one',$user->id) }}" class="btn btn-secondary" role="button">Редагувати</a></td>
                <td><a href="{{ route('contact-delete',$user->id) }}" class="btn btn-secondary" role="button">Видалити</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
 @endsection


