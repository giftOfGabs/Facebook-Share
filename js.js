 //Function to display different messages based on the selection the user makes whether it's a Convio donation share or not.
 function show_mssg(q){
	 if(q=="y"){
		 document.getElementById('mssg1').style.visibility = 'visible';
		 document.getElementById('mssg1b').style.visibility = 'visible';
		 document.getElementById('mssg2').style.visibility = 'hidden';
		 document.getElementById('mssg2b').style.visibility = 'hidden';
	 }else{
	     document.getElementById('mssg1').style.visibility = 'hidden';
		  document.getElementById('mssg1b').style.visibility = 'hidden';
		 document.getElementById('mssg2').style.visibility = 'visible';
		 document.getElementById('mssg2b').style.visibility = 'visible';
	 } 
  }