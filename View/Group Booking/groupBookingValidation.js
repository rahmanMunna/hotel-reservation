function handleSubmit() {
    const groupName = document.getElementById('group-name').value;
    const checkInDate = document.getElementById('check-in-date').value;
    const checkOutDate = document.getElementById('check-out-date').value;
    const numberOfRooms = document.getElementById('number-of-rooms').value;
    const numberOfAdults = document.getElementById('number-of-adults').value;
    const numberOfChildren = document.getElementById('number-of-children').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;

    console.log(groupName, checkInDate, checkOutDate, numberOfRooms, numberOfAdults, numberOfChildren, email, phone);

    return false;
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