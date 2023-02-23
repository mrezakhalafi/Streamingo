function form_validation() {
	var email = $('#email').val();
	var password = $('#password').val();

	localStorage.setItem("email", email);

	if (email == "" && password == "") {
		$('#email_error').html('<div class="text-danger">Email harus diisi.</div>');
		$('#password_error').html('<div class="text-danger">Password harus diisi.</div>');
		$('#btn-submit').attr('type', 'button');
	} else if (email == "") {
		$('#email_error').html('<div class="text-danger">Email harus diisi.</div>');
		$('#password_error').html('<div></div>');
		$('#btn-submit').attr('type', 'button');
	} else if (password == "") {
		$('#password_error').html('<div class="text-danger">Password harus diisi.</div>');
		$('#email_error').html('<div></div>');
		$('#btn-submit').attr('type', 'button');
	} else {
		$('#btn-submit').attr('type', 'submit');
	}
};
