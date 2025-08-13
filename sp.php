<?php 
//#######[get]#######\\
$sizdahorg = $_GET [ "shomare" ] ; 
$i = 1;
while  ( $i <= 3) 
{
    //instagram: @sizdahorg\\
	$like = file_get_contents("http://apps.iseema.ir/regs/User/RegisterV2?mobileNumber=$sizdahorg&providerID=5&requestCode=4d3b7599-b43e-4a37-a8a4-b54d09470910");
	$i++;
}
	echo 'درخواست شما با موفقیت انجام شد <br> <a href="https://sizdahorg.ir">سازنده</a>'




// telegram: @tmsizdah \\ 
?>

