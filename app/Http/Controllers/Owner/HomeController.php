<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\DataTables\OwnersDataTable ;
use App\Owner;
use Datatables;
use Illuminate\Http\Request;
use Hash;
use Image;
use Response;
use URL;

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
    public function create()
    {
      $title='Add Owner';
      return view('owner.ownercreate',compact('title'));

    }
    public function store(Request $request)
    {

     $request->validate([
       'name' => 'required',
       'image' => 'required',
       'email' => 'required',
   ]);
   $filename = time().'.'.request()->image->getClientOriginalExtension();
request()->image->move(public_path('images'), $filename);


    $location = 'images/'. $filename;


$owner = new Owner();
$owner->name = $request->name;
$owner->password = Hash::make($request->password);
$owner->email = $request->email;
$owner->image= $location;
$owner->save();

return redirect()->route('owner.dashboard')->with('success','owner add successfully');
    }

public function show($id)
{
  $owner = Owner::findOrFail($id);
  $title='Show';
  return view('owner.owner_profile_',compact('owner','title'));
}
public function edit($id)
{
  $owner = Owner::findOrFail($id);
  $title='Edit';
  return view('owner.owneredit',compact('owner','title'));
}
public function update(Request $request,$id)
{
  $a= Owner::whereId($id)->pluck('image');

  $image_name=$request->image;
  $image=$request->file('image');
   $location = $a[0];
  if ($image != '') {
    $request->validate([
      'name' => 'required',
      'image' => 'required',
      'email' => 'required',
  ]);
  $filename = time().'.'.request()->image->getClientOriginalExtension();
  request()->image->move(public_path('images'), $filename);
   $location = 'images/'. $filename;
 }else {
   $request->validate([
     'name' => 'required',
     'email' => 'required',
 ]);
 }

$owner= array('name' => $request->name, 'email' => $request->email,'password' => Hash::make($request->password),'image'=> $location);



Owner::whereId($id)->update($owner);
return redirect()->route('owner.dashboard')->with('success','owner add successfully');
}
public function delete($id)
{
  $owner = Owner::findOrFail($id);
  $owner->delete();
  return redirect()->route('owner.dashboard')->with('success','owner add successfully');

}
}
