function generateCaptcha() {
    const num1 = Math.round(Math.random() * 100);
    const num2 = Math.round(Math.random() * 100);
    const captcha = document.getElementById("captcha");
    if (num1 >= num2) {
        captcha.innerHTML = `${num1} - ${num2}`;
    }
    else {
        captcha.innerHTML = `${num2} - ${num1}`;
    }
}
generateCaptcha();

function setErrorMessage(msg) {
    const errorMsg = document.getElementById('error-msg');
    errorMsg.innerHTML = msg.toString();
    errorMsg.style.color = 'red'
}
function getAllInputValue() {
    const fistName = document.getElementById('first-name').value;
    const lastName = document.getElementById('last-name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const sendMessage = document.getElementById('send-msg').value;
    const captchaInput = document.getElementById('captcha-input').value;
    return [fistName, lastName, email, phone, sendMessage, captchaInput];
}

function handleSend() {
    const [fistName, lastName, email, phone, sendMessage, captchaInput] = getAllInputValue();
    console.log(getAllInputValue())
    // return false;

    if (!isEmpty([fistName, lastName, email, phone, sendMessage, captchaInput])) {
        setErrorMessage('Fill All the input field value');
        return false;
    }
    if (!isEmailValid(email)) {
        setErrorMessage(' X Enter a valid Email');
        return false;
    }
    if (phone.length !== 11) {
        setErrorMessage('Phone number must contains 11 digits');
        return false;
    }
    // if (phone[0] !== 0 || phone[1] !== 1) {
    //     setErrorMessage('Enter a invalid Phone number');
    //     return false;
    // }
    if (!validateCaptcha(captchaInput)) {
        setErrorMessage('Invalid Captcha');
        return false;
    }

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
    if (!email.includes('@')) {
        setErrorMessage('Email must contain @');
        // alert('Email must contain @');
        return false;
    }

    const [localPart, domain] = email.split('@');

    if (domain !== "gmail.com") {
        setErrorMessage("Email must be gmail.com");
        // alert('Email must be gmail.com');
        return false;
    }

    if (!isAllLowerCase(localPart) || isFirstCharacterNumber(localPart) || localPart.includes(' ')) {
        setErrorMessage("Invalid email format (must be all lowercase, no starting number, no spaces");
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

const validateCaptcha = (captchaInput) => {
    const captcha = document.getElementById('captcha').innerHTML;
    const [number1, number2] = captcha.split('-');
    const result = number1.trim() - number2.trim();
    return (parseInt(captchaInput) === parseInt(result));
}

