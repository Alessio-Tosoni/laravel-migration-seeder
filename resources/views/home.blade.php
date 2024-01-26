@extends('layouts.app')

@section('content')
<h1 class="text-center">Treni in partenza oggi</h1>

    @foreach($trains as $train)
        <div>
            <div>
                <p>{{ $train-> azienda }}</p>
                <p>{{ $train-> stazione_di_partenza}}</p>
                <p>{{ $train-> stazione_di_arrivo }}</p>
                <p>{{ $train-> orario_di_partenza }}</p>
                <p>{{ $train-> orario_di_arrivo }}</p>
            </div>

            <div>
                <p>{{ $train-> codice_treno}}</p>
                <p>{{ $train-> numero_carrozze }}</p>
                <p>{{ $train-> in_orario }}</p>
                <p>{{ $train-> cancellato }}</p>
                <p>{{ $train-> giorno_di_partenza}}</p>
            </div>
        </div>
    @endforeach
@endsection