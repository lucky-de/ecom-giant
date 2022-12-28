<?php
namespace App\Helpers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;



class Helper{


    public static function slugify($text)
    {
        $divider = '-';
      // replace non letter or digits by divider
      $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

      // transliterate
      $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

      // remove unwanted characters
      $text = preg_replace('~[^-\w]+~', '', $text);

      // trim
      $text = trim($text, $divider);

      // remove duplicate divider
      $text = preg_replace('~-+~', $divider, $text);

      // lowercase
      $text = strtolower($text);

      if (empty($text)) {
        return 'n-a';
      }

      return $text;
    }

    public static  function UploadMedia($file_name,$sDestinationPath)
    {
        $oUploadedImage     = $file_name;
        $sExtension         = $oUploadedImage->getClientOriginalExtension(); // getting image extension
        $sFileName          = 'IMG_'.rand().'.'.$sExtension; // renameing image
        $is_uploded         = $oUploadedImage->move($sDestinationPath, $sFileName); // uploading file to given path
        if($is_uploded)
        {
            return $sFileName;
        }else{
            return '';
        }
    }
    public static  function getCatalogy(){
        $Floors = Category::where('delete_status','0')->where('status','ACTIVE')->orderBy('title', 'ASC')->get();
        return $Floors;
    }

     public static  function getBrands(){
        $Floors = Brand::where('delete_status','0')->where('status','ACTIVE')->orderBy('title', 'ASC')->get();
        return $Floors;
    }


}
