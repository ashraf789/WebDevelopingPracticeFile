<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Local Newspaper </title>
<link href="style.css" rel="stylesheet" type="text/css" media="all"  />

<!-- Script by hscripts.com -->
<script type="text/javascript">
var aa = new Array("Select_your_division","Barisal","Chittagong","Dhaka","Khulna","Rajshahi","Rangpur","Sylhet");

Select_your_division = new Array("No_Select_your_division");

Barisal = new Array("Barguna","Barisal","Bhola","Jhalokati","Patuakhali","Pirojpur");
Chittagong = new Array("Bandarban","Brahmanbaria","Chandpur","Chittagong","Comilla","Cox's Bazar","Feni","Khagrachhari","Lakshmipur","Noakhali","Rangamati");
Dhaka = new Array("Dhaka","Faridpur","Gazipur","Gopalganj","Jamalpur","Kishoreganj","Madaripur","Manikganj","Munshiganj","Mymensingh","Narayanganj","Narsingdi","Netrakona","Rajbari","Shariatpur","Sherpur","Tangail");
Khulna = new Array("Bagerhat ","Chuadanga","Jessore ","Jhenaidah ","Khulna ","Kushtia","Magura ","Meherpur","Narail","Satkhira");
Rajshahi = new Array("Bogra ","Joypurhat","Naogaon ","Natore ","Chapainawabganj","Pabna","Rajshahi","Sirajganj");
Rangpur = new Array("Dinajpur ","Gaibandha","Kurigram","Lalmonirhat ","Nilphamari","Panchagarh","Rangpur","Thakurgaon");
Sylhet = new Array("Habiganj","Moulvibazar","Sunamganj","Sylhet");

function changeval()
{
var val1 = document.sform.division_name.value;
var optionArray = eval(val1);
for(var df=0; df<optionArray.length; df++)
{
var ss = document.sform.district_name;
ss.options.length = 0;
for(var ff=0; ff<optionArray.length; ff++)
{
var val = optionArray[ff];
ss.options[ff] = new Option(val,val);
}
}
}
</script>


</head>

<body>
  <fieldset style="width:600px; height:auto; margin:0 auto; padding-top:10px; margin-top:20px">
  <legend style="font-size:22px; color:#CC3366" align="center">Curriculam Vitae</legend>
  <form action="local_news_insert.php" method="post" enctype="multipart/form-data" name="sform" >
   <table>
      <tr id="news_row">
       <td id="news_font">Division Name</td>
       <td>:</td>
       <td>
           <select name="division_name" onchange=changeval() style="width:404px; height:30px;;">
				<script type="text/javascript">
                for(var dd=0; dd<aa.length; dd++)
                {
                document.write("<option value=\""+aa[dd]+"\">"+aa[dd]+"</option>");
                }
            </script>
         </select>
       </td>
   </tr>
   
   
     <tr id="news_row" style="margin-top:20px">
       <td id="news_font">Disrtict Name</td>
       <td>:</td>
       <td>
         <select name="district_name" style="width:404px; height:30px; margin-top:5px;">
         </select>
       </td>
    </tr>
    
    
     <tr id="news_row">
       <td id="news_font">News Paper Name</td>
       <td>:</td>
       <td>
            <input type="text" name="news_papre_name" style="width:400px; height:30px; margin-top:5px;" />
       </td>
    </tr>
    
    
    
     <tr id="news_row">
       <td></td>
       <td></td>
       <td>
         <input type="submit" value="Save News" name="save_news_paper"  style="width:100px; height:30px; margin-top:20px; background-color:#ffffff; color:#000000"/>
       </td>
    </tr>


   
   
   </table>
  </form>
  </fieldset>
    
</body>
</html>







