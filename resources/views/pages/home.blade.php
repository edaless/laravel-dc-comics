@extends('layouts.main-layout')

@section('content')
<h1>People</h1>

<a href="{{ route('person.create') }}">CREATE NEW PERSON</a>
<ul>
    @foreach ($people as $person)
        <li>
            {{ $person -> firstName }}
            {{ $person -> lastName }}
            {{-- 
                {{ $person -> dateOfBirth }} <br>
                
                @if ($person -> heigth )
                {{ $person -> heigth }} cm
                @endif 
            --}}
            -----
            <a href="{{ route('person.delete', $person) }}">X</a>
        </li>
    @endforeach
</ul>

@endsection