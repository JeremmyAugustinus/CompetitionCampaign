<?php

namespace App\Http\Controllers;

use App\CompetitionCampaign;
use Illuminate\Http\Request;

class Competition extends Controller
{
    /**
     * Display competition page.
     *
     * @return Response
     */
    public function index()
    {
        $timercheck = new CompetitionCampaign();
        $callback = $timercheck->index();
        return view('welcome')->with('countdown', $callback);
    }

    /**
     * Show the form for creating a new entry.
     *
     * @return Response
     */
    public function create()
    {
        return view('signup');
    }

    /**
     * Show the form for creating a new entry with a reference id.
     *
     * @return Response
     */
    public function createWithId($id)
    {
        return view('signup')->with('id', $id);
    }

    public function check()
    {
        return view('check');
    }

    /**
     * Store new entry and update reference if exists.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $insert = new CompetitionCampaign();
        $callback = $insert->store($request);
        // callback untuk kirim email
        return view('success')->with('myId', $callback);
    }

    /**
     * Display my entry.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Request $request)
    {
        $insert = new CompetitionCampaign();
        $callback = $insert->show($request);
        return view('show')->with('data', $callback);
    }
}
