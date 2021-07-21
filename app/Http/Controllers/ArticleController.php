<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use App\Models\defaultbeverages_models;
use App\Models\User;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     $user = Auth::user();
        $id = $user->id;
        $name = $user->name;
        $user_id = $user->id;
        $drinks =defaultbeverages_models::orderBy('id','ASC')->where('user_id', $user_id)->limit(1)->get();
        
        return view('beverages_list',compact('drinks'));
 /*
        $user_id = auth()->user()->id;
        $user = defaultbeverages_models::find($user_id);
        return view('beverages_list',compact('drinks'));
        return view('beverages_list')->with('drinks', $user->drinks);
       */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('default_beverages_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $user_id = $user->id;
        $name = $user->name;
        $drinks = defaultbeverages_models::create($request->all()); //burda database e kayıt yapıyoruz. ama models de değişiklik yapmalıyız 
        $drinks->d_kullanici = $name;
        $drinks->user_id = $user_id;
       $drinks->save();
       return redirect()->route('drinks.index')->with('success','Default Siparişiniz Eklendi. !');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $drinks=defaultbeverages_models::findOrFail($id);
        
        return view('default_beverages_update',compact('drinks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $drinks=defaultbeverages_models::findOrFail($id);
        $drinks->d_option_1=$request->d_option_1;
        $drinks->d_option_2=$request->d_option_2;
        $drinks->d_option_3=$request->d_option_3;
        $drinks->d_option_4=$request->d_option_4;
        $drinks->d_note1=$request->d_note1;
        $drinks->d_note2=$request->d_note2;
        $drinks->d_note3=$request->d_note3;
        $drinks->d_note4=$request->d_note4;
        $drinks->save();

       return redirect()->route('drinks.index')->with('warning','Sipariş Başarıyla Güncellendi !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}