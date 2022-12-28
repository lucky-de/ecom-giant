<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Products;
use App\Models\User;
use App\Models\HomePageBanners;

use Helper;
use Validator;


class HomeController extends Controller
{
    public function index() {
        $categories = Helper::getCatalogy();
        $banners = HomePageBanners::get();
        $products =  Products::whereStatus('active')->whereDeleteStatus('0')->get();
       
        return view('web.index',compact('categories','banners','products'));
    }

    public function product_details(Request $request) {
        $product_id = decrypt($request->query('product_id'));
        $product = Products::with('get_category_name')->find($product_id);

        return view('web.product-details',compact('product'));
    }

    public function viewCart() {
        $product_list = [];

        if (Cart::whereSessionId(session()->getId())->exists()) {
            $cart_detail = Cart::whereSessionId(session()->getId())->with('detail')->first();

            // Build cart data
            Collection::macro('includeProduct', function () {
                return $this->map(function ($value) {
                    return [
                        'product_id' => $value->product_id,
                        'quantity' => $value->quantity,
                        'total_price' => $value->total_price,
                        'product_detail' => $value->product
                    ];
                });
            });

            $product_list = $cart_detail->detail->includeProduct();
        }

        return view('web.view-cart',compact('product_list'));
    }

    public function getCartData(Request $request) {

        $cart = [];

        if (Cart::whereSessionId(session()->getId())->exists()) {
            $cart_detail = Cart::whereSessionId(session()->getId())->first();

            // Build cart data
            Collection::macro('includeProduct', function () {
                return $this->map(function ($value) {
                    return [
                        'type' => (!Auth::hasUser() || Auth::user()->type != "vendor") ? 'user' : Auth::user()->type,
                        'product_id' => $value->product_id,
                        'quantity' => $value->quantity,
                        'total_price' => $value->total_price,
                        'product_detail' => $value->product
                    ];
                });
            });

            $cart = $cart_detail->detail->includeProduct();
        }

        return response()->json([
            'status' => true,
            'data' => $cart
        ]);
    }

