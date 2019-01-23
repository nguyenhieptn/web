<?php
require_once('models/PeopleModel.php');
class PeopleController
{
	public function index(){
		//lay du lieu tu model
		$people = new PeopleModel();
		$data = $people->getData();
		
		include('views/people/index.php');
	}
	
	public function create(){
		echo " nguoi dung muon create ban ghi";
	}
	
	public function bay(){
		echo " bay";
	}
}