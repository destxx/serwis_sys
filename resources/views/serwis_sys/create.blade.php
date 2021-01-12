@extends('layouts.app')
@section('content')

    <div class="create-serwis_sys">
        <h1>Utwórz nowe zgłoszenie serwisowe</h1>

        <form action="/serwis_sys" method="POST">
            @csrf
         
            <div class="form-group">

<h2>Zgłaszający</h2>
            <input type="text" id="nazwa" name="nazwa" placeholder="Imię Nazwisko/Nazwa Firmy" required>
            <input type="text" id="ulica" name="ulica" placeholder="Ulica" required>
            <input type="text" pattern="^\d{2}-\d{3}$" id="kod_pocztowy" name="kod_pocztowy" placeholder="Kod Pocztowy" required> 
            <input type="text" id="miasto" name="miasto" placeholder="Miasto" required>
            <input type="number" id="telefon" name="telefon" placeholder="Telefon" required>
            <input type="text" id="email" name="email"placeholder="Adres E-mail" required>

<br><br>

<h2>Informacje o urządzeniu</h2>

            <input type="text" id="nazwa_urządzenia" name="nazwa_urządzenia" placeholder="Nazwa Urządzenia" required>
            <input type="text" id="numer_fabryczny" name="numer_fabryczny" placeholder="Numer Fabryczny" required>
            <textarea rows="6" cols="41" id="opis" name="opis" placeholder="Opis" required></textarea>
<br><br>
            <input type="submit" class="btn btn-warning" value="ZATWIERDŹ" id='btn1' required>
            <input type="reset" class="btn btn-warning" value="RESET" id='btn2' required>
        
        
    </div>

@endsection