<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServicesController extends BackEndController
{



    public function __construct(Service $model)
    {
        parent::__construct($model);

    }

    public function store(Request $request) {
        $module_name_plural = $this->getClassNameFromModel();
        $this->validate($request, [
            'title_en'=> 'required',
            'title_ar'=> 'required',
            'description_en'=> 'required',
            'description_ar'=> 'required',
//            'image'=> 'required',
        ]);

        $data = $request->all();
        $slug = my_slug($request->input('title_ar'));
        $slug_count = Service::where('slug', $slug)->count();
        if($slug_count>0){
            $slug .= time(). '-' . $slug;
        }
        $request->slug = $slug;
        $status = $this->model->create([
            'title'=> ['en' => $request->title_en, 'ar' => $request->title_ar],
            'description'=> ['en' => $request->description_en, 'ar' => $request->description_ar],
            'slug'=>$slug,
//            'image'=>$request->image
        ]);
        if($status){
            return redirect()->route('dashboard.' . $module_name_plural . '.index')->with('success', 'تم إضافة الخدمة بنجاح');
        }
    }

    public function update(Request $request, $id)
    {
//        return $request;
        $service = $this->model->findOrFail($id);
        if ($service) {
            $this->validate($request, [
                'title_en'=> 'required',
                'title_ar'=> 'required',
                'description_en'=> 'required',
                'description_ar'=> 'required',
//                'image'=> 'required',
            ]);
            $slug = my_slug($request->input('title_ar'));
            $slug_count = Service::where('slug', $slug)->count();
            if($slug_count>0){
                $slug .= time(). '-' . $slug;
            }
            $request->slug = $slug;
            $data = $request->except('id');
            $service->update([
                'title'=> ['en' => $request->title_en, 'ar' => $request->title_ar],
                'description'=> ['en' => $request->description_en, 'ar' => $request->description_ar],
                'slug'=>$slug,
//                'image'=>$request->image
            ]);
            return back()->with('success', 'تم تحديث البيانات بنجاح');
        }
    }

}
