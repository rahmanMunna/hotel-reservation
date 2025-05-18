const rooms = [
    {
        room_id: "R001",
        room_type: "Single",
        floor: 1,
        capacity: 1,
        bed_type: "Twin",
        available: true,
        amenities: ["WiFi", "AC", "TV"],
        price_per_night: 50,
        room_no: "101"
    },
    {
        room_id: "R002",
        room_type: "Double",
        floor: 2,
        capacity: 2,
        bed_type: "Queen",
        available: false,
        amenities: ["WiFi", "AC", "Mini Fridge"],
        price_per_night: 80,
        room_no: "202"
    },
    {
        room_id: "R003",
        room_type: "Deluxe",
        floor: 3,
        capacity: 3,
        bed_type: "King",
        available: true,
        amenities: ["WiFi", "AC", "TV", "Mini Bar", "Balcony"],
        price_per_night: 120,
        room_no: "303"
    },
    {
        room_id: "R004",
        room_type: "Suite",
        floor: 4,
        capacity: 4,
        bed_type: "King",
        available: true,
        amenities: ["WiFi", "AC", "TV", "Jacuzzi", "Kitchen"],
        price_per_night: 200,
        room_no: "404"
    },
    {
        room_id: "R005",
        room_type: "Single",
        floor: 1,
        capacity: 1,
        bed_type: "Single",
        available: false,
        amenities: ["WiFi"],
        price_per_night: 45,
        room_no: "105"
    }
];

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

    const roomCards = document.getElementById('room-cards');
    //when recall this function need to clear previous all card;
    roomCards.innerHTML = "";

    rooms.forEach(room => {
        if (room.available) {
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
            <p>Amenities : <span>${room.amenities.join(',')}</span></p>
            <button>Book now</button>
            `
            roomCards.appendChild(div);
        }
    })

}

function hideAvailableRoom() {
    document.getElementById('room-cards').innerHTML = "";
}



