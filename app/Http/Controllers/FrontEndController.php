<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\WhyBdHome;
use App\whyBg;
use App\SubService;
use App\CaBookNow;
use App\ContactMessage;
use App\SubServicesArea;
use App\ClientServiceRequest;
use Carbon\Carbon;
use Auth;
class FrontEndController extends Controller
{

  public function index()
  {

    $service_info=Service::where('service_status','=',1)->paginate(6);
    $why_bd_info=WhyBdHome::where('service_status','=',1)->paginate(6);
    $why_bg=WhyBg::where('service_status','=',2)->firstOrFail();
    $callBook=CaBookNow::where('cabook_status','=',2)->firstOrFail();
    $all_info=SubService::get();
    $all_area=SubServicesArea::get();
    return view('welcome',compact('service_info','why_bd_info','why_bg','callBook','all_info','all_area'));
  }

  public function cleaning(){
      $cleaning_info=SubService::where('service_id','=',1)->get();
      $cleaning_area=SubServicesArea::where('sub_service_id','=',1)->get();
      return view('include.cleaning',compact('cleaning_info','cleaning_area'));
  }
  public function babysitting(){
       $babysitting_info=SubService::where('service_id','=',2)->get();
       $babysitting_area=SubServicesArea::where('sub_service_id','=',2)->get();
      return view('include.babysitting',compact('babysitting_info','babysitting_area'));
  }
  public function cooking(){
       $cooking_info=SubService::where('service_id','=',3)->get();
       $cooking_area=SubServicesArea::where('sub_service_id','=',3)->get();
      return view('include.cooking',compact('cooking_info','cooking_area'));
  }
  public function plumbing(){
       $plumbing_info=SubService::where('service_id','=',4)->get();
       $plumbing_area=SubServicesArea::where('sub_service_id','=',4)->get();
      return view('include.plumbing',compact('plumbing_info','plumbing_area'));
  }
  public function electrician(){
       $electrician_info=SubService::where('service_id','=',5)->get();
       $electrician_area=SubServicesArea::where('sub_service_id','=',5)->get();
      return view('include.electrician',compact('electrician_info','electrician_area'));
  }
  public function works(){
      return view('include.works');
  }
  public function about(){
      return view('include.about');
  }
  public function contact(){
      return view('include.contact');
  }
public function searchAdd($id){
  $info=SubService::where('id','=',$id)->get();
  $info_area=SubServicesArea::where('id','=',$id)->get();
  return view('include.searchPopup',compact('id','info','info_area'));
}
  public function allserviceadd(Request $request)
  {
    ClientServiceRequest::insert([
      // 'sub_area_id'=>;
      'selected_service_area'=>$request->selected_service_area,
      'selected_sub_service'=>$request->selected_sub_service,
      'selected_service_street'=>$request->selected_service_street,
      'contact_num'=>$request->contact_num,
      'created_at'=>Carbon::now(),

    ]);
    return back();
  }
  public function contactinsert(Request $request)
  {
    ContactMessage::insert([
      'name'=>$request->name,
      'email'=>$request->email,
      'phone'=>$request->phone,
      'subject'=>$request->subject,
      'message'=>$request->message,
      'created_at'=>Carbon::now(),

    ]);
    return back();
  }
   public function allserviceread($mark_as_read_id)
  {
    ClientServiceRequest::where('id','=',$mark_as_read_id)->update([
           'selected_service_status'=>2,
       ]);
       return back();
  }
  public function search(Request $request)
 {
   $search_text=$request->search;
   $all=SubService::orderBy('id','desc')
   ->where('sub_service','like','%'.$search_text.'%')
   ->orwhere('service_id','like','%'.$search_text.'%')
   ->get();
   return view('search.view',compact('all'));
 }

//  public function search(Request $request)
// {
//   $all = $request->input('search');
//     $allcustomer=ClientServiceRequest::
//         when($all, function ($query) use ($all) {
//             return $query->where('selected_service_street', 'like', '%'.$all.'%')
//                           ->where('selected_service_status',1)
//                          ->orWhere('contact_num', 'like', '%' .$all. '%');
//
//         });
//
//         return view('search.view',compact('$searchTerm'));
// }

}
