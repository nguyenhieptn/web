<?php
class PeopleModel{
	public function getData(){
		$sql = "SELECT * FROM people";
		$db = mysqli_connect('127.0.0.1','root','root','mmt');
		$result = $db->query($sql);
		return $result;
	}
}