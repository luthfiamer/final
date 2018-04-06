<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\UserDetails;
use App\User;
use DB,Session;
use App\Http\Controllers\Controller;
use App\Http\Request\UserDetailsRequest;

class UserDetailsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:user,admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userdetails = Userdetails::where('user_id', Auth::user()->id)->first();
        // dd($userdetails);
        if (empty($userdetails)) {
            return view('userdetails.index')->with('userdetails', $userdetails);
        } else {
            return view('userdetails.index')->with('userdetails', $userdetails);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userdetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userdetails = new UserDetails;
        $userdetails->full_name = $request->full_name;
        $userdetails->gender = $request->gender;
        $userdetails->religion = $request->religion;
        $userdetails->address = $request->address;
        $userdetails->city = $request->city;
        $userdetails->province = $request->province;
        $userdetails->expertise = $request->expertise;
        $userdetails->experience = $request->experience;
        $userdetails->user_id = Auth::user()->id;
        // dd(Auth::user()->id);
        $userdetails->save();
        return view("uploadfile.upload")->with('userdetails', $userdetails);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        // $userdetails = UserDetails::where('user_id', Auth::id())->first();
        $user = User::where('id', Auth::user()->id)->first();
        $userdetails = Userdetails::where('user_id', Auth::user()->id)->first();
        if (empty($userdetails)) {
            return view('userdetails.create')->with('userdetails', $userdetails)->with('users', $user);
        } else {
            return view('userdetails.show')->with('userdetails', $userdetails)->with('users', $user);
        }
        // return view('userdetails.show')->with('userdetails', $userdetails);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userdetails = Userdetails::where('user_id', Auth::user()->id)->first();
        return view('userdetails.edit')->with('userdetails', $userdetails);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Userdetails::find($id)->update($request->all());
        $userdetails = Userdetails::where('user_id', Auth::user()->id)->first();
       Session::flash("update", "User Details Updated");
       return view('userdetails.show')->with('userdetails', $userdetails);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Userdetails::destroy($id);
        Session::flash("delete","User details success deleted");
        return redirect()->route("userdetails.index")->with("shared.error-success");
    }
}
