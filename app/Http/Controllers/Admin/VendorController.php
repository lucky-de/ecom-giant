<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Excel;
use App\Exports\RoomTypesExport;
use Auth;
use Helper;


class VendorController extends Controller
{
  
    public function index()
    {
        $data['page_title'] = 'Vemdor';
        $rows = User::get();
        return view('admin.templates.vendors.vendors',compact('data','rows'));
    }

    function store(Request $oRequest)
    {
        $slug = Helper::slugify($oRequest->title);
        $oRequest->offsetSet('slug', $slug );
        $oRequest->offsetSet('created_at', Auth::guard('admin')->user()->id);

        $checkExist = User::where('slug',$slug)->first();
        if ($checkExist){
            return response()->json(array('status' => 2,'msg'=> 'This Room types Already Added'));
        }else{

            $addResult = User::create($oRequest->all());
            if($addResult){
                return response()->json(array('status' => 1,'msg'=>'Record successfully Inserted'));
            }else{ 
                    return response()->json(array('status' => 0,'msg'=>'Error'));
            }
        }
    }
    
    function list()
    {
        $rows = User::orderBy('id', 'DESC')->get();
        $html = view('admin.templates.vendors.records', compact('rows'))->render();
        

        return response()->json(array('html'=>$html,'status' => 1,'msg'=>'Successfully Inserted'));
    }
    public function get_row(Request $oRequest)
    {
        $row  = User::where('id',$oRequest->id)->first();
         $img_path = config('constants.SYSTEM');
        $image_url = '';
        if($row->business_license != ''){
            $row['image_url'] = $img_path.''.$row->business_license;
        }
        return response()->json(['data' => $row,'image_url'=>$image_url,'status' => '1']);
    }

    public function update_row(Request $oRequest)
    {
        $slug = Helper::slugify($oRequest->update_title);

        $addResult = User::where('id',$oRequest->update_id)->update([
                        'name' => $oRequest->update_name,
                        'business_name' => $oRequest->update_business_name,
                        'mobile' => $oRequest->update_mobile,
                        'phone' => $oRequest->update_phone,
                        'city' => $oRequest->update_city,
                        'state' => $oRequest->update_state,
                        'zip_code' => $oRequest->update_zip_code,
                        'tin_number' => $oRequest->update_tin_number,
                        'status' => $oRequest->update_status,
                        'business_product_approval' => $oRequest->business_product_approval,
                        
                    ]);

        if($addResult){
            return response()->json(array('status' => 1,'msg'=>'Record successfully updated'));
        } else { 
            return response()->json(array('status' => 0,'msg'=>'Error'));
        }
     }

    public function export()
    {
        $file_name = 'room_type_'.rand().'.xlsx';
        return Excel::download(new RoomTypesExport,$file_name);
    }

    public function delete_row(Request $oRequest)
    {
        //
        $Result = User::where('id',$oRequest->update_id)->update([
          'delete_status'      => '1'
        ]);
        if($Result){
            return response()->json(array('status' => 1,'msg'=>'Record successfully updated'));
        } else { 
            return response()->json(array('status' => 0,'msg'=>'Error'));
        }
     }

    

    




}



