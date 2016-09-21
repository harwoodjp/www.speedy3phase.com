<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

<meta http-equiv="content-type" content="text/html;charset=utf-8">

<title>Email Us</title>

<script type="text/javascript">

function hgsubmit()

{

if (/\S+/.test(document.hgmailer.name.value) == false) alert ("Please provide your name.");

else if (/^\S+@[a-z0-9_.-]+\.[a-z]{2,6}$/i.test(document.hgmailer.email.value) == false) alert ("A valid email address is required.");

 else if (/\S+/.test(document.hgmailer.comment.value) == false) alert ("Your email content is needed.");

  else {

       document.hgmailer.submit();

       alert ('Thank you!\nYour email is sent.');

       }

}

</script>

<style type="text/css">

.center {

	text-align: center;

}

.center {

	text-align: center;

}

.font {

	font-family: Verdana, Geneva, sans-serif;

}

.header {

	text-align: center;

}

.style1 {

	color: #FFFFFF;

	font-weight: bold;

	font-family: Verdana, Arial, Helvetica, sans-serif;

}

</style>

</head>

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<p class="header"><img src="images/emailheader.png" width="977" height="78" class="center"></p>

<!-- Save for Web Slices (fastquote-micrometer.psd) -->

<table width="977" height="480" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">

	<tr>

		<td colspan="4">

			<img src="images/fastquote-micrometer_01.jpg" width="977" height="41" alt=""></td>

	</tr>

	<tr>

		<td rowspan="3">

			<img src="images/fastquote-micrometer_02.png" width="157" height="439" alt=""></td>

		<td rowspan="2">

		  <img src="images/fastquote-micrometer_03.jpg" width="121" height="401" alt="Phase Converter Micrometer"></td>

		<td><table width="387" height ="51" border="0" cellspacing="0" cellpadding="0" background="images/fastquote-micrometer_04.jpg">

		  <tr>

		    <td align="center" valign="middle" class="micrometer style1">Our Phase Converters are Precision Tuned</td>

	      </tr>

	    </table></td>

		<td rowspan="2">

			<img src="images/fastquote-micrometer_05.jpg" width="312" height="401" alt=""></td>

	</tr>

	<tr>

		<td><table width="387" height="350" border="0" align="center" cellpadding="0" cellspacing="0" background="images/fastquote-micrometer_06.jpg">

		  <tr>

		    <td align="center" valign="bottom">

            <form action="http://www.speedy3phase.com/cgi-sys/formmail.pl" method="post" name="hgmailer" class="center">

  <p>

    <input type="hidden" name="recipient" value="connect@speedy3phase.com">

  <input type="hidden" name="subject" value="Contact Us Email">

  <span class="font"><strong><img src="images/fastquote_name.png" width="52" height="21" alt="Name"></strong>

  <input type="text" name="name" size="30" value="">

  <br>

  </span><span class="font"><br>

    <strong class="font"><img src="images/fastquote_email.png" width="52" height="21" alt="Email"></strong>

    <input type="text" name="email" size="30" value="">

    <br>

    </span><br>

    <textarea name="comment" cols="41" rows="5"></textarea>

    <br>

    <input type="image" name="Submit" src="images/fastquote_button.png" onClick="hgsubmit();">

    <input type="hidden" name="redirect" value="http://www.speedy3phase.com/thankyou.php">

  </p>

</form>

            </td>

	      </tr>

	    </table></td>

	</tr>

	<tr>

		<td colspan="3">

			<img src="images/fastquote-micrometer_07.jpg" width="820" height="38" alt=""></td>

	</tr>

</table>

<!-- End Save for Web Slices -->

</body>

</html>