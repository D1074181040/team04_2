<?php

namespace App\Http\Controllers;

use App\Models\cards;
use App\Models\residents;
use Carbon\Carbon;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class ResidentsController extends Controller
{
    //
    public function create()
    {
        $residents=residents::create([
            'n_ID'=>'1897',
            'p_name'=>'Quicy david',
            'phone'=>'915784651',
            'gender'=>'男',
            'region'=>'C',
            'floor'=>'4',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        return view('residents.create',$residents->toArray());
    }

    public function show($id)
    {
        $temp=residents::findOrFail($id);
        $residents=$temp->toArray();
        return view('residents.show',$residents);

    }

    public function edit($id)
    {

        $temp=residents::findOrFail($id);
        $residents=$temp->toArray();
        return view('residents.edit')->with([
            'n_ID'=>$residents['n_ID'],
            'p_name'=>$residents['p_name'],
            'phone'=>$residents['phone'],
            'gender'=>$residents['gender'],
            'region'=>$residents['region'],
            'floor'=>$residents['floor'],

        ]);
    }
    public function index()
        {
            $residents=residents::all();
            return view('residents.index',['residents'=>$residents]);
        }
}

