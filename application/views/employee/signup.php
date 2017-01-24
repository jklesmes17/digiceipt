<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script>
		var obj = {
			'SEI_Username': "frank",
			'SEI_Password': "frank123",
			'SEI_Name': "Franklin Embate",
			'SEI_Address': "1611-n Andres Abellana",
			'SEI_Birthdate': "March 1, 1994",
			'SEI_Religion': "Catholic",
			'SEI_Civil_status': "Single",
			'SEI_Position': "Hacker",
			'SEI_Date_created': "",
			'SEI_Date_terminated': ""
		};

		$.ajax({
			url: 'http://localhost/digiceipt_420/index.php/employee',
			type: 'POST',
			data: obj,
			beforeSend: function() {
				console.log("test")
			}
		})


	</script>
</body>
</html>