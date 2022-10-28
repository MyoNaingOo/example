function daf(){
	let body=document.body;
	let icon=document.getElementById('dlicon');
	icon.classList.toggle("fa-moon");
	icon.classList.toggle("fa-sun");
   body.classList.toggle("darkmode");

   let dicon=document.getElementById('ldicon');
   dicon.classList.toggle("fa-moon");
   dicon.classList.toggle("fa-sun");
   
}




window.addEventListener('scroll', reveal);

function reveal(){
	var reveals = document.querySelectorAll('.reveal');
	
	for(var i = 0; i < reveals.length; i++){
		
		var windowheight = window.innerHeight;
		var revealtop = reveals[i].getBoundingClientRect().top;
		
		var revealpoint = 5;
		if(revealtop < windowheight - revealpoint){
			reveals[i].classList.add('active');
		}
		else{
			reveals[i].classList.remove('active');
		}
	}
}





