//making Xttp req to get data from db via php
// alert();
let rooms = [];
let xttp = new XMLHttpRequest();
xttp.open('get', '../../model/rooms_data.php', true);
xttp.send();
xttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        rooms = JSON.parse(this.response);
        // displayAvailableRooms();
        console.log(rooms);
    }
}



function getCheckInDate() {
    return document.getElementById('check-in-date').value;
}
function getCheckOutDate() {
    return document.getElementById('check-out-date').value;
}


function handleCheckInDate() {
    if (IsValidDate()) {
        displayAvailableRooms();
    }
    else {
        hideAvailableRoom();
    }
}
function handleCheckOutDate() {
    if (IsValidDate()) {
        displayAvailableRooms();
    }
    else {
        hideAvailableRoom();
    }
}

function IsValidDate() {
    if (getCheckInDate() && getCheckOutDate()) {
        const checkInDate = new Date(getCheckInDate());
        const checkOutDate = new Date(getCheckOutDate());

        if (checkInDate < checkOutDate) {
            //set night count
            setNumberOfNights(checkInDate, checkOutDate)
            return true;
        }
        showErrorMessage("Invalid Date: Check-in must be before Check-out");
        return false;
    } else if (!getCheckInDate()) {
        showErrorMessage("Select Check-in Date");
        return false;
    } else if (!getCheckOutDate()) {
        showErrorMessage("Select Check-out Date");
        return false;
    } else {
        showErrorMessage("Invalid input");
        return false;
    }
}

function showErrorMessage(message) {
    const error = document.getElementById('error-msg');
    if (error) {
        error.innerHTML = message;
        error.style.color = 'red';
    } else {
        console.error("Error element with id 'error-msg' not found.");
    }
}
function removeErrorMessage() {
    document.getElementById('error-msg').innerHTML = "";
}

//SetNightCount

function setNumberOfNights(checkInDate, checkOutDate) {
    const nightCount = document.getElementById('night-count');

    const oneDay = 1000 * 60 * 60 * 24; // milliseconds in a day
    const nights = Math.round((checkOutDate - checkInDate) / oneDay);

    nightCount.textContent = nights + (nights === 1 ? " night" : " nights");

}

//display Available room

function displayAvailableRooms() {
    removeErrorMessage();
    console.log(rooms);

    const roomCards = document.getElementById('room-cards');
    //when recall this function need to clear previous all card;
    roomCards.innerHTML = "";

    rooms.forEach(room => {
        // console.log(room);
        
        // const amenities = room.amenities.split(',').map(item => item.trim().replace(/^"|"$/g, ''));
        // console.log(amenities); // ["WiFi", "AC", "TV"]

        const div = document.createElement('div');
        div.classList.add('card');
        div.setAttribute("id", room.room_id);
        div.innerHTML =
            `
            <p>Room No : <span>${room.room_no}</span></p>
            <p>Room Type : <span>${room.room_type}</span></p>
            <p>Bed Type : <span>${room.bed_type}</span></p>
            <p> Capacity : <span>${room.capacity}</span></p>
            <p> Floor : <span>${room.floor}</span></p>
            <p> Price per night : <span>${room.price_per_night}</span></p>
            
            <button>Book now</button>
            `
        roomCards.appendChild(div);
    }
    )

}

function hideAvailableRoom() {
    document.getElementById('room-cards').innerHTML = "";
}

// getAllAvailableRoomsDataFromDb();



