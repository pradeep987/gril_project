<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\admin\CategoryRepository;
use Validator;
use Log;

class Category extends Controller
{

	protected $request;

	public function rules()
	{
		return [
			'id'=>'required|integer',
			'mcId'=>'required|integer',
			'category'=>'required|max:64|min:2',
			'active'=>'required|boolean'
			];
	}

	public function messages()
	{
		return [
			'errorMsg'    => 'Invalid data, Please try again'
			];
	}

	public function getAllCategoryList(CategoryRepository $categoryRepository)
	{
		$categoryList = $categoryRepository->getAllCategoryList();
		return json_encode($categoryList);
	}
	public function saveItem(CategoryRepository $categoryRepository, Request $request)
	{
		$validator = Validator::make($request->all(),
		Category::rules(), Category::messages()
		);

		if ($validator->fails()) {
			return json_encode(Category::messages());
		}
		$categoryList = $categoryRepository->saveItem($request->getContent());
		if($categoryList > 0 && is_numeric($categoryList))
		return json_encode(['successMsg'    => 'Record inserted sucessfully']);
		elseif($categoryList == 'exsit')
		return json_encode(['errorMsg'    => 'Category already exsit']);
		elseif($categoryList == 'update')
		return json_encode(['successMsg'    => 'Record updated sucessfully']);
		else
		return json_encode(['errorMsg'    => 'Insertion Failed, Please try again']);
	}

	public function deleteItem(CategoryRepository $categoryRepository, Request $request){
		$id = $categoryRepository->deleteItem($request->input("id"));
		if($id > 0)
		return json_encode(['successMsg'    => 'Record deleted sucessfully']);
		else
		return json_encode(['errorMsg'    => 'Deletion Failed, Please try again']);
			
	}

}
