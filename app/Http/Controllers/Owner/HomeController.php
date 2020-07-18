<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\DataTables\OwnersDataTable ;
use App\Owner;
use Datatables;


class HomeController extends Controller
{

    protected $redirectTo = '/owner/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('owner.auth:owner');
    }

    /**
     * Show the Owner dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(OwnersDataTable $dataTable) {
       return $dataTable->render('owner.ownertable',['title'=>'Owners','yield'=>'table1','viewname'=>'owner.ownertable']);
    //    return view('owner.myhome');
    }

    public function anyData()
    {
        return Datatables::of(Owner::query())->make(true);
    }


    public function dashboard() {

    return view('owner.ownerdashboard',['yield'=>'dashboard','viewname'=>'owner.ownerdashboard']);
    }

}
