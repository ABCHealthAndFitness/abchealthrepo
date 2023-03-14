<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index(Request $request){

        $height_in_meters = $request->height/100;
        $square_of_height = $height_in_meters * $height_in_meters;
        $bmi = $request->weight/$square_of_height;
        
        $customer_details['first_name'] = $request->first_name;
        $customer_details['last_name'] = $request->last_name;
        $customer_details['gender'] = $request->gender;
        $customer_details['dob'] = $request->dob;
        $customer_details['age'] = $request->age;
        $customer_details['phone_number'] = $request->phone_number;
        $customer_details['email'] = $request->email ;
        $customer_details['address_1'] = $request->address_1;
        $customer_details['address_2'] = $request->address_2;
        $customer_details['city'] = $request->city;
        $customer_details['county'] = $request->county;
        $customer_details['province'] = $request->province;
        $customer_details['country'] = $request->country;
        $customer_details['height'] = $request->height;
        $customer_details['weight'] = $request->weight;
        $customer_details['goal_weight'] = $request->goal_weight;
        $customer_details['emergency_number'] = $request->emergency_number;
        $customer_details['emergency_relationship'] = $request->emergency_relationship;
        $customer_details['reason'] = $request->reason;
        $customer_details['bmi'] = $bmi;

        $result = Customers::create($customer_details);

        if($result){
            return 1;
        }
        else{
            return 0;
        }
    }

    public function fetchCustomers(Request $request)
    {
        $customers = Customers::get();

        return view('backend.admin.customers', ['customers' => $customers]);
    }

    public function assignCoach(Request $request)
    {
        dd("It's Working");
    }

}
