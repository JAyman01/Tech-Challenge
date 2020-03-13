<?php
namespace App\Http\Controllers;

use App\challenge;
use App\User;
use Illuminate\Http\Request;
use Redirect;
use Response;

class ChallengeController extends Controller
{
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

        $challenges = challenge::orderBy('finishDate', 'asc')->paginate(10);
        error_log($challenges);
        //return view('challenge', compact(['challenges']));
        return view('challenge')->with('challenges', $challenges)->withTitle('challenge');
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

        error_log($request);

        $challenge = challenge::create([
            'title' => $request['title'],
            'id' => 1,
            'status' => $request['status'],
            'description' => $request['description'],
            'startDate' => $request['startDate'],
            'finishDate' => $request['finishDate'],

        ]);
        return redirect()->action('ChallengeController@ ');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function show(challenge $challenge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $where = array('id_challenge' => $id);
        $post = challenge::where($where)->first();

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
        $update = ['title' => $request->title, 'description' => $request->description, 'status' => $request->status, 'startDate' => $request->startDate, 'finishDate' => $request->finishDate];

        Challenge::where('id', $request->id)->update($update);

        return redirect()->action('ChallengeController@index');

    }
    public function updateChallenge(Request $request)
    {
        error_log("updaaaate");

        $update = ['title' => $request->title, 'description' => $request->description, 'status' => $request->status, 'startDate' => $request->startDate, 'finishDate' => $request->finishDate];
        Challenge::where('id_challenge', $request->id)->update($update);
        emotify('success', 'You are awesome, your data was successfully created');

        return redirect()->action('ChallengeController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Challenge::where('id_challenge', $id)->delete();
        emotify('success', 'You are awesome, your data was successfully created');

        return redirect()->action('ChallengeController@index');
    }

    public function closeChallenge($id)
    {
        error_log("closeeeee");
        $update = ['status' => "closed"];
        Challenge::where('id_challenge', $id)->update($update);
        notify()->success('You are awesome, your data was successfully created');

        return redirect()->action('ChallengeController@index');
    }

    public function changeStatus($id)
    {
        $user = User::find($id);
        $user->is_participant = 1;
        $user->save();

        return response()->json(['success' => 'Status change successfully.']);
    }

    public function changeToOrganizer($id)
    {
        $user = User::find($id);
        $email = $user->email;
        $name = $user->name;
        // User::where('id', $id)->delete();
        // error_log("errror");
        // $organizer = User::create([
        //     'name' => $email,
        //     'email' => $name,
        //     'password' => Hash::make(str_random(8)),
        // ]);

        return response()->json(['success' => 'Status change successfully.']);
    }
}
