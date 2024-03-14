@extends('layout.app')

@section('main')
<main>
    
        @foreach($movies as $item)
        <div class="card">
            <h2>Titolo :  {{$item['title']}} </h2>
            <h3>Titolo originale: {{$item['original_title']}} </h3>
            <h4>Nazionalità : {{$item['nationality']}} </h4>
            <h4>Anno : {{$item['date']}}</h4>
            <h4>Voto : {{$item['vote']}} </h4>
        </div>
        @endforeach
    
</main>
@endsection