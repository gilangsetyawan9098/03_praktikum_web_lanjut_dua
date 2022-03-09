<?php

namespace App\Http\Controllers;
use App\Models\ListKomputer;
use Illuminate\Http\Request;

class ListKomputerController extends Controller
{
    //
    public function ListKomputer(){
        $data = ListKomputer::all();
        return view ('ListKomputer',['daftar'=>$data])
        ->with('title','List');
    }
}
