<?php

namespace Bitfumes\Multiauth\Http\Controllers;


//use Bitfumes\Multiauth\DataTables;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\DataTables\adminDataTable2 ;


class AdminController extends Controller
{
    use AuthorizesRequests;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->adminModel = config('multiauth.models.admin');
    }

    public function index(Request $request)
    {
     // dd($dataTable);

 //return $dataTable->render('multiauth::admin.indexLTE',['title'=>'Admin Control']);
        // return view('multiauth::admin.indexLTE');
      return "hi";
    }

    public function show()
    {
        $admins = Admin::where('id', '!=', auth()->id())->get();

        return view('multiauth::admin.show', compact('admins'));
    }

    public function showChangePasswordForm()
    {
        return view('multiauth::admin.passwords.change');
    }

    public function changePassword(Request $request)
    {
        $data = $request->validate([
            'oldPassword'   => 'required',
            'password'      => 'required|confirmed',
        ]);
        auth()->user()->update(['password' => bcrypt($data['password'])]);

        return redirect(route('admin.home'))->with('message', 'Your password is changed successfully');
    }


    public function adminDashboard()
    {
      $anycontant='contents';
    //  return view('multiauth::admin.indexLTE');
return view('multiauth::admin.indexLTE', compact('anycontant'));
//        return render('multiauth::admin.indexLTE',['anycontant'=>'contents']);
    }
}
