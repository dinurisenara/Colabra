<!-- resources/views/admin/messages.blade.php -->

@extends('layouts.admin')

@section('content')
    <div class="container mt-5 mb-5 pb-5">
        <h2>Admin Messages</h2>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Timestamp</th>
            </tr>
            </thead>
            <tbody>
            @foreach($messages as $message)
                <tr>
                    <td>{{ $message->id }}</td>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->message }}</td>
                    <td>{{ $message->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
