<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\admin\MainCategoryRepository;
use Validator;
use Log;

class MainCategory extends Controller
{

	protected $request;

	public function rules()
	{
		return [
			'id'=>'required|integer',
			'mainCategory'=>'required|max:64|min:2',
			'active'=>'required|boolean'
			];
	}

	public function messages()
	{
		return [
			'errorMsg'    => 'Invalid data, Please try again'
			];
	}

	public function getAllMainCategoryList(MainCategoryRepository $mainCategoryRepository)
	{
		$mainCategoryList = $mainCategoryRepository->getAllMainCategoryList();
		return json_encode($mainCategoryList);
	}
	public function saveItem(MainCategoryRepository $mainCategoryRepository, Request $request)
	{
		$validator = Validator::make($request->all(),
		MainCategory::rules(), MainCategory::messages()
		);

		if ($validator->fails()) {
			return json_encode(MainCategory::messages());
		}
		$mainCategoryList = $mainCategoryRepository->saveItem($request->getContent());
		if($mainCategoryList > 0 && is_numeric($mainCategoryList))
		return json_encode(['successMsg'    => 'Record inserted sucessfully']);
		elseif($mainCategoryList == 'exsit')
		return json_encode(['errorMsg'    => 'Main Category already exsit']);
		elseif($mainCategoryList == 'update')
		return json_encode(['successMsg'    => 'Record updated sucessfully']);
		else
		return json_encode(['errorMsg'    => 'Insertion Failed, Please try again']);
	}

	public function deleteItem(MainCategoryRepository $mainCategoryRepository, Request $request){
		$id = $mainCategoryRepository->deleteItem($request->input("id"));
		if($id > 0)
		return json_encode(['successMsg'    => 'Record deleted sucessfully']);
		else
		return json_encode(['errorMsg'    => 'Deletion Failed, Please try again']);
			
	}

}
