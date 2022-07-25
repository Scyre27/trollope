let registerPage = document.querySelector("#registerPage");
if (registerPage) {
	let errorMessage = registerPage.querySelector(".err");
	let inputs = registerPage.querySelectorAll("input");

	// Processing and validating registration form
	let registrationForm = registerPage.querySelector("form");

	registrationForm.addEventListener("submit", (e) => {
		e.preventDefault();

		let formData = new FormData(registrationForm);
		let firstname = formData.get("fname");
		let lastname = formData.get("sname");
		let email = formData.get("email");
		let password = formData.get("password");
		let pwdRepeat = formData.get("confirm_password");
		let profile = formData.get("profile");

		if (!pwdRepeat || !password || !lastname || !email || !firstname) {
			errorMessage.style.display = "block";
			errorMessage.textContent = "Please fill in all fields";
			return;
		}
		if (!/^[A-Za-z]+$/.test(firstname) || !/^[A-Za-z]+$/.test(lastname)) {
			errorMessage.style.display = "block";
			errorMessage.textContent = "Please enter valid name format";
			return;
		}
		if (!/^[A-Za-z][\w\.-_]+[\w]@[\w-]+\.[\w]{2,}$/.test(email)) {
			errorMessage.style.display = "block";
			errorMessage.textContent = "Please enter valid email address";
			return;
		}
		if (pwdRepeat != password) {
			errorMessage.style.display = "block";
			errorMessage.textContent = "Passwords do not match";
			return;
		}
		if (password.length < 8) {
			errorMessage.style.display = "block";
			errorMessage.textContent = "Password must be longer than 8 characters";
			return;
		}
		registrationForm.submit();
	});

	// Clearing error message
	inputs.forEach((e) => {
		e.addEventListener("focus", () => {
			errorMessage.textContent = "";
			errorMessage.style.display = "none";
		});
	});
}
