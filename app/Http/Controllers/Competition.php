<?php

namespace App\Http\Controllers;

use App\CompetitionCampaign;
use Illuminate\Http\Request;

class Competition extends Controller
{
    /**
     * Display competition page.
     */
    public function index()
    {
        $timercheck = new CompetitionCampaign();
        $countdown = $timercheck->index();
        $expiration = $timercheck->weekPassed();
        if ($countdown) {
            return view('welcome')->with('countdown', $countdown);
        } else if($expiration) {
            return view('welcome')->with('expiration', $expiration);
        } else {
            $timercheck->sendReport();
            return view('welcome');
        }
    }

    /**
     * Show the form for creating a new entry.
     */
    public function create()
    {
        $timercheck = new CompetitionCampaign();
        $callback = $timercheck->weekPassed();
        if ($callback) {
            return view('signup');
        } else {
            return "Stardrink competition is over. The page has been deleted.";
        }
    }

    /**
     * Show the form for creating a new entry with a reference id.
     */
    public function createWithId($id)
    {
        $timercheck = new CompetitionCampaign();
        $callback = $timercheck->weekPassed();
        if ($callback) {
            return view('signup')->with('id', $id);
        } else {
            return "Stardrink competition is over. The page has been deleted.";
        }
    }

    /**
     * Form check entry.
     */
    public function check()
    {
        return view('check');
    }

    /**
     * Store new entry and update reference if exists.
     */
    public function store(Request $request)
    {
        $insert = new CompetitionCampaign();
        $response = $insert->checkData($request);
        if ($response) {
            $ref = $request->input('ref');
            if (isset($ref)) {
                return redirect('signup/'.$ref)->withErrors(['Try Again: Email or phone is already registered!']);
            } else {
                return redirect('signup')->withErrors(['Try Again: Email or phone is already registered!']);
            }
        } else {
            $callback = $insert->store($request);
            return view('success')->with('myId', $callback);
        }
    }

    /**
     * Display my entry.
     */
    public function show(Request $request)
    {
        $insert = new CompetitionCampaign();
        $callback = $insert->show($request);
        return view('show')->with('data', $callback);
    }
}
