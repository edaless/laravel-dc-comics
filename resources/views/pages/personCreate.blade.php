@extends('layouts.main-layout')

@section('content')
    
    <h1>New person</h1>
    <form method="POST" action="{{ route('person.store') }}">
        @csrf
        <label for="firstName">First Name</label>
        <input type="text" name="firstName">
        <br>
        <label for="lastName">last Name</label>
        <input type="text" name="lastName">
        <br>
        <label for="dateOfBirth">date Of Birth</label>
        <input type="date" name="dateOfBirth">
        <br>
        <label for="heigth">heigth</label>
        <input type="number" name="heigth">
        <br>
        <input type="submit" value="CREATE NEW PERSON">
    </form>

@endsection