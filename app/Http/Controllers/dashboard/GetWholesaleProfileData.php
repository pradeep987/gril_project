<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\Dashboard\GetWholesaleProfileDataRepository;
use Validator;
use Log;
use View;

class GetWholesaleProfileData extends Controller
{

	protected $request;

	public function myWholesaleBussRegRules()
	{
		return [
			'id'=>'required',
			'title'=>'required|min:2|max:256',
			'clasification'=>'required|min:6|max:256',
			'description'=>'required|min:6|max:1024',
		];
	}

	public function myWholesaleBussProfRules()
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

	public function getWholesaleProfileData(GetWholesaleProfileDataRepository $GetWholesaleProfileDataRepository, Request $request){
		$json = $GetWholesaleProfileDataRepository->getWholesaleProfileData($request->session()->get('userId'));
		return View::make("dashboard/wholesale/wholesaleProfile")->with("data", $json);
	}

	public function saveMyWholesaleBussReg(GetWholesaleProfileDataRepository $GetWholesaleProfileDataRepository, Request $request)
	{
		$validator = Validator::make($request->all(),
		GetWholesaleProfileData::myWholesaleBussRegRules(), GetWholesaleProfileData::messages()
		);

		if ($validator->fails()) {
			return json_encode($validator->errors()->all());
		}
		$response = $GetWholesaleProfileDataRepository->saveMyWholesaleBussReg($request->getContent(), $request->session()->get("userId"));
		if($response == 'update')
		return json_encode(['successMsg'    => 'Record updated sucessfully']);
		else
		return json_encode(['errorMsg'    => 'Updation Failed, Please try again']);
	}


	public function saveMyWholesaleBussProf(GetWholesaleProfileDataRepository $GetWholesaleProfileDataRepository, Request $request)
	{

		$validator = Validator::make($request->all(),
		GetWholesaleProfileData::myWholesaleBussProfRules(), GetWholesaleProfileData::messages()
		);

		if ($validator->fails()) {
			return json_encode($validator->errors()->all());
		}
		 
		$response = $GetWholesaleProfileDataRepository->saveMyWholesaleBussProf($request->getContent(), $request->session()->get("userId"));
		if($response == 'update')
		return json_encode(['successMsg'    => 'Record updated sucessfully']);
		else
		return json_encode(['errorMsg'    => 'Updation Failed, Please try again']);
	}

	public function saveWholesaleGoogleMapLocation(GetWholesaleProfileDataRepository $GetWholesaleProfileDataRepository, Request $request)
	{

		$validator = Validator::make($request->all(),
		GetWholesaleProfileData::myGoogleLocation(), GetWholesaleProfileData::messages()
		);

		if ($validator->fails()) {
			return json_encode($validator->errors()->all());
		}
		 
		$response = $GetWholesaleProfileDataRepository->saveGoogleMapLocation($request->getContent());
		if($response == 'update')
		return json_encode(['successMsg'    => 'Record updated sucessfully']);
		else
		return json_encode(['errorMsg'    => 'Updation Failed, Please try again']);

	}


}
