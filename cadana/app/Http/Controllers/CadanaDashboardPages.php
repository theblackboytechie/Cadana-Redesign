<?php

namespace App\Http\Controllers;
use App\Helpers\CrudHelper;
use Illuminate\Http\Request;

class CadanaDashboardPages extends Controller
{
    // donor registration 
    // donor_registration
    public function donor_registration(Request $request)
    {
        $owner = "donor_registration";
        $params = [];

        return view('/publicpages/router', compact('owner', 'params'));
    }

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
        
        $tabledb = "users_medical_history";

        $where_array = [
            'owner_id' => $request->x,
            'records_type' => "main",
        ];

        $params = CrudHelper::Get($tabledb, $where_array);
        // return count($params);

        return view('/publicpages/router', compact('owner', 'params'));
    }

    // edit_medical_history
    public function edit_medical_history(Request $request)
    {
        $owner = "view_edit_medical_history";
        $params = [];
        
        $tabledb = "users_medical_history";

        $where_array = [
            'id' => $request->postid,
            'owner_id' => $request->ownerid,
        ];

        $params = CrudHelper::Get($tabledb, $where_array);

        return view('/publicpages/router', compact('owner', 'params'));
    }

    // authenticatedsettings
    public function authenticatedsettings(Request $request)
    {
        $owner = "viewauthenticatedsettings";
        $params = [];

        return view('/publicpages/router', compact('owner', 'params'));
    }

    // assignaccount
    public function assignaccount(Request $request)
    {
        return "omooo!";
        $owner = "viewauthenticatedsettings";
        $params = [];
        return "omooo!";

        return view('/publicpages/router', compact('owner', 'params'));
    }
}
