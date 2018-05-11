// Signup validations
//document.getElementById("fname").addEventListener("blur", fname, true);
//document.getElementById("lname").addEventListener("blur", lname, true);
document.getElementById("email").addEventListener("blur", email, true);
document.getElementById("password").addEventListener("blur", password, true);
document.getElementById("cpassword").addEventListener("blur", cpassword, true);
document.getElementById("uname").addEventListener("blur", uname, true);
document.getElementById("agree").addEventListener("click", agree, true);


function agree(){
	if(document.getElementById("agree").checked){
	$('#button').removeClass('disabled');
	
	}
	else{
		$('#button').addClass('disabled');
		}
	}

function fname(){
	var a =	document.getElementById('fname').value;
	if(a.length < 3){
		document.getElementById('efname').innerHTML ="Name should be more than 3 characters";
		}
	else{
		  document.getElementById('efname').innerHTML ="";
		  return 1;
		}
	}

function lname(){
	var a =	document.getElementById('lname').value;
	if(a.length < 3){
		document.getElementById('elname').innerHTML ="Name should be more than 3 characters";
		}
	else{
		  document.getElementById('elname').innerHTML ="";
		  return 1;
		}
	}

function password(){
	var a =	document.getElementById('password').value;
	if(a.length < 8){
		document.getElementById('epass').innerHTML ="Password should be more than 8 characters";
		}
	else{
		  document.getElementById('epass').innerHTML ="";
		  return 1;
		}
	}

function cpassword(){
	var a =	document.getElementById('password').value;
	var b = document.getElementById('cpassword').value;
	
		if (a == b ){
			document.getElementById('ecpass').innerHTML = "<div class='text-success'>Password Matched</div>";
			return 1;
			}
			else {
				
				document.getElementById('ecpass').innerHTML = "<div class='text-danger'>Password doesnot matched</div>";
				}
		}


function uname(){
            var e=document.getElementById('uname').value;
			var email  = new XMLHttpRequest();
			email.open('GET' , 'scripts/test1.php?uname='+e, true);
			email.send();
			email.onreadystatechange = function(){
				if (email.readyState == 4 && email.status == 200)
				{
					document.getElementById('euname').innerHTML = email.responseText;
					}
				
				}
}
	
function email(){
            var e=document.getElementById('email').value;
			var email  = new XMLHttpRequest();
			email.open('GET' , 'scripts/test2.php?email='+e, true);
			email.send();
			email.onreadystatechange = function(){
				if (email.readyState == 4 && email.status == 200)
				{
					document.getElementById('eemail').innerHTML = email.responseText;
					}
				
				}
}
