<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{

    private $user;

    /**
     * @param user $user
     */
    function __construct(User $user)
    {
        $this->user = $user;
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
//    public function show($id)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function edit($id)
//    {
//        //
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, $id)
//    {
//        //
//    }

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

    public function addnew(Request $request)
    {
        $username = $request->input('username');

        return redirect()->to('/users/'.$username.'/edit');
    }

    public function users()
    {
        $users = $this->user->get();

        return view ('users.users', compact('users'));
    }
    public function show($username)
    {
        $users = $this->user->whereUsername($username)->first();

        return view ('users.show', compact('users'));
    }

    public function edit($username)
    {
        $users = $this->user->whereUsername($username)->first();

        is_null($users) ? $users  = user::create(['username'=>$username]) : '';

        return view ('users.edit', compact('users'));

    }

    public function update($username, Request $request){
        $user = $this->user->whereUsername($username)->first();

        $user->fill($request->input())->save();

        return redirect ('users');
    }


    public function delete($username)
    {
        $user = $this->user->whereUsername($username)->first();

        $user->delete();

        return redirect()->to('/users');
    }

}
