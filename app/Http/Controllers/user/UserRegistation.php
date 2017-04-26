<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\user\UserRegistationRepository;
use Validator;
use Log;

class UserRegistation extends Controller
{

	protected $request;

	public function rules()
	{
		return [
			'personName'=>'required|min:2|max:128',
			'personalMobileNum'=>'required|min:6|max:16',
			'personalEmailId'=>'max:64',
			'accPwd'=>'required|min:6|max:12',
			'companyName'=>'required|min:3|max:128',
			'comWebsite'=>'max:128',
			'postalCode'=>'required|min:1|max:10',
			'addressNo'=>'required|min:3|max:128',
			'addr1'=>'required|min:3|max:128',
			'addr2'=>'max:128',
			'city'=>'required|min:3|max:64',
			'county'=>'required|min:3|max:64',
			'latitude'=>'max:64',
			'longitude'=>'max:64',
            'title'=>'required|min:6|max:256',
			'classifcation'=>'required|min:6|max:256',
			'description'=>'required|min:6|max:1024',
			'map_street'=>'max:128',
			'map_postalcode'=>'max:128',
			'map_country'=>'max:128',
			'map_city'=>'max:128',
			'map_district'=>'max:128',
			'map_region'=>'max:128',
		];
	}

	public function messages()
	{
		return [
			'errorMsg'    => 'Invalid data, Please try again'
			];
	}

	public function create(UserRegistationRepository $businessModelRepository, Request $request)
	{
		$validator = Validator::make($request->all(),
		UserRegistation::rules(), UserRegistation::messages()
		);
		if ($validator->fails()) {
			return json_encode($validator->errors()->all());
		}

		$response = $businessModelRepository->saveItem($request->getContent());
		if($response > 0 && is_numeric($response)){
			$request->session()->put('userName', $request->input("personName"));
			$request->session()->put('userId', $response);
			return json_encode(['successMsg'    => 'Record inserted sucessfully']);
		}
		elseif($response == 'exsit')
		return json_encode(['errorMsg'    => 'Mobile or Email is already exsit']);
		else
		return json_encode(['errorMsg'    => 'Insertion Failed, Please try again']);
	}

	public function getCityState(Request $request) {
		$zip = $request->input("address");
		$zip=preg_replace('/\s+/', '', $zip);
		$url = "http://maps.googleapis.com/maps/api/geocode/json?address=" . $zip . "&sensor=true";
		//$url = "https://maps.googleapis.com/maps/api/geocode/json?address=" . $zip . "&sensor=true&key=AIzaSyA_2V4PwbHUXlzLJ-EbkVsJeB68TqRGUe0";
		$address_info = file_get_contents($url);
		$json = json_decode($address_info);
		$city = "";
		$area_county = "";
		$country = "";
		 
		if (count($json->results) > 0) {
			//break up the components
			$arrComponents = $json->results[0]->address_components;
			 
			foreach($arrComponents as $index=>$component) {
				$type = $component->types[0];
				 
				if ($city == "" && ($type == "postal_town" || $type == "locality" || $type == "administrative_area_level_2") ) {
					$city = trim($component->long_name);
				}
				if ($area_county == "" && ($type == "route" || $type == "political" || $type == "administrative_area_level_1")) {
					$area_county = trim($component->long_name);
				}
				if ($country == "" && $type=="country") {
					$country = trim($component->long_name);
				}
				if ($city != "" && $area_county != "" && $country != "") {
						
					break;
				}
			}
		}
		//print_r($arrComponents);exit;
		$arrReturn = array("city"=>$city, "area_county"=>$area_county, "country"=>$country);

		return (json_encode($arrReturn));
	}

}
