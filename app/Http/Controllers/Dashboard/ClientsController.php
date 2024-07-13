<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ClientsController extends BackEndController
{

    public function __construct(Client $model)
    {
        parent::__construct($model);

    }

    public function store(Request $request) {
        $module_name_plural = $this->getClassNameFromModel();
        $this->validate($request, [
            'title'=> 'required',
            'image'=> 'required',
        ]);

        $status = $this->model->create([
            'title'=>  $request->title,
            'image'=>$this->upload($request->image)
        ]);
//        if (asset($request->image) && $request->image!=null) {
//            $this->model->create([
//                'image1' => $this->upload($request['image1']),
//            ]);
//        }
        if($status){
            return redirect()->route('dashboard.' . $module_name_plural . '.index')->with('success', 'تم إضافة العنصر بنجاح');
        }
    }

    public function update(Request $request, $id)
    {
        $service = $this->model->findOrFail($id);
        if ($service) {
            $this->validate($request, [
                'title'=> 'required',
                'image'=> 'required',
            ]);
            $data = $request->except('id');
            $service->fill($data)->save();
            return back()->with('success', 'تم تحديث البيانات بنجاح');
        }
    }
    public function upload($image)
    {
        $folder = public_path('frontend/assets/img/folder' . '/');
        $filename = time() . '.' . $image->getClientOriginalName();
        if (!File::exists($folder)) {
            File::makeDirectory($folder, 0775, true, true);
        }
        $image->move($folder,$filename);
        return $filename;
    }

}
