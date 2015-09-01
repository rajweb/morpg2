<?php namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PlayerController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $players = User::all();

        return view('admin.players.index', ['players' => $players]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        return view('admin.players.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->isOnline  =   0;

        $user = new User;
      
        $user->name             = $request->name;
        $user->email            = $request->email;
        $user->password         = bcrypt($request->password);
        $user->type             = $request->type;
        $user->age              = $request->age;
        $user->gender           = $request->gender;
        $user->country          = $request->country;
        $user->state            = $request->state;
        $user->city             = $request->city;
        $user->term_condition   = $request->term_condition;
        $user->privacy_policy   = $request->privacy_policy;
        $user->isOnline         = $request->isOnline;
        $user->save();

        

        return view('admin.players.index', ['players' => User::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
