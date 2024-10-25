<?php

namespace App\Http\Controllers;
use App\Helpers\CrudHelper;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class CadanaUpdateDatabaseController extends Controller
{
    //
    public function database_update(Request $request)
    {
        // return $request->account_type;
        $currenttime = Carbon::now();
        if($request->owner == "download_latest_user_details"){
            $tabledb = "users_primary_details";

            $where_array = [
                'owner_id' => $request->ownerid,
            ];
    
            $output = CrudHelper::Get($tabledb, $where_array);
            
            $primary_info_array = [];
            foreach($output as $output){
                // return ;
                array_push($primary_info_array, $output->id);
                array_push($primary_info_array, $output->name);
                array_push($primary_info_array, $output->gender);
                array_push($primary_info_array, $output->bio);
                array_push($primary_info_array, $output->primary_email);
                array_push($primary_info_array, $output->secondary_email);
                array_push($primary_info_array, $output->primary_phone);
                array_push($primary_info_array, $output->secondary_phone);
                array_push($primary_info_array, $output->primary_country);
                array_push($primary_info_array, $output->primary_state);
                array_push($primary_info_array, $output->primary_city);
                array_push($primary_info_array, $output->primary_address);
                array_push($primary_info_array, $output->primary_zipcode);
                array_push($primary_info_array, $output->secondary_country);
                array_push($primary_info_array, $output->secondary_state);
                array_push($primary_info_array, $output->secondary_city);
                array_push($primary_info_array, $output->secondary_address);
                array_push($primary_info_array, $output->secondary_zipcode);
                break;
            }

            return $primary_info_array;
        }elseif($request->owner == "update_account_type"){
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
            $accounttype = $this->get_accounttype($authorid);

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

            $tabledb = "users_primary_details";

            if($accounttype == "donor"){
                $ownerid = $authorid;
            }else{
                // $author_id = 
            }

            $create_array = [
                'author_id' => $authorid,
                'owner_id' => $ownerid,
                'name' => $donor_name,
                'gender' => $donor_gender,
                // 'bio' => $drp_used,
                'primary_email' => $donor_primary_email,
                'secondary_email' => $donor_secondary_email,
                'primary_phone' => $donor_primary_phone,
                'secondary_phone' => $donor_secondary_phone,
                'primary_country' => $donor_primary_country,
                'primary_state' => $donor_primary_state,
                'primary_city' => $donor_primary_city,
                'primary_address' => $donor_primary_address,
                'primary_zipcode' => $donor_primary_zipcode,
                'secondary_country' => $donor_secondary_country,
                'secondary_state' => $donor_secondary_state,
                'secondary_city' => $donor_secondary_city,
                'secondary_address' => $donor_secondary_address,
                'secondary_zipcode' => $donor_secondary_zipcode,
                'created_at' => $currenttime,
                'updated_at' => $currenttime,
            ];

            CrudHelper::Create($tabledb, $create_array);

            // users
            $tabledb = "users";

            $where_array = [
                'id' => $ownerid
            ];

            $update_array = [
                'name' => $donor_name,
                'email' => $donor_primary_email,
                'updated_at' => $currenttime,
            ];

            CrudHelper::Update($tabledb, $where_array, $update_array);
        }elseif($request->owner == "update_password"){
            // return "na in the password!";
            $ownerid = $request->ownerid;
            $password = $request->frm_password;
            $confirm_password = $request->frm_confirm_password;

            if($password == $confirm_password){
                $hashed_password = Hash::make($password);

                // users
                $tabledb = "users";

                $where_array = [
                    'id' => $ownerid
                ];

                $update_array = [
                    'password' => $hashed_password,
                    'updated_at' => $currenttime,
                ];

                // this returns either 1 or zero
                CrudHelper::Update($tabledb, $where_array, $update_array);
            }
        }

    }

    private function get_accounttype($id)
    {
        $tabledb = "users";

        $where_array = [
            'id' => $id,
        ];

        $output = CrudHelper::Get($tabledb, $where_array);

        foreach($output as $output){
            return trim($output->accounttype);
        }
    }
}
