<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<title>Test</title>
<head>
<meta charset="UTF-8">
<style>
body{background-color:#EFF4B7}
.countDiv{
    margin-left: 30px;
    position: fixed;
    }
	
.icoDiv{ background: none repeat scroll 0 0 #fff;
   width: 36px;
   cursor:pointer}
	
.innerDiv{  border: 1px solid grey;
   height: 200px;
    margin: 5px;
    overflow-x: hidden;
    overflow-y: scroll;
    padding: 2px;
    width: 400px;
    z-index: 100;
	display:none}
	
div.countDiv p
  {
/* background-color: #FFFFFF;*/
    color: #000000;
    font-size: 20px;
    font-weight: bold;
    height: 20px;
    margin: -5px 0 0 -7px;
    width: 20px;
  }
 .cls{background-color: #81D6F4;line-height: 30px;cursor:pointer}
 .cls1{background-color: #CBE9F4;line-height: 30px;cursor:pointer}
 .dummyTxt{margin:5px;text-align: center;}
 .mainDiv{margin: 20px 8px;}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">
function callfunc()
{
	$('.innerDiv').toggle('fadeOut');
	$('.countDiv p').text('');
	//$('.countDiv p').css('background-color','#EFF4B7');
}
function callAler()
{
	alert("we were unable to send you anything today. Click here to fix the problem");
}
</script>

</head>
<body>
<div class="mainDiv">
	<div class="countDiv">
		<p>20</p>
	</div>
	<div class="icoDiv" onclick="javascript:callfunc()">
		<img src="small.png" width="40px" height="40px">
	</div>
	<div class="innerDiv">
		<div class="dummyTxt"> we have received 20 discs from you. </div>
		
		<?php
			for($i=1; $i<=20;$i++)
			{
				if($i%2==0)
					$clr="cls";
				else
					$clr="cls1";
				echo "<div class='".$clr."' onclick='javascript:callAler()'>Hi this the notification for you ".$i." </div>";
			}
		?>
	</div>
</div>
</body>
</html>