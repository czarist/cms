<?php

namespace App\Http\Controllers\Admin;

use App\Base\Controllers\AdminController;

class DashboardController extends AdminController
{

    public function getIndex()
    {
        return redirect(route('admin.user.index'));
    }
}
