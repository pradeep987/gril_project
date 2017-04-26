<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\admin\CityRepository;
use Validator;
use Log;

class City extends Controller
{

	protected $request;

	public function rules()
	{
		return [
			'id'=>'required|integer',
			'stateId'=>'required|integer',
			'countryId'=>'required|integer',
			'city'=>'required|max:64|min:2',
			'active'=>'required|boolean'
			];
	}

	public function messages()
	{
		return [
			'errorMsg'    => 'Invalid data, Please try again'
			];
	}

	public function getAllCityList(CityRepository $cityRepository)
	{
		$cityList = $cityRepository->getAllCityList();
		return json_encode($cityList);
	}
	public function saveItem(CityRepository $cityRepository, Request $request)
	{
		$validator = Validator::make($request->all(),
		City::rules(), City::messages()
		);

		if ($validator->fails()) {
			return json_encode(City::messages());
		}
		$cityList = $cityRepository->saveItem($request->getContent());
		if($cityList > 0 && is_numeric($cityList))
		return json_encode(['successMsg'    => 'Record inserted sucessfully']);
		elseif($cityList == 'exsit')
		return json_encode(['errorMsg'    => 'City already exsit']);
		elseif($cityList == 'update')
		return json_encode(['successMsg'    => 'Record updated sucessfully']);
		else
		return json_encode(['errorMsg'    => 'Insertion Failed, Please try again']);
	}

	public function deleteItem(CityRepository $cityRepository, Request $request){
		$id = $cityRepository->deleteItem($request->input("id"));
		if($id > 0)
		return json_encode(['successMsg'    => 'Record deleted sucessfully']);
		else
		return json_encode(['errorMsg'    => 'Deletion Failed, Please try again']);
			
	}

}
