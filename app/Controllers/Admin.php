<?php

namespace App\Controllers;
class Admin extends BaseController
{
    public function admingeneral()
    {
        return view('admin/admin.php');
    }
}
