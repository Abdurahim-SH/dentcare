<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceRequest;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.service.index',['services'=>Service::all()]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceRequest $request, Service $service)
    {


        $serviceData = $request->all();

        if($request->hasFile('after_image')){

            $file = $request->file('after_image');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $serviceData['after_image'] = $fileName;

        }

        if($request->hasFile('before_image')){

            $file = $request->file('before_image');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $serviceData['before_image'] = $fileName;

        }
        if($request->hasFile('cosmetic_image')){

            $file = $request->file('cosmetic_image');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $serviceData['cosmetic_image'] = $fileName;

        }
        if($request->hasFile('dental_image')){

            $file = $request->file('dental_image');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $serviceData['dental_image'] = $fileName;

        }
        if($request->hasFile('bridges_image')){

            $file = $request->file('bridges_image');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $serviceData['bridges_image'] = $fileName;

        }
        if($request->hasFile('teeth_image')){

            $file = $request->file('teeth_image');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $serviceData['teeth_image'] = $fileName;

        }

        Service::create($serviceData);

        return redirect()->route('admin.service.index')->with('created','Post created successfully!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('admin.service.show',compact('service'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceRequest $request, Service $service)
    {


        $serviceData = $request->all();


        if($request->hasFile('after_image')){

            $file = $request->file('after_image');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $serviceData['after_image'] = $fileName;

        }

        if($request->hasFile('before_image')){

            $file = $request->file('before_image');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $serviceData['before_image'] = $fileName;

        }
        if($request->hasFile('cosmetic_image')){

            $file = $request->file('cosmetic_image');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $serviceData['cosmetic_image'] = $fileName;

        }
        if($request->hasFile('dental_image')){

            $file = $request->file('dental_image');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $serviceData['dental_image'] = $fileName;

        }
        if($request->hasFile('bridges_image')){

            $file = $request->file('bridges_image');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $serviceData['bridges_image'] = $fileName;

        }
        if($request->hasFile('teeth_image')){

            $file = $request->file('teeth_image');
            $fileName = rand().'_'.$file->getClientOriginalName();
            $file->move('asset/img',$fileName);
            $serviceData['teeth_image'] = $fileName;

        }


        


        $service->update($serviceData);

        return redirect()->route('admin.service.index')->with('updated','Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
     
        $service->delete();

        return back()->with('deleted','Post deleted successfully!');
    }
}
