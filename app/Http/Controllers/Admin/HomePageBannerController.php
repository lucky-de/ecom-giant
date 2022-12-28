<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePageBanners; 
use Helper;

class HomePageBannerController extends Controller
{
      public function index()
    {
                
        $rows = HomePageBanners::get();
        return view('admin.templates.homepagebanners.banner',compact('rows'));
    }

    function store(Request $oRequest)
    {
       

        if($oRequest->file('banner_image') != ''){
            $img_path = public_path().config('constants.BANNER');
            $file_name = Helper::UploadMedia($oRequest->banner_image,$img_path);
            $oRequest->offsetSet('image',$file_name);
        }

       $addResult = HomePageBanners::create($oRequest->all());

       return response()->json(array('status' => 1,'msg'=>'Record successfully Inserted'));

    }
    
    function list()
    {
        $rows = HomePageBanners::orderBy('id', 'DESC')->get();

        $html = view('admin.templates.homepagebanners.records', compact('rows'))->render();
        

        return response()->json(array('html'=>$html,'status' => 1,'msg'=>'Successfully Inserted'));
    }
    public function get_row(Request $oRequest)
    {
        $row  = HomePageBanners::where('id',$oRequest->id)->first();
        $img_path = config('constants.BANNER');
        $image_url = '';
        if($row->image != ''){
            $row['image_url'] = $img_path.''.$row->image;
        }
 


        return response()->json(['data' => $row,'image_url'=>$image_url,'status' => '1']);
    }

    public function update_row(Request $oRequest)
    {
         $addResult = HomePageBanners::where('id',$oRequest->update_id)->update([
          'title'           => $oRequest->subtitle,
          'subtitle'     => $oRequest->subtitle,
          'link'     => $oRequest->link,

        ]);

        if($oRequest->file('update_image') != ''){
            $img_path = public_path().config('constants.BANNER');
            $file_name = Helper::UploadMedia($oRequest->update_image,$img_path);
            HomePageBanners::where('id', $oRequest->update_id)->update([
                'image' => $file_name
            ]);
        }

        

        if($addResult){
            return response()->json(array('status' => 1,'msg'=>'Record successfully updated'));
        } else { 
            return response()->json(array('status' => 0,'msg'=>'Error'));
        }
     }

    public function export()
    {
        $file_name = 'products_'.rand().'.xlsx';
          return Excel::download(new CategoryExport,$file_name);
    }

    public function delete_row(Request $oRequest)
    {
        //
         $Result = HomePageBanners::where('id',$oRequest->update_id)->delete();
        if($Result){
            return response()->json(array('status' => 1,'msg'=>'Record successfully updated'));
        } else { 
            return response()->json(array('status' => 0,'msg'=>'Error'));
        }
     }

}
