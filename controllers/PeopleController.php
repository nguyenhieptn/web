<?php
require_once('models/PeopleModel.php');
require_once('models/GroupModel.php');
class PeopleController
{
	public function index(){
		//lay du lieu tu model
		$people = new PeopleModel();
		$data = $people->getData();
		include('views/people/index.php');
	}
	
	public function create(){
        $group = new GroupModel();
        $dataGroup = $group->getData();

		//1. hien thi form ra cho nguoi dun
		include('views/people/form.php');
	}

	
	public function store(){
		//1. lay du lieu tu form
		//2. goi model de luu vao csdl
		$data = array();
		$data['name'] = $_POST['name'];
		$data['phone'] = $_POST['phone'];
		$data['address'] = $_POST['address'];
		$data['email'] = $_POST['email'];
		$data['group_id'] = $_POST['group_id'];

		$people = new PeopleModel();
		$data = $people->store($data);
        return header("Location: index.php?task=index");
	}

    public function destroy(){
        $data = array();
        $data['id'] = $_GET['id'];
        $people = new PeopleModel();
        $data = $people->destroy($data);
        return header("Location: index.php?task=index");
    }
    public function Edit(){
        $data = array();
        $data['id'] = $_GET['id'];
        $people = new PeopleModel();
        $data1 = $people->getItem($data);
        return header("Location: index.php?task=index");
        include('views/people/formsua.php');
    }
    public function EditStore(){
        $data = array();
        $data['name'] = $_POST['name'];
        $data['phone'] = $_POST['phone'];
        $data['address'] = $_POST['address'];
        $data['email'] = $_POST['email'];

        $people = new PeopleModel();
        $data = $people->store($data);
        return header("Location: index.php?task=index");
	}
}