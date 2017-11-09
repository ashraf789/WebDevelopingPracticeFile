<?php 
session_start();
?>
<?php
echo $_SESSION['name']; 
echo $_SESSION['accaunt']; 
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
<script>
function account(){
	var accaunt=document.getElementById('accaunt').value;
	var card_amount=document.getElementById('card_amount').value;
	var price=document.getElementById('price').value;
	var discount=document.getElementById('discount').value;
	
	var discount_persent=parseInt(discount)/parseInt(100)*parseInt(price);
	var result=parseInt(price)-parseInt(discount_persent);
     var payable=document.getElementById('payable').value=result;
	 
	var net_ammount=parseInt(card_amount)-parseInt(payable);
	document.getElementById('net_ammount').value=net_ammount;
	
	
}

function alert_f(){
    var net_ammount=document.getElementById('net_ammount').value;
    if(net_ammount==''){
	alert("You Have no enough money");
	}
	else{
	alert(  net_ammount +"You Successfully buy it");
	}
}
</script>
</head>
<body bgcolor="#CCCCCC" style="color:#669 ">
	<table class="table">
    
	<form action="#" method="post" enctype="all" onsubmit="alert_f()">
    <legend>Buy Histori</legend>
   
    <tr class="tr1">
    	<td>Credit card Account </td>
        <td> :</td>
    	<td><input type="text" id="accaunt" /> </td>
    </tr>
    <tr class="tr2">
    	<td>Name </td>
        <td> :</td>
    	<td><input type="text" id="name" /> </td>
    </tr>
    <tr class="tr1">
    	<td>Credit Card Take Amount </td>
        <td> :</td>
    	<td><input type="text" id="card_amount" /> </td>
    </tr>
    <tr class="tr2">
    	<td>Shoping Amount </td>
        <td> :</td>
    	<td><input type="text" id="price" /> </td>
    </tr>
    <tr class="tr1">
    	<td>Discount(%) </td>
        <td> :</td>
    	<td><input type="text" id="discount" onKeyUp="account()"/> </td>
    </tr>
    <tr class="tr2">
    	<td>Payable Amount </td>
        <td> :</td>
    	<td><input type="text" id="payable" /> </td>
    </tr>
    <tr class="tr1">
    	<td>Net Amount </td>
        <td> :</td>
    	<td><input type="text" id="net_ammount" /> </td>
    </tr>
    <tr class="tr2">
    	<td> </td>
        <td> </td>
    	<td><input id="submit" type="submit" value="BUY" style="height:20px; width:100px"/> </td>
    </tr>
	</form>
    </table>

</body>
</html>
