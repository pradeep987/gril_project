<?php

namespace App\Http\Controllers\Admin\manufacture;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\admin\manufacture\ProductModelRepository;
use Validator;
use Log;

class ProductModel extends Controller
{
	
	protected $request;
	
	public function rules()
	{
		return [
			'id'=>'required|integer',
			'productModel'=>'required|max:128|min:2',
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
	
	public function getAllProductModelList(ProductModelRepository $productModelRepository)
    {
		$productModelList = $productModelRepository->getAllProductModelList();
		return json_encode($productModelList);
	}
	public function saveItem(ProductModelRepository $productModelRepository, Request $request)
    {
		$validator = Validator::make($request->all(), 
            ProductModel::rules(), ProductModel::messages()
        );
		
		if ($validator->fails()) {
            return json_encode(ProductModel::messages());
		}
		$productModelList = $productModelRepository->saveItem($request->getContent());
		if($productModelList > 0 && is_numeric($productModelList))
			return json_encode(['successMsg'    => 'Record inserted sucessfully']);
		elseif($productModelList == 'exsit')
			return json_encode(['errorMsg'    => 'Product Model already exsit']);
		elseif($productModelList == 'update')
			return json_encode(['successMsg'    => 'Record updated sucessfully']);	
		else
			return json_encode(['errorMsg'    => 'Insertion Failed, Please try again']);
	}
	
	public function deleteItem(ProductModelRepository $productModelRepository, $id){
		$id = $productModelRepository->deleteItem($id);
		if($id > 0)
			return json_encode(['successMsg'    => 'Record delete sucessfully']);
		else
			return json_encode(['errorMsg'    => 'Deletion Failed, Please try again']);
			
	}
	
}
