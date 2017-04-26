<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\admin\StateRepository;
use Validator;
use Log;

class State extends Controller
{

	protected $request;

	public function rules()
	{
		return [
			'id'=>'required|integer',
			'countryId'=>'required|integer',
			'state'=>'required|max:64|min:2',
			'active'=>'required|boolean'
			];
	}

	public function messages()
	{
		return [
			'errorMsg'    => 'Invalid data, Please try again'
			];
	}

	public function getAllStateList(StateRepository $stateRepository)
	{
		$stateList = $stateRepository->getAllStateList();
		return json_encode($stateList);
	}
	public function saveItem(StateRepository $stateRepository, Request $request)
	{
		$validator = Validator::make($request->all(),
		State::rules(), State::messages()
		);

		if ($validator->fails()) {
			return json_encode(State::messages());
		}
		$stateList = $stateRepository->saveItem($request->getContent());
		if($stateList > 0 && is_numeric($stateList))
		return json_encode(['successMsg'    => 'Record inserted sucessfully']);
		elseif($stateList == 'exsit')
		return json_encode(['errorMsg'    => 'State already exsit']);
		elseif($stateList == 'update')
		return json_encode(['successMsg'    => 'Record updated sucessfully']);
		else
		return json_encode(['errorMsg'    => 'Insertion Failed, Please try again']);
	}

	public function deleteItem(StateRepository $stateRepository, Request $request){
		$id = $stateRepository->deleteItem($request->input("id"));
		if($id > 0)
		return json_encode(['successMsg'    => 'Record deleted sucessfully']);
		else
		return json_encode(['errorMsg'    => 'Deletion Failed, Please try again']);
			
	}

}
