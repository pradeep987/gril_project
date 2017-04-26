<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\admin\PostalCodeRepository;
use Validator;
use Log;

class PostalCode extends Controller
{

	protected $request;

	public function rules()
	{
		return [
			'id'=>'required|integer',
			'countryId'=>'required|integer',
			'countyId'=>'required|integer',
            'city'=>'required|max:128|min:2',
            'postalcode'=>'required|max:16|min:2',
            'postalarea'=>'required|max:128|min:2',
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

	public function getAllPostalCodeList(PostalCodeRepository $PostalCodeRepository)
	{
		$PostalCodeList = $PostalCodeRepository->getAllPostalCodeList();
		return json_encode($PostalCodeList);
	}
	public function saveItem(PostalCodeRepository $PostalCodeRepository, Request $request)
	{
		$validator = Validator::make($request->all(),
		PostalCode::rules(), PostalCode::messages()
		);

		if ($validator->fails()) {
			return json_encode(PostalCode::messages());
		}
		$PostalCodeList = $PostalCodeRepository->saveItem($request->getContent());
		if($PostalCodeList > 0 && is_numeric($PostalCodeList))
		return json_encode(['successMsg'    => 'Record inserted sucessfully']);
		elseif($PostalCodeList == 'exsit')
		return json_encode(['errorMsg'    => 'Postal Code already exsit']);
		elseif($PostalCodeList == 'update')
		return json_encode(['successMsg'    => 'Record updated sucessfully']);
		else
		return json_encode(['errorMsg'    => 'Insertion Failed, Please try again']);
	}

	public function deleteItem(PostalCodeRepository $PostalCodeRepository, $id){
		$id = $PostalCodeRepository->deleteItem($id);
		if($id > 0)
		return json_encode(['successMsg'    => 'Record deleted sucessfully']);
		else
		return json_encode(['errorMsg'    => 'Deletion Failed, Please try again']);
			
	}

}
