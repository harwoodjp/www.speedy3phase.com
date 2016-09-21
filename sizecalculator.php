<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Phase Converter Size Calculator</title>
<script type="text/javascript" >

function IsNumeric(strString)
   //  check for valid numeric strings	
{
   var strValidChars = "0123456789.";
   var strChar;
   var blnResult = true;

   if (strString.length == 0) return false;

   //  test strString consists of valid characters listed above
   for (i = 0; i < strString.length && blnResult == true; i++)
      {
      strChar = strString.charAt(i);
      if (strValidChars.indexOf(strChar) == -1)
         {
         	blnResult = false;
         }
      }
   return blnResult;
}

function Progress()
{
	var linkRM5 = "<a href='http://rotomastersllc.com/#order'>";     //Link for RM5
	var linkRM7 = "<a href='http://rotomastersllc.com/#order'>";    //Link for RM7.5
	var linkRM10 = "<a href='http://rotomastersllc.com/#order'>";   //Link for RM10
	var linkRM15 = "<a href='http://rotomastersllc.com/#order'>";   //Link for RM15
	var linkRM20 = "<a href='http://rotomastersllc.com/#order'>";   //Link for RM20
	var linkRM25 = "<a href='http://rotomastersllc.com/#order'>";   //Link for RM25
	var linkRM30 = "<a href='http://rotomastersllc.com/#order'>";   //Link for RM30
	var linkRM40 = "<a href='http://rotomastersllc.com/#order'>";	 //Link for RM40
	 
	var csize = document.getElementById("size").value;
	if (!IsNumeric(csize))
	{		
		alert("Only numbers allowed!");
		document.getElementById("size").focus();
		return false;
	}
	else
	{
		if (csize > 0 && csize<=2.5)
		{
			document.getElementById("msg").innerHTML =  "<img src='images/rm5.png' alt='RM 5 Rotomasters Rotary Phase Converter' /> <p></p> You will need a model RM 5 to run your machinery.<br>" + linkRM7 + "Click here</a> to order an RM 5." ;
		}
		else if (csize > 2.5 && csize<=3.75)
		{
			document.getElementById("msg").innerHTML =  "<img src='images/rm7.5.png' alt='RM 7.5 Rotomasters Rotary Phase Converter' /> <p></p> You will need a model RM 7.5 to run your machinery.<br>" + linkRM7 + "Click here</a> to order an RM 7.5." ;
		}
		else if (csize > 3.75 && csize<=5)
		{
			document.getElementById("msg").innerHTML =  "<img src='images/rm10.png' alt='RM 10 Rotomasters Rotary Phase Converter' /> <p></p> You will need a model RM 10 to run your machinery.<br>" + linkRM10 + "Click here</a> to an RM 10.";
		}
		else if (csize > 5 && csize<=7.5)
		{
			document.getElementById("msg").innerHTML =  "<img src='images/rm15.png' alt='RM 15 Rotomasters Rotary Phase Converter' /> <p></p> You will need a model RM 15 to run your machinery.<br>" + linkRM15 + "Click here</a> to order an RM 15.";
		}
		else if (csize > 7.5 && csize<=10)
		{
			document.getElementById("msg").innerHTML =  "<img src='images/rm20.png' alt='RM 20 Rotomasters Rotary Phase Converter' /> <p></p> You will need a model RM 20 to run your machinery.<br>" + linkRM20 + "Click here</a> to order an RM 20." ;
		}
		else if (csize > 10 && csize<=12.5)
		{
			document.getElementById("msg").innerHTML =  "<img src='images/rm25.png' alt='RM 25 Rotomasters Rotary Phase Converter' /> <p></p> You will need a model RM 25 to run your machinery.<br>" + linkRM25 + "Click here</a> to order an RM 25." ;
		}
		else if (csize > 12.5 && csize<=15)
		{
			document.getElementById("msg").innerHTML =  "<img src='images/rm30.png' alt='RM 30 Rotomasters Rotary Phase Converter' /> <p></p> You will need a model RM 30 to run your machinery.<br>" + linkRM30 + "Click here</a> to order an RM 30." ;
		}
		else if (csize > 15 && csize<=20)
		{
			document.getElementById("msg").innerHTML =  "<img src='images/rm40.png' alt='RM 40 Rotomasters Rotary Phase Converter' /> <p></p> You will need a model RM 40 to run your machinery.<br>" + linkRM40 + "Click here</a> to order an RM 40." ;
		}
		else if (csize > 20)
		{
			document.getElementById("msg").innerHTML =  "<img src='images/rm.png' alt='Rotomasters Rotary Phase Converter' /> <p></p> You will need a " + csize*2 +" HP phase converter to run your machinery.<br>Please call us at 800-336-1371 for current pricing." ;
		}
	}

	return false;
}
</script>
<style type="text/css">
.font {
	font-family: Verdana, Geneva, sans-serif;
}
.hp {
	font-size: 48px;
	font-family: Verdana, Geneva, sans-serif;
}
</style>
</head>

<body align="center">
<h1 style="font-family:Myriad Pro; font-size:40pt; text-align: center; color: #585858;">Sizing a Phase Converter</h1>
<h2 style="font-family:Myriad Pro; font-size:24pt; text-align: center; color: #585858;">For Standard Machines</h2>
<div align="center">
<div align="center" style="width: 650px; height: 550px; border: 2px solid #9b9b9b; background-color: #e3e3e3;">
	<div style="text-align:center; font-family:Myriad Pro; font-size:13pt; margin-top: 20px;">
    <span class="font">What's the largest horsepower of all the machines that you'll be running? Type the answer in the box below &amp; then hit calculate.
    </span><br/>
    <br />
    </div>
    <form  action="#" name="calculate" method="post" OnSubmit="return Progress(this)">
    	<input type="text" id="size" maxlength="4" size="3" style="font-family:Myriad Pro; font-size:30pt; text-align: center;"/>
<span class="hp">HP</span><br>
        <br>
        <input name="button" type="image" title="Click to calculate" src="images/calculatebutton.png" alt="Calculate what size phase converter you'll need." align="center">
    </form>    
    <div id="msg" style="text-align:center; font-family:Myriad Pro; font-size:13pt; font-weight:bold; margin-top: 20px;"></div>
</div>
</div>
</body>
</html>