<?php
//single line comment
#single line comment
/* multiple line comment
*/

echo "<h1>I am here!</h1>";
$var = 10;
echo "<h1>value is $var</h1>";
echo '<h1>value is $var</h1>';
echo '<h1>value is '.$var.'</h1>';
// math operations
$var = 11 - 1;
$var2 = 5;
if($var == 10){
	echo 'value is 10 and var + var2 = '. $var + $var2;
}else{
	echo 'I don\'t know';
}
function abc(){
	global $var2; /*$GLOBALS['var2']*/
	echo '</br>this is a function call:'. $var2;
	$var2 = 20;
}
abc();

      echo "</br>this is", " another example";
echo "to check the datatype"; var_dump($var2);
$arr = array("volvo","lexus","tesla"); 
$arr[] = 12121;
$arr[] = 2222;$arr[] = 2222;$arr[] = 2222;$arr[] = 2222;$arr[] = 2222;$arr[] = 2222;
$arr[8] = 54258;
$i = 0;
$arr[$i]= 1548.05;
$arr2=array("first"=> "find me!");
$arr['second'][2]=$arr2;
$arr3=array("sdfd", 2, "abc"=>123);
$arr3["data"] = $arr;
echo '<pre>'; 
//echo $arr3["data"]["second"][2]["first"];
//print_r($arr3); echo '</pre>';
for($i=0;$i<10;$i++){
	echo $arr3[$i];
}
foreach($arr3 as $key=> $value){
	
}
//while
//do while
//for
//switch

include "header.php";

include "content.php";

include "footer.php";
?>
