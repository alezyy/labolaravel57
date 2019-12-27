<?php

namespace App\Http\Controllers\Admin;

use Config;
use Auth;
use DB;
use App\Admin;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use DataTables;
use App\Role;
use App\Http\Requests\AdminFormRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class AdminController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin.index');
    }


}
