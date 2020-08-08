function signInUp(){
		document.querySelector('.cont').classList.toggle('s-signup');
		let x = document.querySelector('title');
		if(x.innerHTML == 'Sign Up')
		{
			x.innerHTML ='Sign In';
		}else{
			x.innerHTML = 'Sign Up';
		}
	
}
