<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php session_start();?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style>
.table input{
	background-color:;
	border-color:#CC6699;
}
.table input:hover{
	background-color:#999999;
	height:20px;
}
.table td{
	padding-top:10px;
	padding-left:10px;
}
.tr1{
	}
.table{
	padding-left:50px;
	padding-top:20px;
	padding-right:50px;
	}
#submit:hover{
	color:#C6C;
	height:100px;
	width:60px;
	}
</style>
</head>
<body bgcolor="#CCCCCC" style="color:#669 ">
	<table class="table">
    
	<form action="Online_shoping_account.php" method="post" enctype="all">
    <legend>Log In</legend>
   
    <tr class="tr1">
    	<td>Name </td>
        <td> :</td>
    	<td><input type="text" id="name" name="name"/> </td>
    </tr>
	
	<tr class="tr1">
    	<td>Account </td>
        <td> :</td>
    	<td><input type="text" id="accaunt" name="accaunt" /> </td>
    </tr>
    <tr class="tr2">
    	<td> </td>
        <td> </td>
    	<td><input id="submit" type="submit" value="Log in" style="height:20px; width:100px"/> </td>
    </tr>
	</form>
    </table>

</body>
</html>

<?php 
if(isset($_POST[]))
@$name=$_POST['name'];
@$accaunt=$_POST['accaunt'];

$_SESSION['name']=$name; 
$_SESSION['accaunt']=$accaunt;
?>
