<?php
namespace App\Http\Traits;

use Intervention\Image\Facades\Image;

trait ImageStoreTrait {

    public static function storeImage($request,$photo,$img_path,$width,$height)
    {
        $img_uniqed=hexdec(uniqid()).'.'.$request->getClientOriginalExtension();
        $last_image_name=$img_path.$img_uniqed;
        Image::make($photo)->resize($width,$height)->save($last_image_name);
        return $last_image_name;
    }
    public static function storeMultiImage($photo,$img_path,$width,$height)
    {
        $images_array=[];
        foreach($photo as$key=> $single_photo){
            $img_uniqed=hexdec(uniqid()).'.'.$single_photo->getClientOriginalExtension();
            $last_image_name=$img_path.$img_uniqed;
            Image::make($single_photo)->resize($width,$height)->save($last_image_name);
            $images_array[]=$last_image_name;
        }
        $img=implode(',',$images_array);
        return $img;
    }
}
