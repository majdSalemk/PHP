
const inputs = document.querySelectorAll('.input');

function focusFunc() {
    let parent = this.parentNode.parentNode;
    parent.classList.add('focus');
}
function blurFunc() {
    let parent = this.parentNode.parentNode;
    if (this.value == "") {
        parent.classList.remove('focus');

    }
}
inputs.forEach(input => {
    input.addEventListener('focus', focusFunc);
    input.addEventListener('blur', blurFunc);
})



const form = document.querySelector('form');
const firstname = document.querySelector('input[name="firstname"]');
const middlename = document.querySelector('input[name="middlename"]');
const lastname = document.querySelector('input[name="lastname"]');
const familyname = document.querySelector('input[name="familyname"]');
const email = document.querySelector('input[name="email"]');
const phonenumber = document.querySelector('input[name="phonenumber"]');
const password = document.querySelector('input[name="password"]');
const dateofbirth = document.querySelector('input[name="dateofbirth"]');

form.addEventListener('submit', function (event) {
    let isValid = true;
    const firstnameInput = document.getElementById('firstname');
    const lastnameInput = document.getElementById('lastname');
    const emailInput = document.getElementById('email');
    const phonenumberInput = document.getElementById('phonenumber');
    const passwordInput = document.getElementById('password');
    const confirmpasswordInput = document.getElementById('confirmpassword');
    const dateofbirthInput = document.getElementById('dateofbirth');
    
    const errorFirstname = document.getElementById('errorFirstname');
    const errorLastname = document.getElementById('errorLastname');
    const errorEmail = document.getElementById('errorEmail');
    const errorPhonenumber = document.getElementById('errorPhonenumber');
    const errorPassword = document.getElementById('errorPassword');
    const errorConfirmpassword = document.getElementById('errorConfirmpassword');
    const errorDateofbirth = document.getElementById('errorDateofbirth');

    // First Name Validation
    if (firstnameInput.value.trim() === '') {
        isValid = false;
        errorFirstname.textContent = 'First Name is required.';
    } else {
        errorFirstname.textContent = '';
    }
    
    // Last Name Validation
    if (lastnameInput.value.trim() === '') {
        isValid = false;
        errorLastname.textContent = 'Last Name is required.';
    } else {
        errorLastname.textContent = '';
    }

    // Email Validation
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!emailRegex.test(emailInput.value)) {
        isValid = false;
        errorEmail.textContent = 'Please enter a valid email address.';
    } else {
        errorEmail.textContent = '';
    }
    
    // Phone Number Validation
    const phonenumberRegex = /^\d{10}$/;
    if (!phonenumberRegex.test(phonenumberInput.value)) {
        isValid = false;
        errorPhonenumber.textContent = 'Please enter a valid 10-digit phone number.';
    } else {
        errorPhonenumber.textContent = '';
    }
    
    // Password Validation
    const passwordValue = passwordInput.value;
    const passwordRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    if (!passwordRegex.test(passwordValue)) {
        isValid = false;
        errorPassword.textContent = 'Password must be at least 8 characters and include uppercase, lowercase, numbers, and special characters.';
    } else {
        errorPassword.textContent = '';
    }
    
    // Confirm Password Validation
    if (confirmpasswordInput.value !== passwordValue) {
        isValid = false;
        errorConfirmpassword.textContent = 'Passwords do not match.';
    } else {
        errorConfirmpassword.textContent = '';
    }
    
    // Date of Birth Validation
    if (!dateofbirthInput.value) {
        isValid = false;
        errorDateofbirth.textContent = 'Date of Birth is required.';
    } else {
        const currentDate = new Date();
        const dob = new Date(dateofbirthInput.value);
        const ageInMillis = currentDate - dob;
        const ageInYears = ageInMillis / (1000 * 60 * 60 * 24 * 365.25);
        
        if (ageInYears < 16) {
            isValid = false;
            errorDateofbirth.textContent = 'You must be at least 16 years old to register.';
        } else {
            errorDateofbirth.textContent = '';
        }
    }
    
    
    

    if (!isValid) {
         event.preventDefault(); // Prevent form submission if any input is invalid
    }
    if(isValid) {
        event.preventDefault();
        fetch("create.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({
                firstname: firstname.value,
                middlename: middlename.value,
                lastname: lastname.value,
                familyname: familyname.value,
                email: email.value,
                phonenumber: phonenumber.value,
                password: password.value,
                dateofbirth: dateofbirth.value,
            }),
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
            if (data.message === "Data stored successfully") {
                // Clear the input fields
                firstname.value = "";
                middlename.value = "";
                lastname.value = "";
                familyname.value = "";
                email.value = "";
                phonenumber.value = "";
                password.value = "";
                dateofbirth.value = "";

                // Redirect to login page
                window.location.href = "login.html";
            }
        })
        .catch(error => {
            console.error("Error:", error);
        });
        // alert("Redirecting to login.html"); // This line will help us confirm if the redirection is triggered
    window.location.href = "login.html";
            // window.location.href="login.html"

    }
})