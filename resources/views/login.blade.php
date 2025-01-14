@extends('layout.app')

@section('title', 'Kirjaudu')

@section('content')
    <form action="{{ url('login') }}" method="POST">
        <h1>Kirjaudu sisään</h1>

        <label for="email">Sähköposti</label>
        <input type="email" name="email" id="email" required>

        <br>

        <label for="password">Salasana</label>
        <input type="password" name="password" id="password" required>

        <br>

        @csrf

        <button type="submit">Kirjaudu</button>
    </form>
@endsection