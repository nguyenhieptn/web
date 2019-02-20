<?php
class PeopleModel{
	public function getData(){
		$sql = "SELECT *,groups.name as group_name FROM `people`
INNER JOIN groups ON groups.id = people.group_id";
		$db = mysqli_connect('127.0.0.1','root','root','mmt');
		$result = $db->query($sql);
		return $result;
	}

	public function store($data)
	{
		$sql="INSERT INTO people(name,email,phone,address) VALUE (
				'".$data['name']."',
				'".$data['email']."',
				'".$data['phone']."',
				'".$data['address']."')";
		$db = mysqli_connect('127.0.0.1','root','root','mmt');
		$result = $db->query($sql);
		return $result;
		//them ban ghi vao csdl
	}
	public function destroy($data)
	{
		$sql="DELETE FROM people WHERE id='".$data['id']."'";
		$db = mysqli_connect('127.0.0.1','root','root','mmt');
		$result = $db->query($sql);
		return $result;

	}

	public function getItem($data)
	{
		$sql="Select * FROM people WHERE id='".$data['id']."'";
		$db = mysqli_connect('127.0.0.1','root','root','mmt');
		$result = $db->query($sql);
		return $result;
	}
}