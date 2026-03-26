<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TestiominalRequest;
use App\Models\Testiominal;

class TestiominalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testiominals = Testiominal::all();
        return view('admin.testiominal.index',compact('testiominals'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testiominal.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestiominalRequest $request, Testiominal $testiominal)
    {
        $testiominalData = $request->all();

        if($request->hasFile('image_client')){

            $fileClient = $request->file('image_client');
            $fileNameClient = time();
            $fileClient->move('asset/img',$fileNameClient);
            $testiominalData['image_client'] = $fileNameClient;

        }


        Testiominal::create($testiominalData);

        return redirect()->route('admin.testiominal.index')->with('created','Post created successfully!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Testiominal $testiominal)
    {
        return view('admin.testiominal.show',compact('testiominal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testiominal $testiominal)
    {
        return view('admin.testiominal.edit',compact('testiominal'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TestiominalRequest $request, Testiominal $testiominal)
    {

        $testiominalData = $request->all();

        if($request->hasFile('image_client')){

            $fileClient = $request->file('image_client');
            $fileNameClient = time();
            $fileClient->move('asset/img',$fileNameClient);
            $testiominalData['image_client'] = $fileNameClient;

        }


        $testiominal->update($testiominalData);

        return redirect()->route('admin.testiominal.index')->with('updated','Post created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testiominal $testiominal)
    {
        
       $testiominal->delete();
       
       return back()->with('deleted','Post deleted successfully!');
    }
}
