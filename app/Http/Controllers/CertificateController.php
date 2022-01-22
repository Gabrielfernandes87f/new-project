<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificates = Certificate::all();

        return view('welcome',['certificates => $certificates']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('certificates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $certificate = new Certificate;


        $certificate->image_certificados = $request->title;
        $certificate->name = $request->name;


        // Image Upload
        if($request->hasFile('image_certificados') && $request->file('image_certificados')->isValid()) {

            $requestImage_certificados = $request->file('image_certificados');

            $extension = $requestImage_certificados->extension();

            $imageName = md5($requestImage_certificados->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/certificados'), $imageName);

            $certificate->image_certificados = $imageName;

        }



        $certificate->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function show(Certificate $certificate)
    {
        $certificate = Certificate::all();




        return view('certificados.show', ['certificates' => $certificate]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificate $certificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certificate $certificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificate $certificate)
    {
        //
    }
}
