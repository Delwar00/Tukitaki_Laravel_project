<?php

namespace App\Http\Controllers;

use App\WhyBdHome;
use App\WhyBg;
use App\CaBookNow;
use App\ClientServiceRequest;

use Illuminate\Http\Request;

class WhyBdHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $service_info=Service::paginate(6);
      // return view('admin.whyBdHome.add');
      $why_bd_home=WhyBdHome::paginate(6);
      return view('admin.whyBdHome.view',compact('why_bd_home'));
    }
    public function whybgview(){
      $why_bg=WhyBg::paginate(6);
      return view('admin.whyBdHome.viewbg',compact('why_bg'));
    }
    public function callbookview(){

       //$why_bg=WhyBg::paginate(6);
       $callBook=CaBookNow::paginate(10);
       return view('admin.callbook.view',compact('callBook'));
    }
    public function frontserviceview(){

       $ClientSrView=ClientServiceRequest::paginate();
       return view('admin.frontAllservice.view',compact('ClientSrView'));
    }

    public function whyBdHomeadd()
    {
        return view('admin.whyBdHome.add');
    }
    public function whyBgHome()
    {
        return view('admin.whyBdHome.addbg');
    }
    public function callbook()
    {
        return view('admin.callbook.add');
    }

    public function whyBgAdd(Request $request)
    {
        $idfromdb=WhyBg::insertGetId([
        'why_heading'=>$request->why_heading,
      ]);
        if($request->hasFile('why_bg_image')){
            $path = $request->file('why_bg_image')->store('why_bg_image');
            WhyBg::where('id','=',$idfromdb)->update([
                'why_bg_image'=>$path,
            ]);
        }
      return view('admin.whyBdHome.addbg');
    }
    public function callbookadd(Request $request)
    {
      $idfromdb=CaBookNow::insertGetId([
        'cabook_heading'=>$request->cabook_heading,
        'cabook_details'=>$request->cabook_details,
        'cabook_button'=>$request->cabook_button,
        'cabook_button_url'=>$request->cabook_button_url,
        'cabook_get'=>$request->cabook_get,
        'cabook_call'=>$request->cabook_call,
        'cabook_book'=>$request->cabook_book,
      ]);
        if($request->hasFile('cabook_image')){
            $path = $request->file('cabook_image')->store('call_book_image');
            CaBookNow::where('id','=',$idfromdb)->update([
                'cabook_image'=>$path,
            ]);
        }
      return view('admin.callbook.add');
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

      WhyBdHome::insert([
      'service_header_name'=>$request->service_header_name,
      'service_details'=>$request->service_details,

    ]);
      return view('admin.whyBdHome.add');
    }
    public function adminwhydeactive($why_id){
      WhyBdHome::where('id','=',$why_id)->update([
         'service_status'=>2,
     ]);
     return back();
    }
    public function adminwhyactive($why_id){
      WhyBdHome::where('id','=',$why_id)->update([
         'service_status'=>1,
     ]);
     return back();
    }
    public function delete($why_id){
      WhyBdHome::where('id','=',$why_id)->delete();
      return back();
    }

    // public function adminwhybgdeactive($whybg_id){
    //   WhyBg::where('id','=',$whybg_id)->update([
    //      'service_status'=>2,
    //  ]);
    //  return back();
    // }
    public function adminwhybgactive($whybg_id){
      WhyBg::where('service_status','=',2)->update([
         'service_status'=>1,
     ]);
     WhyBg::where('id','=',$whybg_id)->update([
         'service_status'=>2,
     ]);
     return back();
    }
    public function callBookactive($call_book_id){
      CaBookNow::where('cabook_status','=',2)->update([
        'cabook_status'=>1,
      ]);
      CaBookNow::where('id','=',$call_book_id)->update([
        'cabook_status'=>2,
      ]);
      return back();
    }
    public function deletebg($whybg_id){
      WhyBg::where('id','=',$whybg_id)->delete();
      return back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\WhyBdHome  $whyBdHome
     * @return \Illuminate\Http\Response
     */
    public function show(WhyBdHome $whyBdHome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WhyBdHome  $whyBdHome
     * @return \Illuminate\Http\Response
     */
    public function edit(WhyBdHome $whyBdHome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WhyBdHome  $whyBdHome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WhyBdHome $whyBdHome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WhyBdHome  $whyBdHome
     * @return \Illuminate\Http\Response
     */
    public function destroy(WhyBdHome $whyBdHome)
    {
        //
    }
}
