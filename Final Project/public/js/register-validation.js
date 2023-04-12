function validateName() {
    const nameInput = document.getElementById('name');
    const nameValue = nameInput.value.trim();
  
    if (nameValue === '') {
      document.getElementById('validateName').innerHTML = 'Please enter your full name.';
      document.getElementById('validateName').classList.add('text-danger');
      nameInput.classList.add('is-invalid');
      nameInput.classList.remove('is-valid');
      return false;
    } else if (!/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/.test(nameValue)) {
      document.getElementById('validateName').innerHTML = 'Please enter a valid full name.';
      document.getElementById('validateName').classList.add('text-danger');
      nameInput.classList.add('is-invalid');
      nameInput.classList.remove('is-valid');
      return false;
    } else {
      document.getElementById('validateName').innerHTML = '';
      document.getElementById('validateName').classList.remove('text-danger');
      nameInput.classList.add('is-valid');
      nameInput.classList.remove('is-invalid');
      return true;
    }
  }
  

  function validateEmail() {
    const emailInput = document.getElementById('email_address');
    const emailValue = emailInput.value.trim();
  
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  
    if (emailValue === '' || !emailRegex.test(emailValue)) {
      emailInput.classList.remove('is-valid');
      emailInput.classList.add('is-invalid');
      document.getElementById('validateEmail').textContent = 'Please enter a valid email address.';
      document.getElementById('validateEmail').classList.add('text-danger');
      document.getElementById("save").disabled = true;
      document.getElementById("update").disabled = true;
    } else {
      emailInput.classList.remove('is-invalid');
      emailInput.classList.add('is-valid');
      document.getElementById('validateEmail').textContent = '';
      document.getElementById('validateEmail').classList.remove('text-danger');
      document.getElementById("save").disabled = false;
      document.getElementById("update").disabled = false;
    }
  }
  

  function validatePassword() {
    let password = document.getElementById("password").value;
    let validatePasswordElement = document.getElementById("validatePassword");
    
    // Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one number
    let passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    
    if (password.match(passwordRegex)) {
      // Password is valid
      validatePasswordElement.innerHTML = "";
      return true;
    } else {
      // Password is invalid
      validatePasswordElement.innerHTML = "Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one number.";
      return false;
    }
  }
  