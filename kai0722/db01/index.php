<?php
include "base.php";
$student = new DB('students');

// add data
$data = [
	'name' => 'changeName',
	'mobile' => 'changeMobile',
];

// update data
$data = [
	'name' => 'changeName',
	'mobile' => 'changeMobile',
	'id' => 9
];
// $student->store($data);

// $id = 9;
// $student->update($data,$id);

$id = 2 ;
$student->del($id);

$data = $student->getAll();
dd($data);

?>
