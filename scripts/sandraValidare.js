//TODO:
/*
-> cand apasam butonul de login:
	# ia continutul campului email
		valideaza continutul
	#ia continutul campului parola
		valideaza continutul
	if info ok show succes
	else show error
*/

//jQuery ia-mi documentul, cand este gata ruleaza-mi functia
$(document).ready(function() {

	//jQuery ia-mi id-ul, apeleaza functia submit de (ceva, unde ceva este o functie)
	$('#formId').submit(function(event){
		var email = $(this).find('#email').val();
		var password  = $(this).find('#parola').val();

		if(isValid(email, password)){
			alert("datele introduse sunt corecte. \n Email: " + email + "\n Parola: " + password);
		} else{
			alert("date invalide!");
		}
	});


}); // end document.ready

	function isValid(email, password) {
		
		var lowerCase = new RegExp('[a-z]');
		var upperCase = new RegExp('[A-Z]');
		var numbers   = new RegExp('[0-9]');
		
		var validCondition = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

	//	ia valid condition si o aplica(testeaza) la email(adica: indeplineste e-mail conditiile din validCondition ?)
		if (validCondition.test(email)){ 
			if(password.match(upperCase) && password.match(lowerCase) && password.match(numbers)) {
				return true;
			}
		}
	} // end isValid