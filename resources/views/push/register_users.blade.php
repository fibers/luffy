@extends('layout.layout')

@section('title', 'Users List')

@section('content')

    <div class="pull-right">
        {!! $users->render() !!}
    </div>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nick</th>
            <th>Avatar</th>
            <th>Created</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td class="col-md-1">{{ $user->id }}</td>
                <td class="">{{ $user->nick }}</td>
                <td class="col-md-1"><img src="{{ $user->avatar }}" class="img-responsive avatar-img" alt="Avatar"></td>
                <td class="col-md-1">{{ $user->created }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="pull-right">
        {!! $users->render() !!}
    </div>

@endsection