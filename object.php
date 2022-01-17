<?php
class Student {
	function grade(){
		$this->res = "pass";
	}
}
$obj = new Student();

echo $obj->res;

?>