@php
  $cards = config('comics');
@endphp

@extends('layout.main')

@section('title')
Home
@endsection

@section('content')

<div class="container d-flex j-cont-cent  ">

    <div id="currseries">current series</div>

        @foreach ($cards as $card)
        <div class="card al-item-cent">
            <a href="{{route('info-details', ['slug' => $card['slug']])}}">
            <img src="{{$card['thumb']}}" alt="">
            <span>{{$card['title']}}</span>
            </a>
        </div>
        @endforeach

    <span class="load-blue">load more</span>

  </div>


@endsection
