function handleSubmit() {
    if (!dateIsSelected()) {
        return false;
    }
    if (!isRoomTypeSelected()) {
        return false;
    }
    if (!isGuestCountSelected()) {

        return false;
    }
    // Update Table
    if (setNewPrice()) {
        setMoreToPay();
        setRefund();
    } else {
        return false;
    }

    
    return true;
}

function getCheckInDate() {
    const dates = document.getElementsByClassName('date');
    return dates[0].value;
}

function getCheckOutDate() {
    const dates = document.getElementsByClassName('date');
    return dates[1].value;
}

function getRoomType() {
    return document.getElementById('room-type').value;
}

function getAdultGuestNumber() {
    return parseInt(document.getElementById('adults').value);
}

function getChildGuestNumber() {
    return parseInt(document.getElementById('children').value);
}

function getGuestNumber() {
    const adults = parseInt(document.getElementById('adults').value);
    const children = parseInt(document.getElementById('children').value);

    return (adults > 0 || children >= 0);
}

function getRoomPrice() {
    return getRoomType() !== "" ? getRoomType().split('-')[1] : -1;
}

function getCurrentPrice() {
    return document.getElementById('current-total').innerHTML;
}

// Validation
function dateIsSelected() {
    const checkInDate = getCheckInDate();
    const checkOutDate = getCheckOutDate();

    if (!checkInDate) {
        alert('Check-in date is not selected.');
        return false;
    }
    if (!checkOutDate) {
        alert('Check-out date is not selected.');
        return false;
    }

    // Check if check-in is before check-out
    const checkIn = new Date(checkInDate);
    const checkOut = new Date(checkOutDate);

    if (checkOut <= checkIn) {
        alert('Check-out date must be after check-in date.');
        return false;
    }

    return true;
}

function isRoomTypeSelected() {
    if (getRoomType() === "") {
        alert('Room type not selected.');
        return false;
    }
    return true;
}

function isGuestCountSelected() {
    const adultsInput = document.getElementById('adults').value;
    const childrenInput = document.getElementById('children').value;

    // Check if empty
    if (adultsInput === "" || childrenInput === "") {
        alert("Please fill in both adult and children guest counts.");
        return false;
    }

    // Convert to numbers
    const adults = parseInt(adultsInput);
    const children = parseInt(childrenInput);

    // Check for valid numbers
    if (isNaN(adults) || adults < 0 || isNaN(children) || children < 0) {
        alert("Please enter valid non-negative numbers for guests.");
        return false;
    }

    return true;
}


function calculateTotalNumberOFNights() {
    let checkIn = getCheckInDate();
    let checkOut = getCheckOutDate();

    const checkInDate = new Date(checkIn);
    const checkOutDate = new Date(checkOut);

    if (checkOutDate <= checkInDate) {
        return -1;
    }

    const timeDiff = checkOutDate - checkInDate;
    const stayNights = timeDiff / (1000 * 60 * 60 * 24);
    return stayNights;
}

function setNewPrice() {
    const stayNights = calculateTotalNumberOFNights();
    if (stayNights === -1) {
        alert("Error: Check-out date must be after check-in date.");
        return false;
    }

    const newPrice = document.getElementById('new-price');
    const roomPricePerNight = parseInt(getRoomPrice());
    newPrice.innerHTML = (stayNights * roomPricePerNight) + ' Tk';
    return true;
}

function setMoreToPay() {
    const originalPrice = parseInt(document.getElementById('original-price').innerHTML);
    const newPrice = parseInt(document.getElementById('new-price').innerHTML);
    const moreToPay = document.getElementById('more-to-pay');
    const remaining = originalPrice < newPrice ? newPrice - originalPrice : 0;
    moreToPay.innerHTML = `+${remaining} TK`;
}

function setRefund() {
    const originalPrice = parseInt(document.getElementById('original-price').innerHTML);
    const newPrice = parseInt(document.getElementById('new-price').innerHTML);
    const refund = document.getElementById('refund');
    const remaining = originalPrice > newPrice ? originalPrice - newPrice : 0;
    refund.innerHTML = `-${remaining} TK`;
}

function start() {
    document.getElementById('original-price').innerHTML = getCurrentPrice();
}
start();
