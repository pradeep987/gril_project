<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\Dashboard\GetRentalProfileDataRepository;
use Validator;
use Log;
use View;

class GetRentalProfileData extends Controller
{

	protected $request;

	public function myRentalBussRegRules()
	{
		return [
			'id'=>'required',
			'title'=>'required|min:2|max:256',
			'clasification'=>'required|min:6|max:256',
			'description'=>'required|min:6|max:1024',
		];
	}

	public function myRentalBussProfRules()
	{
		return [
			'id'=>'required',
			'mobile'=>'required|min:6|max:16',
            'landline'=>'max:16',
			'email'=>'max:64',
			'website'=>'max:256',
			'bussName'=>'required|min:2|max:256',
			'numberName'=>'required|min:2|max:256',
			'address_1'=>'required|min:2|max:256',
            'address_2'=>'max:256',
			'postal_code'=>'required|min:1|max:10',
            'city'=>'required|min:2|max:64',
            'county'=>'required|min:2|max:64',
		];
	}

	public function myGoogleLocation()
	{
		return [
			'id'=>'required',
			'latitude'=>'required|min:6|max:32',
            'longitude'=>'required|min:6|max:32',
			'map_street'=>'max:256',
			'map_postalcode'=>'max:16',
			'map_country'=>'max:256',
			'map_city'=>'max:256',
			'map_district'=>'max:256',
			'map_region'=>'max:256',
			'map_street_short'=>'max:256',
			'map_postalcode_short'=>'max:16',
			'map_country_short'=>'max:256',
			'map_city_short'=>'max:256',
			'map_district_short'=>'max:256',
			'map_region_short'=>'max:256',
		];
	}

	public function messages()
	{
		return [
			'errorMsg'    => 'Invalid data, Please try again'
			];
	}

	public function getRentalProfileData(GetRentalProfileDataRepository $GetRentalProfileDataRepository, Request $request){
		$json = $GetRentalProfileDataRepository->getRentalProfileData($request->session()->get('userId'));
		return View::make("dashboard/rental/rentalProfile")->with("data", $json);
	}

	public function saveMyRentalBussReg(GetRentalProfileDataRepository $GetRentalProfileDataRepository, Request $request)
	{
		$validator = Validator::make($request->all(),
		GetRentalProfileData::myRentalBussRegRules(), GetRentalProfileData::messages()
		);

		if ($validator->fails()) {
			return json_encode($validator->errors()->all());
		}
		$response = $GetRentalProfileDataRepository->saveMyRentalBussReg($request->getContent(), $request->session()->get("userId"));
		if($response == 'update')
		return json_encode(['successMsg'    => 'Record updated sucessfully']);
		else
		return json_encode(['errorMsg'    => 'Updation Failed, Please try again']);
	}


	public function saveMyRentalBussProf(GetRentalProfileDataRepository $GetRentalProfileDataRepository, Request $request)
	{

		$validator = Validator::make($request->all(),
		GetRentalProfileData::myRentalBussProfRules(), GetRentalProfileData::messages()
		);

		if ($validator->fails()) {
			return json_encode($validator->errors()->all());
		}
		 
		$response = $GetRentalProfileDataRepository->saveMyRentalBussProf($request->getContent(), $request->session()->get("userId"));
		if($response == 'update')
		return json_encode(['successMsg'    => 'Record updated sucessfully']);
		else
		return json_encode(['errorMsg'    => 'Updation Failed, Please try again']);
	}

	public function saveRentalGoogleMapLocation(GetRentalProfileDataRepository $GetRentalProfileDataRepository, Request $request)
	{

		$validator = Validator::make($request->all(),
		GetRentalProfileData::myGoogleLocation(), GetRentalProfileData::messages()
		);

		if ($validator->fails()) {
			return json_encode($validator->errors()->all());
		}
		 
		$response = $GetRentalProfileDataRepository->saveGoogleMapLocation($request->getContent());
		if($response == 'update')
		return json_encode(['successMsg'    => 'Record updated sucessfully']);
		else
		return json_encode(['errorMsg'    => 'Updation Failed, Please try again']);

	}


}
