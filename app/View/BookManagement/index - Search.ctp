<?php
	
	echo $this->Html->link("Log In", array('controller' => 'Users','action'=> 'login', ''), array( 'class' => 'login_button',"id"=>"login"));
	//. $this->Html->link("Sign Up", array('controller' => 'Users','action'=> 'login', ''), array( 'class' => 'signup_button',"id"=>"signup"));

 ?>
<script>
function findmatch(){
	var text=document.search.search_text.value;
	
	if(text==''){
		document.getElementById('results').innerHTML='';
		return;
	}
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		}else{
			xmlhttp = ActiveXObject('Microsoft.XMLHTTP');			
		}
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
				var results=JSON.parse(xmlhttp.responseText);
				str='';
				for(var i=0;i<results.length;i++){
					str+=results[i]+"<br/>";
				}
				document.getElementById('results').innerHTML = str;
  				}
			}
		xmlhttp.open('GET','/ajax/BookManagement/search/'+text,true);
		xmlhttp.send();
		}
</script>
<h2>Search By</h2>
<form id="search" name="search" >
	Type a name: <br><br>
    <input type="text" name="search_text" onKeyUp="findmatch();" />
</form>
<div id="results"></div>
