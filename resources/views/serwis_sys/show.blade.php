@extends('layouts.app')
@section('content')

<h1>Zamówienie serwisowe: {{ $serwis->numer_fabryczny}} </h1><br><br>
    <div class="show">

        <h2>Zgłaszający</h2>
        <p class="nazwa"> Imie Nazwisko/Nazwa Firmy: 
        <div class="show2"> {{ $serwis->nazwa }} </div></p>

        <p class="ulica"> Ulica:
        <div class="show2"> {{ $serwis->ulica }}</div></p>

        <p class="kod_pocztowy"> Kod Pocztowy: 
        <div class="show2"> {{ $serwis->kod_pocztowy }}</div></p>

        <p class="miasto"> Miasto: 
        <div class="show2">{{ $serwis->miasto }}</div></p>

        <p class="telefon"> Telefon:
        <div class="show2">{{ $serwis->telefon }}</div> </p>

        <p class="email"> Adres E-mail:
        <div class="show2">{{ $serwis->email }}</div></p>

        <h2>Informacje o urządzeniu</h2>
        <p class="numer_fabryczny"> Nazwa Urządzenia:
        <div class="show2">{{ $serwis->nazwa_urządzenia }} </div></p>
        
        <p class="numer_fabryczny"> Numer Fabryczny:
            <div class="show2">{{ $serwis->numer_fabryczny }} </div></p>

        <p class="opis"> Opis:
        <div class="show2"> {{ $serwis->opis }} </div></p>
     


        </div>
        <form action="{{ route('serwis_sys.destroy', ['id' => $serwis->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-warning" value="WYKONANO" id='btn1'>
            <a href="{{ route('serwis_sys.index') }}" class="btn btn-warning" id='btn3'>POWRÓT DO LISTY</a>
     
        </form>

@endsection