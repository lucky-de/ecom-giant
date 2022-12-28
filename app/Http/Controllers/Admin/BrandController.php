<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Excel;
use App\Exports\RoomTypesExport;
use Auth;
use Helper;


class BrandController extends Controller
{
  
    public function index()
    {
        $data['page_title'] = 'Brand';
        $rows = Brand::where('delete_status','0')->get();
        return view('admin.templates.brand.brand',compact('data','rows'));
    }

    function store(Request $oRequest)
    {
        $slug = Helper::slugify($oRequest->title);
        $oRequest->offsetSet('slug', $slug );
        $oRequest->offsetSet('created_at', Auth::guard('admin')->user()->id);

        $checkExist = Brand::where('slug',$slug)->where('delete_status','0')->first();
        if ($checkExist){
            return response()->json(array('status' => 2,'msg'=> 'This Room types Already Added'));
        }else{

            $addResult = Brand::create($oRequest->all());
            if($addResult){
                return response()->json(array('status' => 1,'msg'=>'Record successfully Inserted'));
            }else{ 
                    return response()->json(array('status' => 0,'msg'=>'Error'));
            }
        }
    }
    
    function list()
    {
        $rows = Brand::where('delete_status','0')->orderBy('id', 'DESC')->get();
        $html = view('admin.templates.roomtype.records', compact('rows'))->render();
        

        return response()->json(array('html'=>$html,'status' => 1,'msg'=>'Successfully Inserted'));
    }
    public function get_row(Request $oRequest)
    {
        $row  = Brand::where('id',$oRequest->id)->first();
        return response()->json(['data' => $row,'status' => '1']);
    }

    public function update_row(Request $oRequest)
    {
        $slug = Helper::slugify($oRequest->update_title);
        $addResult = Brand::where('id',$oRequest->update_id)->update([
          'title'     => $oRequest->update_title,
          'status'    => $oRequest->update_status,
          'slug'      => $slug
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
        $Result = Brand::where('id',$oRequest->update_id)->update([
          'delete_status'      => '1'
        ]);
        if($Result){
            return response()->json(array('status' => 1,'msg'=>'Record successfully updated'));
        } else { 
            return response()->json(array('status' => 0,'msg'=>'Error'));
        }
     }

    

    




}



