<?php
class PeopleModel{
	public function getData(){
		$sql = "SELECT * FROM people";
		$db = mysqli_connect('127.0.0.1','root','root','mmt');
		$result = $db->query($sql);
		return $result;
	}
<<<<<<< HEAD

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

=======
>>>>>>> 8f51f2d944f4b0f9ddb89d1a84f9422cfd88e196
}