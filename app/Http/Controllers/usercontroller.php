<?php
// bhavik chudasama
// user controller
// 26-06-20 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\prouser;
use App\User;
use App\projects;
use Illuminate\Support\Facades\Auth;
class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                $data=User::where('role_id','=',2)->get();
                return view('userindex',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=User::findOrFail($id);
       $data1=User::findOrFail($id)->join('prouser','prouser.uid','=','users.id')
        ->join('projects','projects.id','=','prouser.pid')
        ->select('projects.name AS proname','projects.vendor','projects.desc','projects.created_at')
        ->get();
        $data2=projects::where('mid','=',Auth::user()->id)->get();
        return view('userdetails',compact('data','data1','data2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
