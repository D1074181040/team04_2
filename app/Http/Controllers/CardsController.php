<?php

namespace App\Http\Controllers;

use App\Models\cards;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    //
    public function index()
    {
        $cards=cards::all();
      return view('cards.index',['cards'=>$cards]);
    }

    public function create()
    {
        $cards=cards::create([
            'n_ID'=>'1578',
            'p_time'=>'2020-11-15 00:08:00',
            'status'=>'成功',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
            ]);
        return view('cards.create',$cards->toArray());
    }
    public function edit($id)
    {
        $temp=cards::findOrFail($id);
        $card=$temp->toArray();
        return view('cards.edit')->with([
            'n_ID'=>$card['n_ID'],
            'p_time'=>$card['p_time'],
            'status'=>$card['status'],
        ]);
        /*
        $data=[];
        if ($id==5)
        {
            $data['cards_name']="123";
            $data['cards_time']="456";
            $data['cards_status']="789";
        }else
        {
            $data['cards_name']="123";
            $data['cards_time']="123";
            $data['cards_status']="123";
        }

        return view('cards.edit',$data);
        */
    }
    public function show($id)
    {
        $temp=cards::findOrFail($id);
        $cards=$temp->toArray();
        return view('cards.show',$cards);
/*
        if($id==5)
        {
            $cards_name="123";
            $cards_time="456";
            $cards_status="789";
        }else
        {
            $cards_name="123";
            $cards_time="213";
            $cards_status="2132";
        }
        return view('cards.show')->with (["name"=>$cards_name,"time"=>$cards_time,"status"=>$cards_status]);
       */
    }
}
