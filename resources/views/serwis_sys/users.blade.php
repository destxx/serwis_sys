@extends('layouts.app')
@section('content')
<div id="users">
<h1>Dane użytkownika</h1>
</div>
<div class="users">

<h5>Nazwa użytkownika</h5>
<p>{{ Auth::user()->name }}</p><br>

<h5>Adres email</h5>
<p>{{ Auth::user()->email }}</p><br>

<h5>Data utworzenia konta</h5>
<p>{{ Auth::user()->created_at }}</p>

</div>

@endsection