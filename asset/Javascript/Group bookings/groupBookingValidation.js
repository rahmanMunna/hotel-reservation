function handleSubmit() {
    const groupName = document.getElementById('group-name').value;
    const checkInDate = document.getElementById('check-in-date').value;
    const checkOutDate = document.getElementById('check-out-date').value;
    const numberOfRooms = document.getElementById('number-of-rooms').value;
    const numberOfAdults = document.getElementById('number-of-adults').value;
    const numberOfChildren = document.getElementById('number-of-children').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;

    const formData = [groupName, checkInDate, checkOutDate, numberOfRooms, numberOfAdults, numberOfChildren, email, phone];
    // console.log(typeof (phone[0]), phone[1]);
    // console.log(groupName, checkInDate, checkOutDate, numberOfRooms, numberOfAdults, numberOfChildren, email, phone);

    if (!isEmpty(formData)) {
        showErrorMessage("Fill up all the field");
        return false;
    }
    if (!isEmailValid(email)) {
        showErrorMessage("PLease provide a valid email");
        return false;
    }
    if (numberOfAdults <= "0") {
        showErrorMessage("Number of guest is Invalid");
        return false;
    }
    if (phone.length !== 11) {
        showErrorMessage("Provide a valid phone number")
        return false;
    }
    if (!isValidDateSelected(checkInDate, checkOutDate)) {
        showErrorMessage("Select valid check in-out date");
        return false;
    }


    displaySummaryTable(formData);
    showSuccessFulMsg();
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
        showErrorMessage("Email must contain @");
        return false;
    }

    const [localPart, domain] = email.split('@');

    if (domain !== "gmail.com") {
        showErrorMessage("Email must be gmail.com");
        return false;
    }

    if (!isAllLowerCase(localPart) || isFirstCharacterNumber(localPart) || localPart.includes(' ')) {
        showErrorMessage("Invalid email format (must be all lowercase, no starting number, no spaces");
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

const isValidDateSelected = (checkInDate, checkOutDate) => {
    const checkIn = new Date(checkInDate);
    const checkOut = new Date(checkOutDate);

    if (checkIn >= checkOut) {
        return false;
    }
    return true;
}

const showErrorMessage = (msg) => {
    const errorMsg = document.getElementById('error-msg');
    errorMsg.innerHTML = msg;
    errorMsg.style.color = 'red';
}

const showSuccessFulMsg = () => {
    const errorMsg = document.getElementById('error-msg');
    errorMsg.innerHTML = "Your booking submission is Successful";
    errorMsg.style.color = "green";
}

