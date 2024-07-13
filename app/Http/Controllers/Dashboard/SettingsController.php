<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use App\Models\UserActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class SettingsController extends BackEndController
{
    public function __construct(Settings $model)
    {
        parent::__construct($model);
    }


    public function update(Request $request, $id)
    {
        $setting = $this->model->findOrFail($id);
        if ($setting) {
            $setting->update([
                'title'=> ['en' => $request->title_en, 'ar' => $request->title_ar],
                'description'=> ['en' => $request->description_en, 'ar' => $request->description_ar],
                'keywords'=> ['en' => $request->keywords_en, 'ar' => $request->keywords_ar],
                'sub_title'=> ['en' => $request->sub_title_en, 'ar' => $request->sub_title_ar],
                'title_header'=> ['en' => $request->title_header_en, 'ar' => $request->title_header_ar],
                'address_center'=> ['en' => $request->address_center_en, 'ar' => $request->address_center_ar],
                'time_work'=> ['en' => $request->time_work_en, 'ar' => $request->time_work_ar],
                'facebook_link'=>$request->facebook_link,
                'twitter_link'=>$request->twitter_link,
                'instagram_link'=>$request->instagram_link,
                'email_website'=>$request->email_website,
                'mobile_website'=>$request->mobile_website,
            ]);
            if (asset($request->image1) && $request->image1!=null) {
                $setting->update([
                    'image1' => $this->upload($request['image1']),
                ]);
            }
                if (asset($request->image2) && $request->image2!= null){
                $setting->update([
                    'image2' =>$this->upload( $request['image2'])
                ]);
            }
            return back()->with('success', 'تم تحديث البيانات بنجاح');
        }
    }

    public function upload($image)
    {
        $folder = public_path('frontend/assets/img/folder' . '/');
        $filename = time() . '.' . $image->getClientOriginalName();
//        $imageUrl[]='images/categories/' .  $filename;
        if (!File::exists($folder)) {
            File::makeDirectory($folder, 0775, true, true);
        }
        $image->move($folder,$filename);
        return $filename;
    }


}
