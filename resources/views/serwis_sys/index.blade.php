@extends('layouts.app')

@section('content')
<div class="index-serwis_sys">
  <h1>Lista urządzeń serwisowych</h1>
  @foreach($serwis_sys as $serwis)
    <div class="list">
      <h4><a href="{{ route('serwis_sys.show', ['id' => $serwis->id]) }}">{{ $serwis->numer_fabryczny }}   {{ $serwis->created_at }}</a></h4>


    </div>
  @endforeach

</div>

@endsection