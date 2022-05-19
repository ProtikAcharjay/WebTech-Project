<script>
                function validate()
                    {
                        var s=document.getElementById("sname");
                        var e=document.getElementById("email");
                        var p=document.getElementById("phonenumber");
                        var ps=document.getElementById("pass");
                        var cps=document.getElementById("cpass");
                        if(s.value.trim()=="" || e.value="" || p.value="" || ps.value=="" || cps.value="")
                        {
                            alert('Fill up all the field');
                            return false;
                        }
                        else
                            return true;
                    }
    
	</script>