<?php

namespace App\Http\Controllers;

use Throwable;
use GuzzleHttp\Client;
use App\CompetitionCampaign;
use Illuminate\Http\Request;

class Competition extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        try {
            $client = new Client();
            $response = $client->request('GET', 'https://timercheck.io/YOURTIMERNAME/');
            $countdown = json_decode($response->getBody()->getContents())->seconds_remaining;
            // CarbonInterval::seconds($countdown)->cascade()->forHumans();
            return view('welcome')->with('countdown',$countdown);
        } catch (Throwable $e) {
            $countdown = false;
            return view('welcome')->with('countdown',$countdown);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('signup');
    }

    public function check()
    {
        return view('check');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $insert = new CompetitionCampaign();
        $insert->store($request);
        return redirect('/');
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
     * @param  int  $id
     * @return Response
     */
    public function update($id)
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
