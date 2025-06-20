function handleConfirmReservation() {
    const guestName = document.getElementById('guest-name').value;
    const check_in_date = document.getElementById('check-in-date').value;
    const check_out_date = document.getElementById('check-out-date').value;
    const roomId = document.getElementById('room-id').value;
    const roomNo = document.getElementById('room-no').value;
    

    const adults = document.getElementById('adults').value;
    const children = document.getElementById('children').value;

    
    const errorMsg = document.getElementById('error-msg');
    errorMsg.style.color = "red";


    const formData = [
        guestName,
        check_in_date,
        check_out_date,
        roomId,
        roomNo,
        // phone, 
        // email,
        adults,
        children,
        
    ]

    if (!isEmpty(formData)) {
        // alert('Please fill all fields');
        errorMsg.innerHTML = 'Please fill all fields';
        return false;
    }
    if (!isEmailValid(email)) {
        return false;
    }
    if(!checkValidDate(check_in_date,check_out_date)){
        errorMsg.innerHTML = 'Date are invalid';
        return false;
    }

    
    if (children < 0 || adults <= 0) {
        errorMsg.innerHTML = "Invalid Guest number";
        return false;
    }
    console.log(formData)
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


const checkValidDate = (checkInDate, checkOutDate) => {
    const checkIn = new Date(checkInDate);
    const checkOut = new Date(checkOutDate);

    if (checkIn > checkOut) {
        return false
    }

    return true;
}