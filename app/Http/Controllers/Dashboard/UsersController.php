<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends BackEndController
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function store(Request $request)
    {
        return $request->all();
    }


    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $user = $this->model->findOrFail($id);
    }

}
