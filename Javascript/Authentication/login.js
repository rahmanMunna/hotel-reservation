function handleLogin() {
    const email = document.getElementById('email').value;
    const userId = document.getElementById('userId').value;
    const password = document.getElementById('password').value;
    const errorMsg = document.getElementById('error-msg');
    errorMsg.style.color = 'red'


    if (!isEmpty([userId, email, password])) {
        // alert('Please fill all fields');
        errorMsg.innerHTML = 'Please fill all fields';
        return false;
    }
    if (userId <= 0) {
        errorMsg.innerHTML = 'Invalid User ID';
        return false;
    }
    if (!isEmailValid(email)) {
        errorMsg.innerHTML = 'Enter a valid email';
        return false;
    }
    if (!isValidPassword(password)) {
        errorMsg.innerHTML = 'Password must contains uppercase,lowercase,special character and number';
        // alert('Password must contains uppercase,lowercase,special character and number');
        return false;
    }
    alert('Successfully Login')
    return true;
}

const isEmpty = (elements) => {
    for (const element of elements) {
        if (element.trim().length === 0) {
            return false;
        }
    }
    return true;
};
const isEmailValid = (email) => {
    const errorMsg = document.getElementById('error-msg');
    errorMsg.style.color = 'red'
    if (!email.includes('@')) {
        errorMsg.innerHTML = "Email must contain @";
        // alert('Email must contain @');
        return false;
    }

    const [localPart, domain] = email.split('@');

    if (domain !== "gmail.com") {
        errorMsg.innerHTML = "Email must be gmail.com";
        // alert('Email must be gmail.com');
        return false;
    }

    if (!isAllLowerCase(localPart) || isFirstCharacterNumber(localPart) || localPart.includes(' ')) {
        errorMsg.innerHTML = "Invalid email format (must be all lowercase, no starting number, no spaces"
        // alert('Invalid email format (must be all lowercase, no starting number, no spaces)');
        return false;
    }

    return true;
};
const isAllLowerCase = (text) => {
    for (let i = 0; i < text.length; i++) {
        if (text[i] >= 'A' && text[i] <= 'Z') {
            return false;
        }
    }
    return true;
};

const isFirstCharacterNumber = (text) => {
    const ch = text[0];
    return ch >= '0' && ch <= '9';
};

const isValidPassword = (password) => {
    if (password.length < 8) return false;

    let hasUpper = false;
    let hasLower = false;
    let hasSpecial = false;
    let hasNumber = false;

    const specialChars = "!@#$%&*()_+[]{}|<>?/";

    for (let i = 0; i < password.length; i++) {
        const char = password[i];


        if (char >= 'A' && char <= "Z") hasUpper = true;         // A-Z
        else if (char >= 'a' && char <= 'z') hasLower = true;   // a-z
        else if (specialChars.includes(char)) hasSpecial = true;
        else if (char >= '0' && char <= '9') hasNumber = true;

        // Short-circuit if all conditions are met
        if (hasUpper && hasLower && hasSpecial) return true;
    }

    return hasUpper && hasLower && hasSpecial;
};
