const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');



function validationErreur(input, message) {
	const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'input-control error';
	small.innerText = message;
}



function validationReussi(input) {
	const formControl = input.parentElement;
	formControl.className = 'input-control success';
}
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}


function validation() {

	//  addEventLister
	// form.addEventListener('submit', e => {
	// 	e.preventDefault();
	// 	validation();
	// });

    // j'ai storer dans usernameValue varaible la valeur de l'input username sans l'espace à l'aide de la fonction trim()
    const usernameValue = username.value.trim();
	const emailValue = email.value.trim();
	const passwordValue = password.value.trim();
	

	if(usernameValue === '') {
		validationErreur(username, 'Entrez une valeur S.V.P.');
		return false;
	} else {
		validationReussi(username);
	}
	
	if(emailValue === '') {
		validationErreur(email, 'Email ne peut pas être vide');
		return false;
	} else if (!isEmail(emailValue)) {
		validationErreur(email, 'Email invalide');
		return false;

	} else {
		validationReussi(email);
	}
	
	if(passwordValue === '') {
		validationErreur(password, 'Password ne peut pas être vide');
		return false;

	} else {
		validationReussi(password);
	}
	

}


























