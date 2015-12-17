@extends('layout.layout')

@section('title', 'Users List')

@section('content')

    {!! $users->render() !!}

    <table class="table">
        <thead>
        <tr>ID</tr>
        <tr>Nick</tr>
        <tr>Avatar</tr>
        <tr>Created</tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nick }}</td>
                <td>{{ $user->avatar }}</td>
                <td>{{ $user->created }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {!! $users->render() !!}

@endsection