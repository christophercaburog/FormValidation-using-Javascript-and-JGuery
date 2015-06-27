<?php
	if(isset($_POST['name'])) {

		$name = $_POST['name'];
			echo "your name is ".$name;
	}
?>

<html>

<head>

</head>

<body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script>
	
	$(document).ready(


			function() {

				$("#enter").click(function(){

					if(!validate("name")){

						return false;

					}

					$("form#form1").submit();
					
				});
			}


		);

	function validate (id){

		if($("#"+id).val()==""){

			alert("error po");
			return false;

		}

		else {

			return true;
		}
	}

		

</script>



<form action="#" id="form1" method="post">

	<input name="name" type="text" id="name">

	<input name="uname" type="text" id="uname">

	<button type="button" id="enter">Enter</button>

</form>



</body>
</html>