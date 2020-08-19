<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CompetitionCampaign extends Model
{
    public function store($request)
    {
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $phone = $request->input('phone');
        $email = $request->input('email');
        DB::insert('insert into competition_campaigns (first_name, last_name, phone, email, entry) values (?, ?, ?, ?, ?)', [$fname, $lname, $phone, $email, 1]);
    }
}
