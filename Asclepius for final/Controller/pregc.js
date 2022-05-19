 const pf=document.getElementById("pregform");
 var s=document.getElementById("sname");
 var e=document.getElementById("email");
 var p=document.getElementById("phonenumber");
 var ps=document.getElementById("pass");
 var cps=document.getElementById("cpass");

 pf.addEventListener('submit', (e) => {
	e.preventDefault();
	validate();
});
function validate()
    {
       
       
        if(s.value.trim()=="" || e.value=="" || p.value=="" || ps.value=="" || cps.value=="")
        {
            alert('Fill up all the field');
            return false;
        }
        if(ps.value!=cps.value){
                alert('Password Doesnt Match');
            return false;
            }
        else
            return true;
    }

