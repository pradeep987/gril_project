<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\Dashboard\DashboardRepository;
use Validator;
use Log;
use view;

class Dashboard extends Controller
{

	protected $request;

	public function loadDashboard(DashboardRepository $dashboardRepository, Request $request){
		if($request->session()->has("userId")){
			$bussModelList = $dashboardRepository->getBussinessModel($request->session()->get("userId"));
			$arr = array();
			foreach($bussModelList as $obj){
				$short_name = strtolower($obj->short_name);
				if($obj->comm_seller_user_id > 0){
					$arr[] = ["title" => $obj->name, "icon" => $obj->icon, "id" => $obj->id, "comm_seller_user_id" => $obj->comm_seller_user_id, "child" => array(
					$short_name."Profile" => array($obj->short_name." Profile", $short_name."Profile", "icon-refresh"),
					$short_name."Products" => array($obj->short_name." Products", $short_name."Products", "icon-refresh"),
								"add".$short_name."Products" => array("Add ".$obj->short_name." Products", "add".$short_name."Products", "icon-refresh")
					)];
				}else{
					$arr[] = ["title" => $obj->name, "icon" => $obj->icon, "id" => $obj->id, "child" => "", "comm_seller_user_id" => -1];
				}
			}
			$dashboarSideBar = array(
			["title" => "Dashboard", "icon" => "icon-home", "url" => "dashboard", "child" => "", "comm_seller_user_id" => 0],
			["title" => "User Profile", "icon" => "icon-user", "url" => "account", "child" => "", "comm_seller_user_id" => 0],
				
			);
			$dashboarSideBar = array_merge($dashboarSideBar, $arr);
			$request->session()->put('dashboarSideBar', $dashboarSideBar);
			return view("dashboard/dashboard");
		}else{
			return view("user/registration");
		}
	}

	public function activeDashboardMenu(DashboardRepository $dashboardRepository, Request $request, $id){
		if($id > 0){
			$dashboardRepository->activeDashboardMenu($id, $request->session()->get("userId"));
			$this->loadDashboard($dashboardRepository, $request);
		}

		return redirect()->back();
	}


}
