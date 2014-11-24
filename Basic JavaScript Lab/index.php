<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8"> 
<title>David's Lab</title>

</head>
<script>
	// function validateForm(number)
	// {

	// 	var error = "";
	// 	 alert("here");
	//     var stripped = number.value.replace(/[\(\)\.\-\ ]/g, '');     

	// 	   if (number.value == "") {
	// 	        error = "You didn't enter a phone number.\n";
	// 	    } else if (isNaN(parseInt(stripped))) {
	// 	        error = "The phone number contains illegal characters.\n";
	// 	    } else if (!(stripped.length == 10)) {
	// 	        error = "The phone number is the wrong length. Make sure you included an area code.\n";
	// 	    } 
	//     return error;
	// }
	function phoneNumber(input)  
	{  
		
		var req = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;  
		if(input.value.match(req))  
		{  
			alert("Phone Number Validated.")
			return true;          
		}  
		else  
		{  
			alert("Please enter a valid Phone Number.");  
			return false;  
		}  
	}  

</script>
<body>

<b>Basic JavaScript Programming</b>

<form id="contact_form" name="validate" method="post" onsubmit="phoneNumber(document.validate.number);" action="#">
  Phone Number: <input type="text" id="number" name="number"><br>
  <input type="submit" value="Submit"> 
</form>

</body>

</html>