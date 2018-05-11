document.getElementById('text').setCustomValidity("Sending");

function getText() {
		
	var $a =	document.getElementById('text').value;
	var $g =	document.getElementById('game').value;
		xhr = new XMLHttpRequest();
		xhr.open('POST' , 'inc/chatdb.php',true);
		xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
		xhr.send('chat='+$a+'&game='+$g);
		document.getElementById('text').value="";
		document.getElementById('text').focus();
	    xhr.onreadystatechange=function(){
			if (xhr.responseText){
				document.getElementById('chatzone').innerHTML=xhr.responseText;
									}
				}
					}
		

function setText(){
	var $g =	document.getElementById('game').value;

	xhr = new XMLHttpRequest();
	xhr.open('POST' , 'inc/chatFetch.php' , true);
	xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
	xhr.send('game='+$g);
	xhr.onreadystatechange = function(){
			document.getElementById('chatzone').innerHTML = xhr.responseText;
			$("#chatzone").scrollTop($("#chatzone")[0].scrollHeight);
			}
		
	}
	setInterval("setText()",2000);
	

setInterval("users()",3000);

	
	function users(){
	xhr1 = new XMLHttpRequest();
	var $g =	document.getElementById('game').value;
	xhr1.open('POST' , 'inc/userFetch.php' , true);
	xhr1.setRequestHeader('content-type','application/x-www-form-urlencoded');
	xhr1.send('game='+$g);
	xhr1.onreadystatechange = function(){
			document.getElementById('loginperson').innerHTML = xhr1.responseText;
			}
		
		
		}
