<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Brand;
use Excel;
use App\Exports\CategoryExport;
use Auth;
use Helper;


class ProductsController extends Controller
{

    public function index()
    {
        $data['page_title'] = 'Products';
        $data['categories'] = Helper::getCatalogy();
        $data['brands'] = Helper::getBrands();

        $rows = Products::where('delete_status','0')->get();
        return view('admin.templates.products.products',compact('data','rows'));
    }

    function store(Request $oRequest)
    {
 
        $slug = Helper::slugify($oRequest->title);
        $oRequest->offsetSet('slug', $slug );
        $oRequest->offsetSet('status', 'active' );

        $oRequest->offsetSet('created_at', Auth::guard('admin')->user()->id);

        if($oRequest->file('category_image') != ''){
            $img_path = public_path().config('constants.PRODUCTS');
            $file_name = Helper::UploadMedia($oRequest->category_image,$img_path);
            $oRequest->offsetSet('image',$file_name);
        }

        if($oRequest->file('image_second') != ''){
            $img_path = public_path().config('constants.PRODUCTS');
            $image_second = Helper::UploadMedia($oRequest->image_second,$img_path);
            $oRequest->offsetSet('image_second',$image_second);
        }
        if($oRequest->file('image_third') != ''){
            $img_path = public_path().config('constants.PRODUCTS');
            $image_third = Helper::UploadMedia($oRequest->image_third,$img_path);
            $oRequest->offsetSet('image',$image_third);
        }


        $checkExist = Products::where('slug',$slug)->where('delete_status','0')->first();
        if ($checkExist){
            return response()->json(array('status' => 2,'msg'=> 'This Products Already Added'));
        }else{


            $addResult = Products::create($oRequest->all());
            if($addResult){
                return response()->json(array('status' => 1,'msg'=>'Record successfully Inserted'));
            }else{
                    return response()->json(array('status' => 0,'msg'=>'Error'));
            }
        }
    }

    function list()
    {
        $rows = Products::with('get_category_name','get_user_name')->where('delete_status','0')->orderBy('id', 'DESC')->get();

        $html = view('admin.templates.products.records', compact('rows'))->render();


        return response()->json(array('html'=>$html,'status' => 1,'msg'=>'Successfully Inserted'));
    }
    public function get_row(Request $oRequest)
    {
        $row  = Products::where('id',$oRequest->id)->first();
        $img_path = config('constants.PRODUCTS');
        $image_url = '';
        if($row->image != ''){
            $row['image_url'] = $img_path.''.$row->image;
        }

        if($row->image_second != ''){
            $row['image_second'] = $img_path.''.$row->image_second;
        }
        if($row->image_third != ''){
            $row['image_third'] = $img_path.''.$row->image_third;
        }



        return response()->json(['data' => $row,'image_url'=>$image_url,'status' => '1']);
    }

    public function update_row(Request $oRequest)
    {
        $slug = Helper::slugify($oRequest->title);
        $addResult = Products::where('id',$oRequest->update_id)->update([
          'title'           => $oRequest->update_title,
          'category_id'     => $oRequest->update_category_id,
          'price'           => $oRequest->update_price,
          'bulk_price'      => $oRequest->update_bulk_price,
          'min_quantity'    => $oRequest->update_min_quantity,
          'b2b_Price'       => $oRequest->update_b2b_Price,
          'description'     => $oRequest->update_description,
          'status'          => $oRequest->update_status,
          'slug'            => $slug,
          'product_approval'=> $oRequest->product_approval,

        ]);

        if($oRequest->file('update_image') != ''){
            $img_path = public_path().config('constants.PRODUCTS');
            $file_name = Helper::UploadMedia($oRequest->update_image,$img_path);
            Products::where('id', $oRequest->update_id)->update([
                'image' => $file_name
            ]);
        }

        if($oRequest->file('update_image_second') != ''){
            $img_path = public_path().config('constants.PRODUCTS');
            $image_second = Helper::UploadMedia($oRequest->update_image_second,$img_path);
            Products::where('id', $oRequest->update_id)->update([
                'image_second' => $image_second
            ]);
        }
        if($oRequest->file('update_image_third') != ''){
            $img_path = public_path().config('constants.PRODUCTS');
            $image_third = Helper::UploadMedia($oRequest->update_image_third,$img_path);
            Products::where('id', $oRequest->update_id)->update([
                'image_third' => $image_third
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
        $Result = Products::where('id',$oRequest->update_id)->update([
          'delete_status'      => '1'
        ]);
        if($Result){
            return response()->json(array('status' => 1,'msg'=>'Record successfully updated'));
        } else {
            return response()->json(array('status' => 0,'msg'=>'Error'));
        }
     }








}



