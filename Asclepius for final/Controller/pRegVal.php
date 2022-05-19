<script>
	  function validate()
	  {
		 var username=document.getElementById('sname');
		 var email=document.getElementById('email');
		 var phone=document.getElementById('phonenumber');
		 var password=document.getElementById('pass');
		 var cpassword=document.getElementById('cpass');
		 if(username.value=="" || email.value=""|| phone.value="" || password.value=="" || cpassword.value="")
		 {
			 alert('Fill up all the field');
			 return false;
		 }
		 else
			 return true;
	  }
	</script>