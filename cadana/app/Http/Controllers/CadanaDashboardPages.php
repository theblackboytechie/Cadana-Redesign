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

    // vettedcredentials
    public function vettedcredentials(Request $request)
    {
        $owner = "viewvettedcredentials";
        
        return $this->get_alldetails_for_settings($request->x, $owner);
    }

    public function donorsettings(Request $request)
    {
        $owner = "viewdonorsettings";

        return $this->get_alldetails_for_settings($request->x, $owner);
    }

    // updatepassword
    public function updatepassword(Request $request)
    {
        $owner = "viewupdatepassword";

        return $this->get_alldetails_for_settings($request->x, $owner);
    }

    // accountsverification
    public function accountsverification(Request $request)
    {
        $owner = "viewaccountsverification";

        return $this->get_alldetails_for_settings($request->x, $owner);
    }

    // medicalrecords
    public function medicalrecords(Request $request)
    {
        $owner = "viewmedicalrecords";

        return $this->get_alldetails_for_settings($request->x, $owner);
    }

    // donationrecords
    public function donationrecords(Request $request)
    {
        $owner = "viewdonationrecords";

        return $this->get_alldetails_for_settings($request->x, $owner);
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
        ];

        $params = CrudHelper::Get($tabledb, $where_array);
        $checkmale_donor = count($params);

        if($checkmale_donor > 0){
            $thegender = "male";

            return view('/publicpages/router', compact('owner', 'params', 'thegender'));
        }else{
            $tabledb = "female_donation_report";

            $where_array = [
                'id' => $request->postid,
            ];
    
            $params = CrudHelper::Get($tabledb, $where_array);

            $check_female_donor = count($params);

            if($check_female_donor > 0){
                $thegender = "female";

                return view('/publicpages/router', compact('owner', 'params', 'thegender'));
            }
        }
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

    private function get_alldetails_for_settings($x, $owner)
    {
        // medical history
        $tabledb = "users_medical_history";

        $where_array = [
            'owner_id' => $x,
        ];

        $params = CrudHelper::Get($tabledb, $where_array);

        // get the gender of the owneraccount
        $tabledb = "users_primary_details";

        $where_array = [
            'owner_id' => $x,
        ];

        $getgender = CrudHelper::Get($tabledb, $where_array);

        if(count($getgender) > 0){
            foreach($getgender as $getgender){
                if($getgender->gender == "male"){
                    // donor history
                    $tabledb = "male_donation_report";
                }elseif($getgender->gender == "female"){
                    // donor history
                    $tabledb = "female_donation_report";
                }

                // return $verify_status = $getgender->verfy_status;
                $tabledbb = "users";

                $where_array = [
                    'id' => $x,
                ];
        
                $get_verify_status = CrudHelper::Get($tabledbb, $where_array);

                foreach($get_verify_status as $get_verify){
                    $verify_status = $get_verify->verfy_status;
                }
                // 

                $thegender = $getgender->gender;

                $where_array = [
                    'owner_id' => $x,
                ];
        
                $params2 = CrudHelper::Get($tabledb, $where_array);
                
                return view('/publicpages/router', compact('owner', 'params', 'params2', 'thegender', 'verify_status'));
            }
        }else{
            // return "this is yo!";
            $params = [];
            $params2 = [];
            $thegender = "";
            $verify_status = "";
            
            return view('/publicpages/router', compact('owner', 'params', 'params2', 'thegender', 'verify_status'));
        }
    }
}
