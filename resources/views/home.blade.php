@extends('layouts.app')

@section('content')
<h1>Treni in partenza oggi</h1>

    @foreach($trains as $train)
        <div>
            <p>{{ $train-> azienda }}</p>
            <p>{{ $train-> azienda }}</p>
            <p>{{ $train-> azienda }}</p>
            <p>{{ $train-> azienda }}</p>
            <p>{{ $train-> azienda }}</p>
            <p>{{ $train-> azienda }}</p>
            <p>{{ $train-> azienda }}</p>
            <p>{{ $train-> azienda }}</p>
            <p>{{ $train-> azienda }}</p>
            <p>{{ $train-> azienda }}</p>
        </div>

@endsection