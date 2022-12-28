<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
 
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Helper;
use Validator;
use App\Models\Products;

class SellerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard() {
        $data['categories'] = Helper::getCatalogy();
        $data['brands'] = Helper::getBrands();
        $data['orders'] = Order::whereUserId(Auth::id())->get();
        $products =  Products::where('created_by',Auth::id())->whereDeleteStatus('0')->count();
        $products_pending =  Products::where('created_by',Auth::id())->whereStatus('pending')->whereDeleteStatus('0')->count();
         $products_active =  Products::where('created_by',Auth::id())->whereStatus('active')->whereDeleteStatus('0')->count();



//        dd($data['orders']);
        return view('dashboard',compact('data','products','products_active','products_pending'));
    }

     function vendorProduct_store(Request $oRequest)
    {

        $validator = Validator::make($oRequest->all(), [
           'title' => 'required',
           'price' => 'required',
        ]);

        if ($validator->passes()) {
            $slug = Helper::slugify($oRequest->title);
            $checkExist = Products::where('slug',$slug)->where('delete_status','0')->first();
            if ($checkExist){
                return response()->json(array('status' => 2,'msg'=> 'This Products Already Added'));
            }else{

                    $status = 'pending';
                    if(Auth::user()->business_product_approval == 1)
                    {
                      $status = 'active';
                    }

                    $addResult = Products::create([
                          'title'           => $oRequest->title,
                          'category_id'     => $oRequest->category_id,
                          'brand_id'        => $oRequest->brand_id,
                          'price'           => $oRequest->price,
                          'min_quantity'    => $oRequest->min_quantity,
                          'b2b_Price'       => $oRequest->b2b_Price,
                          'description'     => $oRequest->description,
                          'created_by'     => Auth::user()->id,
                          'status'          => $status,
                          'slug'            => $slug
                        ]);

                    if($oRequest->file('category_image') != ''){
                        $img_path = public_path().config('constants.PRODUCTS');
                        $file_name = Helper::UploadMedia($oRequest->category_image,$img_path);
                        Products::where('id', $addResult->id)->update([
                            'image' => $file_name
                        ]);
                    }

                    if($oRequest->file('image_second') != ''){
                        $img_path = public_path().config('constants.PRODUCTS');
                        $image_second = Helper::UploadMedia($oRequest->image_second,$img_path);
                        Products::where('id', $addResult->id)->update([
                            'image_second' => $image_second
                        ]);
                    }
                    if($oRequest->file('image_third') != ''){
                        $img_path = public_path().config('constants.PRODUCTS');
                        $image_third = Helper::UploadMedia($oRequest->image_third,$img_path);
                        Products::where('id', $addResult->id)->update([
                            'image_third' => $image_third
                        ]);
                    }

                if($addResult){
                    return response()->json(array('status' => 1,'msg'=>'Record successfully Inserted'));
                }else{
                        return response()->json(array('status' => 0,'msg'=>'Error'));
                }
            }
        }
        return response()->json(array('status' => 2,'msg'=>$validator->errors()->all()));
    }




}
