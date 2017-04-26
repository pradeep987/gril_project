<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\admin\LoginRepository;
use Validator;
use Redirect;
use Session;
use Log;

class Login extends Controller
{

	protected $request;

	public function rules()
	{
		return [
			'username'=>'required|min:4|max:50',
			'password'=>'required|min:4|max:12',
		];
	}

	public function messages()
	{
		return [
			'required'    => 'The :attribute must required',
			'max'         => 'The :attribute maximum 12 characters',
			'min'         => 'The :attribute minimum 4 characters',
		];
	}
	public function login(LoginRepository $login_repository,Request $request)
	{
		$validator = Validator::make($request->all(),
		Login::rules(), Login::messages()
		);

		if ($validator->fails()) {
			return redirect('admin')
			->withErrors($validator)
			->withInput();
		}else{
			$login_result = $login_repository->userAuthentication($request->all());
			//print_r($login_result[0]->usr_name);exit;
			if(count($login_result) > 0 && $login_result[0]->usr_name && $login_result[0]->usr_id){
				$request->session()->put('loginUserName', $login_result[0]->usr_name);
				$request->session()->put('loginUserId', $login_result[0]->usr_id);
				$sideBar = array();
				$sideBar["Master"] = array(
									"country" => array("Country", "admin/country", "icon-bar-chart"),
									"county" => array("County", "admin/county", "icon-bar-chart"),
                                    "postalCode" => array("Postal Code", "admin/postalCode", "icon-bar-chart"),
									"businessModel" => array("Business Model", "admin/businessModel", "icon-bar-chart"),
					
				);
				$sideBar["Retailer"] = array(
									"businessCategroy" => array("Business Categroy", "admin/businessCategroy", "icon-bar-chart"),
									"businessType" => array("Business Type", "admin/businessType", "icon-bar-chart"),
									"productType" => array("Product Type", "admin/productType", "icon-bar-chart"),
									"productModel" => array("Product Model", "admin/productModel", "icon-bar-chart"),
									);
                $sideBar["WholeSale"] = array(
									"WholeSalebusinessCategroy" => array("Business Categroy", "admin/wholesale/businessCategroy", "icon-bar-chart"),
									"WholeSalebusinessType" => array("Business Type", "admin/wholesale/businessType", "icon-bar-chart"),
									"WholeSaleproductType" => array("Product Type", "admin/wholesale/productType", "icon-bar-chart"),
									"WholeSaleproductModel" => array("Product Model", "admin/wholesale/productModel", "icon-bar-chart"),
									);
								
			    $sideBar["Hire Or Rental"] = array(
									"HirebusinessCategroy" => array("Business Categroy", "admin/hire/businessCategroy", "icon-bar-chart"),
									"HirebusinessType" => array("Business Type", "admin/hire/businessType", "icon-bar-chart"),
									"HireproductType" => array("Product Type", "admin/hire/productType", "icon-bar-chart"),
									"HireproductModel" => array("Product Model", "admin/hire/productModel", "icon-bar-chart"),
									);

                
                $sideBar["Importer"] = array(
									"ImporterbusinessCategroy" => array("Business Categroy", "admin/importer/businessCategroy", "icon-bar-chart"),
									"ImporterbusinessType" => array("Business Type", "admin/importer/businessType", "icon-bar-chart"),
									"ImporterproductType" => array("Product Type", "admin/importer/productType", "icon-bar-chart"),
									"ImporterproductModel" => array("Product Model", "admin/importer/productModel", "icon-bar-chart"),
									);
									
				$sideBar["Exporter"] = array(
									"ExporterbusinessCategroy" => array("Business Categroy", "admin/exporter/businessCategroy", "icon-bar-chart"),
									"ExporterbusinessType" => array("Business Type", "admin/exporter/businessType", "icon-bar-chart"),
									"ExporterproductType" => array("Product Type", "admin/exporter/productType", "icon-bar-chart"),
									"ExporterproductModel" => array("Product Model", "admin/exporter/productModel", "icon-bar-chart"),
									);
                $sideBar["Manufacture"] = array(
									"ManufacturebusinessCategroy" => array("Business Categroy", "admin/manufacture/businessCategroy", "icon-bar-chart"),
									"ManufacturebusinessType" => array("Business Type", "admin/manufacture/businessType", "icon-bar-chart"),
									"ManufactureproductType" => array("Product Type", "admin/manufacture/productType", "icon-bar-chart"),
									"ManufactureproductModel" => array("Product Model", "admin/manufacture/productModel", "icon-bar-chart"),
									);
                $sideBar["Service Provider"] = array(
									"ServiceProviderbusinessCategroy" => array("Business Categroy", "admin/serviceprovider/businessCategroy", "icon-bar-chart"),
									"ServiceProviderbusinessType" => array("Business Type", "admin/serviceprovider/businessType", "icon-bar-chart"),
									"ServiceProviderproductType" => array("Product Type", "admin/serviceprovider/productType", "icon-bar-chart"),
									"ServiceProviderproductModel" => array("Product Model", "admin/serviceprovider/productModel", "icon-bar-chart"),
									);
					
					
				$request->session()->put('sideBar', $sideBar);
				return Redirect::to("admin/country");
			}else{
				return redirect()->back()->with('login_errror','Invalid Login');
			}
		}
	}

	public function logout(){
		Session::flush();
		return Redirect::to('admin');
	}

}
