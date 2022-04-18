const form = document.getElementById('form');
const username = document.getElementById('username');
const password = document.getElementById('password');
const passwordTwo = document.getElementById('passwordTwo');


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

function validation() {

    // j'ai storer dans usernameValue varaible la valeur de l'input username sans l'espace à l'aide de la fonction trim()
    const usernameValue = username.value.trim();
	const passwordValue = password.value.trim();
	const passwordValueTwo = passwordTwo.value.trim();

	

	if(usernameValue === '') {
		validationErreur(username, 'Entrez une valeur S.V.P.');
		return false;
	} else {
		validationReussi(username);
	}
	
	if(passwordValue === '') {
		validationErreur(password, 'Password ne peut pas être vide');
		return false;

	} else {
		validationReussi(password);
	}

	if(passwordValueTwo === '') {
		validationErreur(passwordTwo, 'Password ne peut pas être vide');
		return false;

	} else {
		validationReussi(passwordTwo);
	}

	if(passwordValueTwo !== passwordValue) {
		validationErreur(passwordTwo, 'Password ne pas identique ');
		return false;

} else {
	validationReussi(passwordTwo);
}

}




















