function validateContactForm() {

}

function validateEmail(email){
	var emailregex = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/i);
	if (!emailregex.test(email))
	{
		return false;
	}
	return true;
}