<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadanaDashboardPages extends Controller
{
    //
    public function dashboardindex(Request $request)
    {
        $owner = "viewdashboard";
        $params = [];

        return view('/publicpages/router', compact('owner', 'params'));
    }

    public function allusers(Request $request)
    {
        $owner = "viewallusers";
        $params = [];

        return view('/publicpages/router', compact('owner', 'params'));
    }

    public function clinicprofile(Request $request)
    {
        $owner = "viewclinicprofile";
        $params = [];

        return view('/publicpages/router', compact('owner', 'params'));
    }

    public function clinicsettings(Request $request)
    {
        $owner = "viewclinicsettings";
        $params = [];

        return view('/publicpages/router', compact('owner', 'params'));
    }

    public function donorprofile(Request $request)
    {
        $owner = "viewdonorprofile";
        $params = [];

        return view('/publicpages/router', compact('owner', 'params'));
    }

    public function donorsettings(Request $request)
    {
        $owner = "viewdonorsettings";
        $params = [];

        return view('/publicpages/router', compact('owner', 'params'));
    }

    // authenticatedsettings
    public function authenticatedsettings(Request $request)
    {
        $owner = "viewauthenticatedsettings";
        $params = [];

        return view('/publicpages/router', compact('owner', 'params'));
    }
}