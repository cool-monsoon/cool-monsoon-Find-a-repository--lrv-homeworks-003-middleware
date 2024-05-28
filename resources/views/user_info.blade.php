@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Info') }}</div>
                <div class="card-body">
                    <h2>Информация о пользователе</h2>
                    <ul>
                        <li>Name: {{ $user->name }}</li>
                        <li>Email: {{ $user->email }}</li>
                        <li>ID: {{ $user->id }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection