<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PriceRequest;
use App\Models\Price;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.price.index',['prices'=>Price::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.price.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PriceRequest $request)
    {

        $priceData = $request->all();
 

 
        if($request->hasFile('image_teeth')){

            $file = $request->file('image_teeth');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $priceData['image_teeth'] = $fileName;

        }
        if($request->hasFile('image_dental')){

            $file = $request->file('image_dental');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $priceData['image_dental'] = $fileName;

        }
        if($request->hasFile('image_canal')){

            $file = $request->file('image_canal');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $priceData['image_canal'] = $fileName;

        }


        Price::create($priceData);

        return redirect()->route('admin.price.index')->with('created','Post created successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Price $price)
    {
        return view('admin.price.show',compact('price'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Price $price)
    {
        return view('admin.price.edit',compact('price'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PriceRequest $request, Price $price)
    {
        

        $priceData = $request->all();



        if($request->hasFile('image_teeth')){

            $file = $request->file('image_teeth');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $priceData['image_teeth'] = $fileName;

        }
        if($request->hasFile('image_dental')){

            $file = $request->file('image_dental');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $priceData['image_dental'] = $fileName;

        }
        if($request->hasFile('image_canal')){

            $file = $request->file('image_canal');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $priceData['image_canal'] = $fileName;

        }



   

        $price->update($priceData);

        return redirect()->route('admin.price.index')->with('updated','Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Price $price)
    {
        


        $price->delete();

        return back()->with('deleted'.'Post deleted successfully!');
    }
}
