<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\admin\SubCategoryRepository;
use Validator;
use Log;

class SubCategory extends Controller
{

	protected $request;

	public function rules()
	{
		return [
			'id'=>'required|integer',
			'categoryId'=>'required|integer',
			'mcId'=>'required|integer',
			'subCategory'=>'required|max:64|min:2',
			'active'=>'required|boolean'
			];
	}

	public function messages()
	{
		return [
			'errorMsg'    => 'Invalid data, Please try again'
			];
	}

	public function getAllSubCategoryList(SubCategoryRepository $subCategoryRepository)
	{
		$subCategoryList = $subCategoryRepository->getAllSubCategoryList();
		return json_encode($subCategoryList);
	}
	public function saveItem(SubCategoryRepository $subCategoryRepository, Request $request)
	{
		$validator = Validator::make($request->all(),
		SubCategory::rules(), SubCategory::messages()
		);

		if ($validator->fails()) {
			return json_encode(SubCategory::messages());
		}
		$subCategoryList = $subCategoryRepository->saveItem($request->getContent());
		if($subCategoryList > 0 && is_numeric($subCategoryList))
		return json_encode(['successMsg'    => 'Record inserted sucessfully']);
		elseif($subCategoryList == 'exsit')
		return json_encode(['errorMsg'    => 'Sub Category already exsit']);
		elseif($subCategoryList == 'update')
		return json_encode(['successMsg'    => 'Record updated sucessfully']);
		else
		return json_encode(['errorMsg'    => 'Insertion Failed, Please try again']);
	}

	public function deleteItem(SubCategoryRepository $subCategoryRepository, Request $request){
		$id = $subCategoryRepository->deleteItem($request->input("id"));
		if($id > 0)
		return json_encode(['successMsg'    => 'Record deleted sucessfully']);
		else
		return json_encode(['errorMsg'    => 'Deletion Failed, Please try again']);
			
	}

}
