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
        }elseif($request->owner =="get_gender_of_user"){
            $tabledb = "users_primary_details";
            // return $request->ownerid;
            $where_array = [
                'owner_id' => $request->ownerid,
            ];
    
            $output = CrudHelper::Get($tabledb, $where_array);
            // return count($output);
            foreach($output as $output){
                return $output->gender;
            }
            // }
        }elseif($request->owner =="get_auth_user_info"){
            $tabledb = "users_primary_details";
            
            $id = Auth::id();

            $where_array = [
                'owner_id' => $id,
            ];
    
            $output = CrudHelper::Get($tabledb, $where_array);

            $primary_info_array = [];

            if(count($output) > 0){
                foreach($output as $output){
                    array_push($primary_info_array, $output->name);
                    array_push($primary_info_array, $output->primary_phone);
                    array_push($primary_info_array, $output->primary_email);
                    array_push($primary_info_array, $output->bio);
                }
            }else{
                array_push($primary_info_array, "");
                array_push($primary_info_array, "");
                array_push($primary_info_array, "");
                array_push($primary_info_array, "");
            }

            return $primary_info_array;
        }elseif($request->owner == "download_all_medical_history"){
            // return "fresh fish!";
            $tabledb = "users_medical_history";

            $where_array = [
                'owner_id' => $request->ownerid,
            ];
    
            $output = CrudHelper::Get($tabledb, $where_array);
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
        }elseif($request->owner == "update_authen_settings_details"){
            $authorid = Auth::id();

            $tabledb = "users_primary_details";

            $fullname = $request->fullname_frm;
            $phone = $request->phone_frm;
            $email = $request->email_frm;
            $biography = $request->biography_frm;

            $where_array = [
                'owner_id' => $authorid,
            ];

            $update_array = [
                'name' => $fullname,
                'primary_email' => $email,
                'primary_phone' => $phone,
                'bio' => $biography,
                'updated_at' => $currenttime,
            ];

            CrudHelper::Update($tabledb, $where_array, $update_array);

            // users
            $tabledb = "users";

            $authorid = Auth::id();

            $where_array = [
                'id' => $authorid
            ];

            $update_array = [
                'name' => $fullname,
                'email' => $email,
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
        }elseif($request->owner == "update_medical_hist" || $request->owner == "update_edited_medical_hist"){
            $authorid = Auth::id();

            $tabledb = "users_medical_history";

            if($request->owner == "update_edited_medical_hist"){
                // 'records_type' => "";
                $recordstype = "sub";
                $records_owner = "$request->ownerid";
            }else{
                $recordstype = "main";
                $records_owner = "$request->ownerid";
            }

            $ownerid = $request->ownerid;
            $partner_name = $request->partner_name;
            $healthy_question = $request->healthy_question;
            $health_history_1 = $request->health_history_1;
            $health_history_2 = $request->health_history_2;
            $chronic_illness_details1 = $request->chronic_illness_details1;
            $chronic_illness_details2 = $request->chronic_illness_details2;
            $fertility_test_treatment = $request->fertility_test_treatment;
            $sti_diagnosis = $request->sti_diagnosis;
            $fertility_tests_details = $request->fertility_tests_details;
            $sti_diagnosis_details = $request->sti_diagnosis_details;
            $taking_medications = $request->taking_medications;
            $known_allergies = $request->known_allergies;
            $taking_medications_details = $request->taking_medications_details;
            $known_allergies_details = $request->known_allergies_details;
            $smoke_status = $request->smoke_status;
            $alcohol_status = $request->alcohol_status;
            $smoke_status_details = $request->smoke_status_details;
            $alcohol_status_details = $request->alcohol_status_details;
            $hard_drugs = $request->hard_drugs;
            $hard_drugs_details = $request->hard_drugs_details;
            $comments = $request->comments;

            $create_array = [
                'author_id' => $authorid,
                'owner_id' => $ownerid,
                'records_type' => $recordstype,
                'records_owner' => $records_owner,
                'partner_name' => $partner_name,
                'healthy_question' => $healthy_question,
                'health_history_1' => $health_history_1,
                'health_history_2' => $health_history_2,
                'chronic_illness_details1' => $chronic_illness_details1,
                'chronic_illness_details2' => $chronic_illness_details2,
                'fertility_test_treatment' => $fertility_test_treatment,
                'sti_diagnosis' => $sti_diagnosis,
                'fertility_tests_details' => $fertility_tests_details,
                'sti_diagnosis_details' => $sti_diagnosis_details,
                'taking_medications' => $taking_medications,
                'known_allergies' => $known_allergies,
                'taking_medications_details' => $taking_medications_details,
                'known_allergies_details' => $known_allergies_details,
                'smoke_status' => $smoke_status,
                'alcohol_status' => $alcohol_status,
                'smoke_status_details' => $smoke_status_details,
                'alcohol_status_details' => $alcohol_status_details,
                'hard_drugs' => $hard_drugs,
                'hard_drugs_details' => $hard_drugs_details,
                'comments' => $comments,
                'created_at' => $currenttime,
                'updated_at' => $currenttime,
            ];

            CrudHelper::Create($tabledb, $create_array);
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
