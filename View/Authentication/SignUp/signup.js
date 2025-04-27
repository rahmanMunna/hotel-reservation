console.log('connected');

const handleSubmit = () => {
    const firstName = document.getElementById('first-name').value;
    const lastName = document.getElementById('last-name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const dob = document.getElementById('dob').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;

    if (!isEmpty([firstName, lastName, email, phone, dob, password, confirmPassword])) {
        alert('Please fill all fields');
        return false;
    }

    if (!isEmailValid(email)) {
        return false;
    }
    if (password !== confirmPassword) {
        alert("Password doesn't match ");
        return false;
    }
    if(phone.length !== 11){
        alert('Phone number must be 11 character');
        return false;
    }

    alert('Successful');
    return true;
};

const isEmpty = (elements) => {
    for (const element of elements) {
        if (element.trim().length === 0) {
            return false;
        }
    }
    return true;
};

const isEmailValid = (email) => {
    if (!email.includes('@')) {
        alert('Email must contain @');
        return false;
    }

    const [localPart, domain] = email.split('@');

    if (domain !== "gmail.com") {
        alert('Email must be gmail.com');
        return false;
    }

    if (!isAllLowerCase(localPart) || isFirstCharacterNumber(localPart) || localPart.includes(' ')) {
        alert('Invalid email format (must be all lowercase, no starting number, no spaces)');
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
