<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use User;

class OrganizerController extends Controller
{
    //

    public function __construct()
    {

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $organizers = AuthUser::orderBy('id', 'asc')->paginate(10);
        error_log($organizers);
        //return view('challenge', compact(['challenges']));
        return view('organizer')->with('organizers', $organizers)->withTitle('organizer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function show(AuthUser $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $where = array('id' => $id);
        $post = AuthUser::where($where)->first();

        return Response::json($post);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $update = ['name' => $request->name, 'email' => $request->email, 'role' => $request->role];

        AuthUser::where('id', $request->id)->update($update);

        return redirect()->action('OrganizerController@index');

    }
    public function updateUser(Request $request)
    {
        error_log("updaaaate");

        $update = ['name' => $request->name, 'email' => $request->email, 'role' => $request->role];

        AuthUser::where('id', $request->id)->update($update);
        emotify('success', 'You are awesome, your data was successfully created');

        return redirect()->action('OrganizerController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        AuthUser::where('id', $id)->delete();
        notify()->success(' your data was successfully Deleted');

        return redirect()->action('OrganizerController@index');
    }

    public function changeStatus($id)
    {
        $user = AuthUser::find($id);
        $user->role = 'participant';
        $user->save();

        return response()->json(['success' => 'Status change successfully.']);
    }

}
