@extends('layout.main')

@section('title')
  Info Details
@endsection

@section('content')

{{-- @dd($card); --}}
<main>
    <div class="sec-blue d-flex j-cont-cent al-item-cent">
        <h2>Info Details</h2>
    </div>


    <div class="card al-item-cent">
        <img src="{{$card['thumb']}}" alt="">
        <span>{{$card['title']}}</span>
    </div>

</main>









@endsection
