@extends('layout.main')

@section('title')
  Info Details
@endsection

@section('content')

{{-- @dd($card); --}}
@dump($card);
<main>
    <div class="sec-blue d-flex j-cont-cent al-item-cent">
        <h2>Info Details</h2>
    </div>


    <div class="card d-flex j-cont-cent al-item-cent flex-dir-col">
        <img src="{{$card['thumb']}}" alt="">
        <div class="info-card">
            <h3>Titolo: {{$card['title']}}</h3>
            <h4>Prezzo: {{$card['price']}}</h4>
            <h4>Serie di appartenenza: {{$card['series']}}</h4>
            <h4>Uscita: {{$card['sale_date']}}</h4>
            <h4>Tipo: {{$card['type']}}</h4>
            <p>Descrizione: {{$card['description']}}</p>

        </div>
    </div>

</main>









@endsection
