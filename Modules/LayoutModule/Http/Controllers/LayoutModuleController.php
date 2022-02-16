<?php

namespace Modules\LayoutModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CategoryModule\Services\CategoryService;
use Modules\SettingModule\Services\SettingService;

class LayoutModuleController extends Controller
{



    public function __construct()
    {
    }
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function homePage()
    { 
        return redirect()->route('user.login');
        // view('layoutmodule::admin.home_template');
    }
}
