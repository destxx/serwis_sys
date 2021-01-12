
@extends('layouts.app')
@section('content')

 

        <div class="content">
            
            <img src="/imgs/serwispng.png" alt="serwispng">

            <div class="welcome-serwis_sys">
                SERWIS_SYS
            </div>
            <a href="{{route('serwis_sys.create')}}" class="btn btn-warning" id='btn4'>UTWÓRZ NOWE ZGŁOSZENIE SERWISOWE</a>
            <p class="mssg"> {{ session('mssg') }} </p>


            
        </div>
            
    

        
@endsection