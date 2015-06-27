# FormValidation-using-Javascript-and-JQuery

This method of form validation is good for <a href = "http://getbootstrap.com/">Bootstrap</a> when you are using without loading a page you can get an idea for this 

<strong><script type="text/javascript" src="js/jquery.min.js"></script></strong> you must get the source 


#this is for the code of javascript and jquery

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

			alert("error");
			return false;

		}

		else {

			return true;
		}
	}

		

</script>



#html

<form action="#" id="form1" method="post">

	<input name="name" type="text" id="name">

	<input name="uname" type="text" id="uname">

	<button type="button" id="enter">Enter</button>

</form>



