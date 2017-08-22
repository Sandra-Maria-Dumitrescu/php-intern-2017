//TODO:
/*
-> cand apasam butonul de addProduct:
	# ia continutul campului product_name
		valideaza continutul
	# ia continutul campului decription
		valideaza continutul
	# valideaza formatul img -> .jpg
	if ok show succes
	else show error
		*/

//jQuery ia documentul, cand este gata ruleaza functia
$(document).ready(function() {

	//jQuery ia id-ul, apeleaza functia submit de ("ceva", unde "ceva" este o functie)
	$('#formProducts').submit(function(event){
		var product_name = $(this).find('#name').val();
		var decription  = $(this).find('#decription').val();
		var img  = $(this).find('#imgFile').val().slice(-3);		


		if(validateFields(product_name, decription) && (img === 'jpg')){
			//alert("date corecte");
			//$('#formProducts').attr("action", "action=\"db/addProduct.php\"");			
		} else{ // datele sunt incorecte
			alert("date invalide!");
			return false;
		}
	});
});

function validateFields(product_name, decription) {
	var lowerCase = new RegExp('[a-z]');
	var upperCase = new RegExp('[A-Z]');
	
	if((product_name.match(upperCase) || product_name.match(lowerCase))&&(decription.match(upperCase) || decription.match(lowerCase))) {
		return true;
	}else{
		return false
	}
}