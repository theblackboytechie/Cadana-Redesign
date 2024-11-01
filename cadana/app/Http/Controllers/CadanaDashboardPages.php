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

        $tabledb = "users";

        $params = CrudHelper::Geteverything($tabledb);

        return view('/publicpages/router', compact('owner', 'params'));
    }

    // clinics
    public function allclinics(Request $request)
    {
        $owner = "viewallclinics";

        $tabledb = "users";

        $where_array = [
            'accounttype' => "clinic",
        ];

        $params = CrudHelper::Get($tabledb, $where_array);

        return view('/publicpages/router', compact('owner', 'params'));
    }

    // allprofessionals
    public function allprofessionals(Request $request)
    {
        $owner = "viewallprofessionals";

        $tabledb = "users";

        $where_array = [
            'accounttype' => "professional",
        ];

        $params = CrudHelper::Get($tabledb, $where_array);

        return view('/publicpages/router', compact('owner', 'params'));
    }

    // alldonors
    public function alldonors(Request $request)
    {
        $owner = "viewalldonors";

        $tabledb = "users";

        $where_array = [
            'accounttype' => "donor",
        ];

        $params = CrudHelper::Get($tabledb, $where_array);

        return view('/publicpages/router', compact('owner', 'params'));
    }

    // accountsprofile
    public function accountsprofile(Request $request)
    {
        $owner = "view_accounts_profile";

        $tabledb = "users";

        $where_array = [
            'id' => "$request->x",
        ];

        $params = CrudHelper::Get($tabledb, $where_array);

        return view('/publicpages/router', compact('owner', 'params'));
        // return "rush!";
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
        
        // medical history
        $tabledb = "users_medical_history";

        $where_array = [
            'owner_id' => $request->x,
        ];

        $params = CrudHelper::Get($tabledb, $where_array);

        // donor history
        $tabledb = "male_donation_report";

        $where_array = [
            'owner_id' => $request->x,
        ];

        $params2 = CrudHelper::Get($tabledb, $where_array);

        return view('/publicpages/router', compact('owner', 'params', 'params2'));
    }

    // edit_medical_history
    public function edit_medical_history(Request $request)
    {
        $owner = "view_edit_medical_history";
        
        $tabledb = "users_medical_history";

        $where_array = [
            'id' => $request->postid,
            // 'owner_id' => $request->ownerid,
        ];

        $params = CrudHelper::Get($tabledb, $where_array);
        
        return view('/publicpages/router', compact('owner', 'params'));
    }

    // edit_donating_history
    public function edit_donating_history(Request $request)
    {
        $owner = "view_edit_donating_history";
        
        $tabledb = "male_donation_report";

        $where_array = [
            'id' => $request->postid,
            // 'owner_id' => $request->ownerid,
        ];

        $params = CrudHelper::Get($tabledb, $where_array);
        // return count($params);
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
