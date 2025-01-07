// JavaScript Document
var elFirstName = document.getElementById('firstName'); // Declare var to hold first name div
var elLastName = document.getElementById('lastName'); // Declare var to hold last name div
var elPhoneNumber = document.getElementById('phoneNumber');
var elUsername = document.getElementById('username');
var elPassword = document.getElementById('password');
var elEmail = document.getElementById('email'); // Add email variable

function checkData(minLength, inputGroup, inputStatus, inputEl) {
	var elStatus = document.getElementById(inputStatus);
	var elGroup = document.getElementById(inputGroup);
	var elInput = document.getElementById(inputEl);

	if (elInput.value.length < minLength) { // If input is less than minLength
		elStatus.innerHTML = inputEl.toUpperCase() + ' must be ' + minLength + ' characters or more';
		elGroup.classList.add('has-error');
		elGroup.classList.remove('has-success');
	} else { // Else, display success message
		elStatus.innerHTML = '';
		elGroup.classList.remove('has-error');
		elGroup.classList.add('has-success');
	}
}

function validateEmail(email) {
	var validRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return email.value.match(validRegex) !== null; // Return true if matches, false if not
}

elEmail.addEventListener('blur', function() {
	var elEmailStatus = document.getElementById('emailStatus');
	var elEmailGroup = document.getElementById('emailGroup');

	if (validateEmail(elEmail)) { // If email is valid
		elEmailStatus.innerHTML = ''; // Clear any error message
		elEmailGroup.classList.remove('has-error');
		elEmailGroup.classList.add('has-success');
	} else { // If email is invalid
		elEmailStatus.innerHTML = 'Invalid email format';
		elEmailGroup.classList.add('has-error');
		elEmailGroup.classList.remove('has-success');
	}
}, false);

// Event listeners for blur events
elFirstName.addEventListener('blur', function() {
	checkData(2, 'firstNameGroup', 'firstNameStatus', 'firstName');
}, false);
elLastName.addEventListener('blur', function() {
	checkData(3, 'lastNameGroup', 'lastNameStatus', 'lastName');
}, false);
elPhoneNumber.addEventListener('blur', function() {
	checkData(10, 'phoneNumberGroup', 'phoneNumberStatus', 'phoneNumber');
}, false);
elUsername.addEventListener('blur', function() {
	checkData(3, 'usernameGroup', 'usernameStatus', 'username');
}, false);
elPassword.addEventListener('blur', function() {
	checkData(8, 'passwordGroup', 'passwordStatus', 'password');
}, false);
elEmail.addEventListener('blur', function() {
	validateEmail(elEmail);
}, false);