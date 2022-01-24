<?php

namespace App\Http\Controllers;

use App\Models\Gabriel;
use Illuminate\Http\Request;

class GabrielController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gabriels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $gabriel = new Gabriel;




        $gabriel->name = $request->name;




        // Image Upload
        if($request->hasFile('image_certificados') && $request->file('image_certificados')->isValid()) {

            $requestImage_certificados = $request->image_certificados;


            $extension = $requestImage_certificados->extension();

            $image_certificadosName = md5($requestImage_certificados->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage_certificados->move(public_path('img/certificados'), $image_certificadosName);

            $gabriel->image_certificados = $image_certificadosName;


        }



        $gabriel->save();


        return redirect('/')->with('msg', 'Depoimento criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gabriel  $gabriel
     * @return \Illuminate\Http\Response
     */
    public function show(Gabriel $gabriel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gabriel  $gabriel
     * @return \Illuminate\Http\Response
     */
    public function edit(Gabriel $gabriel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gabriel  $gabriel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gabriel $gabriel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gabriel  $gabriel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gabriel $gabriel)
    {
        //
    }
}