    public function postCart(Request $request) {

        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
            'qty' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid data. Please contact administrator.',
            ]);
        }

        $product = Products::find(decrypt($request->product_id));

        // Add into cart master
        $cart = Cart::firstOrCreate([
            'session_id' => session()->getId(),
            'user_id' => Auth::id()
        ]);

        $product_price = (!Auth::hasUser() || Auth::user()->type != "vendor") ? (($request->qty >= $product->min_quantity) ? $product->price : $product->bulk_price) : $product->b2b_Price;

        CartProduct::create([
            'cart_id' => $cart->id,
            'product_id' => $product->id,
            'quantity' => $request->qty,
            'total_price' => $product_price * $request->qty
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Successfully added to cart.',
        ]);
    }

    public function updateCart(Request $request) {

        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
            'qty' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid data. Please contact administrator.',
            ]);
        }

        // Add into cart master

        $cart = Cart::whereSessionId(session()->getId())->first();
        $cartDetail = CartProduct::whereCartId($cart->id)->whereProductId($request->product_id);
        $product_price = (!Auth::hasUser() || Auth::user()->type != "vendor") ?
            (($request->qty >= $cartDetail->first()->product->min_quantity) ? $cartDetail->first()->product->bulk_price : $cartDetail->first()->product->price) : $cartDetail->first()->product->b2b_Price;
        $cartDetail->update(['quantity' => $request->qty, 'total_price' => $request->qty * $product_price]);

        return response()->json([
            'status' => true,
            'data' => $cartDetail->first()
        ]);
    }

    public function deleteCart(Request $request) {

        $validator = Validator::make($request->all(), [
            'product_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid data. Please contact administrator.',
            ]);
        }

        // Add into cart master
        $cart = Cart::whereSessionId(session()->getId())->first();
        CartProduct::whereCartId($cart->id)->whereProductId($request->product_id)->delete();

        return response()->json([
            'status' => true,
            'message' => "Successfully delete product."
        ]);
    }

    function getCheckout(Request $request) {
        $cartDetail = Cart::whereSessionId(session()->getId())->first()->detail;

        return view('web.checkout',compact('cartDetail'));
    }

    function postCheckout(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'zip' => 'required',
            'phone' => 'required',
        ]);

         

        $cartDetail = Cart::whereSessionId(session()->getId())->first();

        $orderID = random_int(1000000000, 9999999999);

        Order::create([
            'id' => $orderID,
            'user_id' => (Auth::id()) ? Auth::id() : null,
            'email' => $request->email
        ]);

        foreach ($cartDetail->detail as $cart) {

            OrderProduct::create([
                'order_id' => $orderID,
                'product_id' => $cart->product->id,
                'quantity' => $cart->quantity,
                'total_price' => $cart->total_price
            ]);

        }

        $cartDetail->delete();

        return redirect('/order?id='.encrypt($orderID));
    }

    public function getOrder(Request $request) {
        $order = Order::find(decrypt($request->id));

        return view('web.order',compact('order'));
    }

    function login(Request $oRequest) {

        $validator = Validator::make($oRequest->all(), [
           'email' => 'required|email',
            'password' => 'required',
        ]);

        $inactive = User::where('email',$oRequest->email)->where('status','new')->first();
        if($inactive){
            return response()->json(array('status' => 2,'msg'=>'User not active by admin,please wait'));
        }

        if ($validator->passes()) {
            if (auth()->attempt(array('email' => $oRequest->input('email'),'password' => $oRequest->input('password')),true)){

                $user_type =  Auth::user()->type;
                $user_status =  Auth::user()->status;

                return response()->json(array('status' => 1,'msg'=>'Successfully login'));
            }
            return response()->json(array('status' => 2,'msg'=>'Sorry User not found'));

        }
    return response()->json(array('status' => 2,'msg'=>$validator->errors()->all()));
    //return response()->json(array('status' => 1,'msg'=>'Record successfully Inserted'));
    }

    function userstore(Request $oRequest)
    {

        $validator = Validator::make($oRequest->all(), [
           'reg_name' => 'required',
           'reg_email' => 'required',
           'reg_mobile' => 'required'
        ]);

        if ($validator->passes()) {


            $checkExist = User::where('email',$oRequest->user_email)->first();
            if ($checkExist){
                return response()->json(array('status' => 2,'msg'=> 'This user Already Added'));
            }else{
                 $addResult = User::create([
                            'name'      => $oRequest->reg_name,
                            'email'     => $oRequest->reg_email,
                            'mobile'    => $oRequest->reg_mobile,
                            'type'      => 'user',
                            'status'    => 'active',
                            'password' => Hash::make($oRequest->reg_passs),
                        ]);

                if($addResult){
                    return response()->json(array('status' => 1,'msg'=>'Record successfully Inserted'));
                }else{
                        return response()->json(array('status' => 0,'msg'=>'Error'));
                }
            }
        }
        return response()->json(array('status' => 2,'msg'=>$validator->errors()->all()));
    }


    function store(Request $oRequest)
    {

        $validator = Validator::make($oRequest->all(), [
           'first_name' => 'required',
           'user_email' => 'required',
           'password' => 'required'
        ]);

        if ($validator->passes()) {
            $checkExist = User::where('email',$oRequest->user_email)->first();
            if ($checkExist){
                return response()->json(array('status' => 2,'msg'=> 'This vendor Already Added'));
            }else{

                 $addResult = User::create([
                            'name' => $oRequest->first_name,
                            'email' => $oRequest->user_email,
                            'business_name' => $oRequest->business_name,
                            'mobile' => $oRequest->mobile,
                            'phone' => $oRequest->phone,
                            'city' => $oRequest->city,
                            'state' => $oRequest->state,
                            'zip_code' => $oRequest->zip_code,
                            'tin_number' => $oRequest->tin_number,
                            'about_business' => $oRequest->about_business,
                            'address' => $oRequest->address,
                            'password' => Hash::make($oRequest->password),
                        ]);

                   if($oRequest->file('business_license') != ''){
                        $img_path = public_path().config('constants.SYSTEM');
                        $business_license = Helper::UploadMedia($oRequest->business_license,$img_path);
                        User::where('id', $addResult->id)->update([
                            'business_license' => $business_license
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
