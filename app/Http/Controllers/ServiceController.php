<?php

namespace App\Http\Controllers;

use App\Service;
use App\SubService;
use App\SubServicesArea;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service_info=Service::where('service_status','=',1)->paginate(7);
        return view('admin.services.view',compact('service_info'));

    }
    public function add()
    {
        return view('admin.services.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idfromdb=Service::insertGetId([
        'service_name'=>$request->service_name,
        'service_details'=>$request->service_details,
        'service_button'=>$request->service_button,
      ]);
        if($request->hasFile('service_image')){
            $path = $request->file('service_image')->store('service_photos');
            Service::where('id','=',$idfromdb)->update([
                'service_image'=>$path,
            ]);
        }
        //print_r($request->all());
      foreach ($request->sub_service as $sub_individual) {
        SubService::insert([
          'service_id'=>$idfromdb,
          'sub_service'=>$sub_individual,
          'added_by'=>Auth::id(),
          'created_at'=>Carbon::now(),
        ]);
      }
      foreach ($request->sub_ser_area as $sub_area_individual) {
        // echo $sub_individual;
        // echo "<br>";
        SubServicesArea::insert([
          'sub_service_id'=>$idfromdb,
          'sub_ser_area'=>$sub_area_individual,
          'created_at'=>Carbon::now(),
        ]);
      }

      //print_r($request->all());
       return view('admin.services.add');

    }
    public function adminservicedeactive($service_id)
   {
     Service::where('id','=',$service_id)->update([
         'service_status'=>2,
     ]);
     return back();
   }
    public function adminserviceactive($service_id)
   {
      Service::where('id','=',$service_id)->update([
         'service_status'=>1,
     ]);
      return back();
   }
    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
     public function serviceEdit($service_id){
       $old_info=Service::findOrFail($service_id);
       //$old_sub_info=SubService::findOrFail($service_id);
       //echo $old_info;
       return view('admin.services.edit',compact('old_info'));
     }
     public function serviceEditSubmit(Request $request){

       //print_r($request->all());
        $service_id= $request->service_id;
        $sub_service_id= $request->sub_service_id;
        //print_r($sub_service_id);


        $idfromdb=Service::where('id','=',$service_id)->update([
          'service_name'=>$request->service_name,
          'service_details'=>$request->service_details,
          'service_button'=>$request->service_button,
       ]);
       //echo $idfromdb;
      foreach ($request->sub_service as $sub_individual) {
        $id=SubService::where('service_id','=',$sub_service_i)->update([
          'sub_service'=>$sub_individual,
          'added_by'=>Auth::id(),
          'created_at'=>Carbon::now(),
        ]);
        //echo $id;
      }

     return back();
   }
    public function edit(Service $service)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {

    }

    public function delete($service_id)
    {
      Service::where('id','=',$service_id)->delete();
      return back();
    }


}
