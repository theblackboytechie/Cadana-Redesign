<?php

namespace App\Http\Controllers;
use App\Helpers\CrudHelper;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CadanaUpdateDatabaseController extends Controller
{
    //
    public function database_update(Request $request)
    {
        // return $request->account_type;
        $currenttime = Carbon::now();
        if($request->owner == "update_account_type"){
            $id = Auth::id();
            $tabledb = "users";

            $where_array = [
                'id' => $id
            ];

            $update_array = [
                'accounttype' => $request->account_type,
                'updated_at' => $currenttime,
            ];

            // this returns either 1 or zero
            return CrudHelper::Update($tabledb, $where_array, $update_array);
        }elseif($request->owner == "update_primary_details"){
            $authorid = Auth::id();

            $ownerid = $request->ownerid;
            $donor_name = $request->donor_name;
            $donor_gender = $request->donor_gender;
            $donor_primary_email = $request->donor_primary_email;
            $donor_secondary_email = $request->donor_secondary_email;
            $donor_primary_phone = $request->donor_primary_phone;
            $donor_secondary_phone = $request->donor_secondary_phone;
            $donor_primary_address = $request->donor_primary_address;
            $donor_primary_city = $request->donor_primary_city;
            $donor_primary_state = $request->donor_primary_state;
            $donor_primary_country = $request->donor_primary_country;
            $donor_primary_zipcode = $request->donor_primary_zipcode;
            $donor_secondary_address = $request->donor_secondary_address;
            $donor_secondary_city = $request->donor_secondary_city;
            $donor_secondary_state = $request->donor_secondary_state;
            $donor_secondary_country = $request->donor_secondary_country;
            $donor_secondary_zipcode = $request->donor_secondary_zipcode;

            
        }
    }
}
