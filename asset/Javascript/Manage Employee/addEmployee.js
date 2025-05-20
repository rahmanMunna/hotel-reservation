// alert();

function addEmployee() {

    const firstName = getFirstName();
    const lastName = getLastName();
    const email = getEmail(); 
    const phone = getPhone(); 
    const dob = getDob();
    const role = getRole();
    const joiningDate = getJoiningDate();

    const employeeInfo = [firstName, lastName, email, phone, dob, role, joiningDate];

    if (!isEmpty(employeeInfo)) {
        showErrorMessage("All fields are required.");
        return false;
    }

    if (!isEmailValid(email)) {
        return false;
    }

    if (phone.length !== 11) {
        showErrorMessage("Phone number must be 11 characters.");
        return false;
    }

    if (phone[0] !== '0' || phone[1] !== '1') {
        showErrorMessage("Enter a valid phone number starting with '01'.");
        return false;
    }

    alert("Employee Added successfully");
    console.log(employeeInfo);
    return true;
}



function getFirstName() {
    return document.getElementById('firstName').value;
}

function getLastName() {
    return document.getElementById('lastName').value;
}

function getEmail() {
    return document.getElementById('email').value;
}

function getPhone() {
    return document.getElementById('phone').value;
}

function getDob() {
    return document.getElementById('dob').value;
}

function getRole() {
    return document.getElementById('role').value;
}

function getJoiningDate() {
    return document.getElementById('joiningDate').value;
}

//Validation


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
        showErrorMessage("Invalid email format (must be all lowercase, no starting number, no spaces)");
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

// Show Error msg

function showErrorMessage(msg) {
    const errorMsg = document.getElementById('error-msg');
    errorMsg.innerHTML = msg;

    errorMsg.style.color = 'red'
}
function removeErrorMessage() {
    document.getElementById('error-msg').innerHTML = '';
}
