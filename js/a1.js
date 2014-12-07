function prepareForm() {
		
		var formsetup = document.getElementsByTagName('form');
		
		formsetup[0].addEventListener('submit',function(e) {
			
			document.getElementById('response').innerHTML = "";
			e.preventDefault();
			
			var thisString = '';
			var allFormElements = this.elements;

				for(var i=0; i<allFormElements.length; i++) {
					if(allFormElements[i].value) {
						
						var key = allFormElements[i].getAttribute('name');
						var value = escape(allFormElements[i].value);
						thisString += key + '=' + value + '&';

					} 
				}
			
			validation();			
			setupRequest(thisString);


		});

}

function validation(){
 
	var inputfields = document.getElementsByTagName('input');

	for(i = 0; i<inputfields.length; i++){
 		if(inputfields[i].value.length == 0){
 		
 			inputfields[i].style.backgroundColor = '#FF0000';
 			document.getElementById('submit').style.backgroundColor ='#666666';

 		}
 
 		else { 
 		
 			inputfields[i].style.backgroundColor = '#FFFFFF';
 			document.getElementById('submit').style.backgroundColor ='#666666';
 		}
 	}
}

function setupRequest(thisString){
	var xhr = new XMLHttpRequest();

	if(xhr) {
	
	    xhr.onreadystatechange = function() {
			
			displayResponse(xhr);
		}
		
		xhr.open('POST', 'returnMadlib.php', true);
		xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xhr.send(thisString);
	}
}
			
function displayResponse(xhr) {
				
	if(xhr.readyState == 4) {

		if((xhr.status == 200) || (xhr.status == 304)) {
			
			var p = document.getElementById('response');
				
				p.innerHTML = xhr.responseText;
		}
	}
}

window.onload = prepareForm;