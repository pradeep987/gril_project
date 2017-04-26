<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\admin\CountryRepository;
use Validator;
use Log;

class Country extends Controller
{

	protected $request;

	public function rules()
	{
		return [
			'id'=>'required|integer',
			'country'=>'required|max:128|min:2',
			'active'=>'required|boolean',
			
			'seoTitle'=>'max:256',
			'seoUrl'=>'max:256',
			'seoKeywords'=>'max:256',
			'seoTags'=>'max:256',
			'seoDesc'=>'max:1024'
			];
	}

	public function messages()
	{
		return [
			'errorMsg'    => 'Invalid data, Please try again'
			];
	}

	public function getAllCountryList(CountryRepository $countryRepository)
	{
		$countryList = $countryRepository->getAllCountryList();
		return json_encode($countryList);
	}
	public function saveItem(CountryRepository $countryRepository, Request $request)
	{
		$validator = Validator::make($request->all(),
		Country::rules(), Country::messages()
		);

		if ($validator->fails()) {
			return json_encode(Country::messages());
		}
		$countryList = $countryRepository->saveItem($request->getContent());
		if($countryList > 0 && is_numeric($countryList))
		return json_encode(['successMsg'    => 'Record inserted sucessfully']);
		elseif($countryList == 'exsit')
		return json_encode(['errorMsg'    => 'Country already exsit']);
		elseif($countryList == 'update')
		return json_encode(['successMsg'    => 'Record updated sucessfully']);
		else
		return json_encode(['errorMsg'    => 'Insertion Failed, Please try again']);
	}

	public function deleteItem(CountryRepository $countryRepository, $id){
		$id = $countryRepository->deleteItem($id);
		if($id > 0)
		return json_encode(['successMsg'    => 'Record delete sucessfully']);
		else
		return json_encode(['errorMsg'    => 'Deletion Failed, Please try again']);
			
	}

}
