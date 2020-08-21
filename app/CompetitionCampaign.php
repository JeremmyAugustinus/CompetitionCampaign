<?php

namespace App;

use Throwable;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CompetitionCampaign extends Model
{
    public function index()
    {
        try {
            $client = new Client();
            $response = $client->request('GET', 'https://timercheck.io/CompetitionCampaign/');
            $countdown = json_decode($response->getBody()->getContents())->seconds_remaining;
            return $countdown;
        } catch (Throwable $e) {
            return false;
        }
    }

    public function weekPassed()
    {
        try {
            $client = new Client();
            $response = $client->request('GET', 'https://timercheck.io/OneWeek/');
            $countdown = json_decode($response->getBody()->getContents())->seconds_remaining;
            return $countdown;
        } catch (Throwable $e) {
            return false;
        }
    }

    public function sendReport()
    {
        $results = DB::select('select * from competition_campaigns order by entry desc limit 10');
        Mail::to('jeremmyaugustinus0@gmail.com')->send(new \App\Mail\ReportToClient($results));
    }

    public function checkData($request)
    {
        $phone = $request->input('phone');
        $email = $request->input('email');
        $results = DB::select('select phone from competition_campaigns where phone = ? or email = ?', [$phone, $email]);
        return $results;
    }
    
    public function store($request)
    {
        $ref = $request->input('ref');
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $phone = $request->input('phone');
        $email = $request->input('email');
        if (!$lname) { $lname = ""; }
        
        DB::insert('insert into competition_campaigns (first_name, last_name, phone, email, entry) values (?, ?, ?, ?, ?)', [$fname, $lname, $phone, $email, 1]);
        $id = DB::getPdo()->lastInsertId();
        if(isset($ref) && $id) {
            DB::update('update competition_campaigns set entry = entry + 1 where id = ?', [$ref]);
        }
        Mail::to($email)->send(new \App\Mail\MyMail($id));

        return $id;
    }
    public function show($request)
    {
        $input = $request->input('input');
        $results = DB::select('select entry from competition_campaigns where phone = ? or email = ?', [$input, $input]);
        return $results;
    }
}
