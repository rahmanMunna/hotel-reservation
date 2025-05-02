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
}

function dateIsSelected() {
    const dates = document.getElementsByClassName('date');
    const checkInDate = dates[0]
    const checkOutDate = dates[1]

    if (!checkInDate.value) {
        alert('check In date is not Selected');
        return false;

    }
    if (!checkOutDate.value) {
        alert('check Out date is not Selected');
        return false;
    }
    return true;



}

function isRoomTypeSelected() {
    const roomType = document.getElementById('room-type');
    if (roomType.value === "") {
        alert('Room type not Selected');
        return false;
    }

    return parseInt(roomType.value.split('-')[1]);


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