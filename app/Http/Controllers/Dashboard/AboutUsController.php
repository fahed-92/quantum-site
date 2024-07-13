<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\aboutUs;
use Illuminate\Http\Request;

class AboutUsController extends BackEndController
{
    public function __construct(aboutUs $model)
    {
        parent::__construct($model);
    }


    public function update(Request $request, $id)
    {
        $aboutus = $this->model->findOrFail($id);
        if ($aboutus) {
            $aboutus->update([
                'title_aboutus'=> ['en' => $request->title_aboutus_en, 'ar' => $request->title_aboutus_ar],
                'title_our_mission'=> ['en' => $request->title_our_mission_en, 'ar' => $request->title_our_mission_ar],
                'title_admin_word'=> ['en' => $request->title_admin_word_en, 'ar' => $request->title_admin_word_ar],
                'desc_aboutus'=> ['en' => $request->desc_aboutus_en, 'ar' => $request->desc_aboutus_ar],
                'desc_our_mission'=> ['en' => $request->desc_our_mission_en, 'ar' => $request->desc_our_mission_ar],
                'desc_admin_word'=> ['en' => $request->desc_admin_word_en, 'ar' => $request->desc_admin_word_ar],
            ]);
            return back()->with('success', 'تم تحديث البيانات بنجاح');
        }
    }
}
