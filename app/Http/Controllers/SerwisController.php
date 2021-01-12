<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serwis;

class SerwisController extends Controller
{

    
    public function index(){
    
        $serwis_sys = Serwis::all();
        
        return view('serwis_sys.index', ['serwis_sys' => $serwis_sys]);
    }

    public function show($id){
        $serwis = Serwis::findOrFail($id);
        return view('serwis_sys.show', ['serwis' => $serwis]);
    }

    public function create(){
        return view('serwis_sys.create');
    }

    public function store(){

        $serwis = new Serwis();

        $serwis->nazwa = request('nazwa');
        $serwis->ulica = request('ulica');
        $serwis->kod_pocztowy = request('kod_pocztowy');
        $serwis->miasto = request('miasto');
        $serwis->telefon= request('telefon');
        $serwis->email = request('email');
        $serwis->nazwa_urządzenia = request('nazwa_urządzenia');
        $serwis->numer_fabryczny = request('numer_fabryczny');
        $serwis->opis = request('opis');

        $serwis->save();
        

        return redirect('/')->with('mssg', 'Dodano zgłoszenie serwisowe');
    }

    public function destroy($id){
        $serwis = Serwis::findOrFail($id);
        $serwis->delete();
        return redirect('/serwis_sys');
    }

    public function users(){
        return view('serwis_sys.users');
    }
    
}
