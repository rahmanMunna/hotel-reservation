function handleIncrement(fieldName) {
    const adults = document.getElementById(fieldName);
    adults.innerText = parseInt(adults.innerText) + 1 || 1;
}

function handleDecrement(fieldName) {
    const adults = document.getElementById(fieldName);
    if (parseInt(adults.innerText) !== 0) {
        adults.innerText = parseInt(adults.innerText) - 1 || 0;
    }

}

function handleSubmit() {
    if (!dateIsSelected()) {
        return false;
    }
    if (!isRoomTypeSelected()) {
        return false;
    }
    if (!getGuestNumber()) {
        return false;
    }
    //Update Table
    if (setNewPrice()) {
        setMoreToPay();
        setRefund();
    }
    else {
        return false;
    }
    return false;
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
    const roomType = document.getElementById('room-type').value;
    return roomType;

}
function getGuestNumber() {
    const adults = document.getElementById('adults');
    const children = document.getElementById('children');

    if (children.innerText === '0' && adults.innerText === '0') {
        alert('Please select Guest Number');
        return false;
    }
    return [parseInt(adults.innerText), parseInt(children.innerText)];

}
function getRoomPrice() {
    return getRoomType() !== "" ? getRoomType().split('-')[1] : -1;
}
function getCurrentPrice() {
    const currentPrice = document.getElementById('current-total').innerHTML;
    return currentPrice;
}

// Validation
function dateIsSelected() {

    const checkInDate = getCheckInDate();
    const checkOutDate = getCheckOutDate();

    if (!checkInDate) {
        alert('check In date is not Selected');
        return false;

    }
    if (!checkOutDate) {
        alert('check Out date is not Selected');
        return false;
    }
    return true;



}

function isRoomTypeSelected() {

    if (getRoomType() === "") {
        alert('Room type not Selected');
        return false;
    }
    return true;
}

function calculateTotalNumberOFNights() {
    let pricePerNight = parseInt(getRoomPrice());
    let checkIn = getCheckInDate();
    let checkOut = getCheckOutDate(); // yyyy-m-d

    const checkInDate = parseInt(checkIn.split('-')[2]);
    const checkOutDate = parseInt(checkOut.split('-')[2]);

    const checkInMonth = parseInt(checkIn.split('-')[1]);
    const checkOutMonth = parseInt(checkOut.split('-')[1]);

    const checkInYear = parseInt(checkIn.split('-')[0]);
    const checkOutYear = parseInt(checkOut.split('-')[0]);

    // Create Date objects 
    const checkInFullDate = new Date(checkInYear, checkInMonth - 1, checkInDate);
    const checkOutFullDate = new Date(checkOutYear, checkOutMonth - 1, checkOutDate);

    // Validate and calculate stay duration
    if (checkOutFullDate <= checkInFullDate) {
        return -1;

    } else {
        const timeDiff = checkOutFullDate - checkInFullDate; // return in millisec
        const stayNights = timeDiff / (1000 * 60 * 60 * 24);
        return stayNights;
    }

}


function setNewPrice() {
    if (calculateTotalNumberOFNights() === -1) {
        alert("Error: Check-out date must be after check-in date.")
        return false;
    }
    else {
        const newPrice = document.getElementById('new-price');
        const stayNights = calculateTotalNumberOFNights();
        const roomPricePerNight = parseInt(getRoomPrice());
        newPrice.innerHTML = stayNights * roomPricePerNight + ' Tk';
        return true;
    }


}
function setMoreToPay() {
    const originalPrice = parseInt(document.getElementById('original-price').innerHTML);
    const newPrice = parseInt(document.getElementById('new-price').innerHTML);
    const moreToPay = document.getElementById('more-to-pay');
    const remaining = originalPrice < newPrice ? newPrice - originalPrice : 0;
    moreToPay.innerHTML = `+${remaining} TK`;
    return;

}
function setRefund() {
    const originalPrice = parseInt(document.getElementById('original-price').innerHTML);
    const newPrice = parseInt(document.getElementById('new-price').innerHTML);
    const refund = document.getElementById('refund');
    const remaining = originalPrice > newPrice ? originalPrice - newPrice : 0;
    refund.innerHTML = `-${remaining} TK`;
    return;
}

function start() {
    document.getElementById('original-price').innerHTML = getCurrentPrice(); // set current Price initially

}
start();