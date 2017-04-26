<?php

namespace App\Http\Controllers\Admin\wholesale;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\admin\wholesale\ProductTypeRepository;
use Validator;
use Log;

class ProductType extends Controller
{
	
	protected $request;
	
	public function rules()
	{
		return [
			'id'=>'required|integer',
			'productType'=>'required|max:128|min:2',
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
	
	public function getAllProductTypeList(ProductTypeRepository $productTypeRepository)
    {//echo "asda"; exit;
		$productTypeList = $productTypeRepository->getAllProductTypeList();
		return json_encode($productTypeList);
	}
	public function saveItem(ProductTypeRepository $productTypeRepository, Request $request)
    {
		$validator = Validator::make($request->all(), 
            ProductType::rules(), ProductType::messages()
        );
		
		if ($validator->fails()) {
            return json_encode(ProductType::messages());
		}
		$productTypeList = $productTypeRepository->saveItem($request->getContent());
		if($productTypeList > 0 && is_numeric($productTypeList))
			return json_encode(['successMsg'    => 'Record inserted sucessfully']);
		elseif($productTypeList == 'exsit')
			return json_encode(['errorMsg'    => 'Product Type already exsit']);
		elseif($productTypeList == 'update')
			return json_encode(['successMsg'    => 'Record updated sucessfully']);	
		else
			return json_encode(['errorMsg'    => 'Insertion Failed, Please try again']);
	}
	
	public function deleteItem(ProductTypeRepository $productTypeRepository, $id){
		$id = $productTypeRepository->deleteItem($id);
		if($id > 0)
			return json_encode(['successMsg'    => 'Record delete sucessfully']);
		else
			return json_encode(['errorMsg'    => 'Deletion Failed, Please try again']);
			
	}
	
}
