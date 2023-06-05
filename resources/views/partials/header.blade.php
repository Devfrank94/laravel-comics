@php
// salvo in variabile array che si trova in menus.php
  $head_menu = config('menus.header_menu');
@endphp

<div class="container">
    <header class="d-flex j-cont-bet al-item-cent">
      <div class="logo">
        <img src="{{ Vite::asset('public/dc-logo.png') }}" alt="DC Logo">
      </div>
      <nav>
        <ul class="d-flex">
        @foreach ($head_menu as $item)
            <li>
            <a
            href="{{route($item['href'])}}" {{Route::currentRouteName() === $item['href'] ? 'active' : ''}}>
                {{$item['text']}}
            </a>
            </li>
        @endforeach
        </ul>
      </nav>
    </header>
  </div>
