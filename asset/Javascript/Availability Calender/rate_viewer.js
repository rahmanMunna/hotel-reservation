const rateViewer = [
    { "date": "2025-05-01", "day": "Thursday", "rate": 95, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-05-02", "day": "Friday", "rate": 130, "category": "friday", "note": "Friday Rate" },
    { "date": "2025-05-03", "day": "Saturday", "rate": 140, "category": "saturday", "note": "Saturday Rate" },
    { "date": "2025-05-04", "day": "Sunday", "rate": 120, "category": "sunday", "note": "Slightly Cheaper Sunday Rate" },
    { "date": "2025-05-05", "day": "Monday", "rate": 85, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-05-06", "day": "Tuesday", "rate": 85, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-05-07", "day": "Wednesday", "rate": 85, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-05-08", "day": "Thursday", "rate": 90, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-05-09", "day": "Friday", "rate": 135, "category": "friday", "note": "Friday Rate" },
    { "date": "2025-05-10", "day": "Saturday", "rate": 150, "category": "saturday", "note": "Saturday Rate" },
    { "date": "2025-05-11", "day": "Sunday", "rate": 125, "category": "sunday", "note": "Slightly Cheaper Sunday Rate" },
    { "date": "2025-05-12", "day": "Monday", "rate": 85, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-05-13", "day": "Tuesday", "rate": 85, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-05-14", "day": "Wednesday", "rate": 85, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-05-15", "day": "Thursday", "rate": 90, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-05-16", "day": "Friday", "rate": 140, "category": "friday", "note": "Friday Rate" },
    { "date": "2025-05-17", "day": "Saturday", "rate": 155, "category": "saturday", "note": "Saturday Rate" },
    { "date": "2025-05-18", "day": "Sunday", "rate": 130, "category": "sunday", "note": "Slightly Cheaper Sunday Rate" },
    { "date": "2025-05-19", "day": "Monday", "rate": 90, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-05-20", "day": "Tuesday", "rate": 90, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-05-21", "day": "Wednesday", "rate": 90, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-05-22", "day": "Thursday", "rate": 95, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-05-23", "day": "Friday", "rate": 145, "category": "friday", "note": "Friday Rate" },
    { "date": "2025-05-24", "day": "Saturday", "rate": 160, "category": "saturday", "note": "Saturday Rate" },
    { "date": "2025-05-25", "day": "Sunday", "rate": 130, "category": "sunday", "note": "Slightly Cheaper Sunday Rate" },
    { "date": "2025-05-26", "day": "Monday", "rate": 90, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-05-27", "day": "Tuesday", "rate": 90, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-05-28", "day": "Wednesday", "rate": 90, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-05-29", "day": "Thursday", "rate": 100, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-05-30", "day": "Friday", "rate": 150, "category": "friday", "note": "Friday Rate" },
    { "date": "2025-05-31", "day": "Saturday", "rate": 165, "category": "saturday", "note": "Saturday Rate" },

    { "date": "2025-06-01", "day": "Sunday", "rate": 120, "category": "sunday", "note": "Slightly Cheaper Sunday Rate" },
    { "date": "2025-06-02", "day": "Monday", "rate": 90, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-06-03", "day": "Tuesday", "rate": 90, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-06-04", "day": "Wednesday", "rate": 90, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-06-05", "day": "Thursday", "rate": 95, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-06-06", "day": "Friday", "rate": 130, "category": "friday", "note": "Friday Rate" },
    { "date": "2025-06-07", "day": "Saturday", "rate": 140, "category": "saturday", "note": "Saturday Rate" },
    { "date": "2025-06-08", "day": "Sunday", "rate": 120, "category": "sunday", "note": "Slightly Cheaper Sunday Rate" },
    { "date": "2025-06-09", "day": "Monday", "rate": 85, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-06-10", "day": "Tuesday", "rate": 85, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-06-11", "day": "Wednesday", "rate": 85, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-06-12", "day": "Thursday", "rate": 95, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-06-13", "day": "Friday", "rate": 135, "category": "friday", "note": "Friday Rate" },
    { "date": "2025-06-14", "day": "Saturday", "rate": 150, "category": "saturday", "note": "Saturday Rate" },
    { "date": "2025-06-15", "day": "Sunday", "rate": 120, "category": "sunday", "note": "Slightly Cheaper Sunday Rate" },
    { "date": "2025-06-16", "day": "Monday", "rate": 90, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-06-17", "day": "Tuesday", "rate": 90, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-06-18", "day": "Wednesday", "rate": 90, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-06-19", "day": "Thursday", "rate": 95, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-06-20", "day": "Friday", "rate": 140, "category": "friday", "note": "Friday Rate" },
    { "date": "2025-06-21", "day": "Saturday", "rate": 155, "category": "saturday", "note": "Saturday Rate" },
    { "date": "2025-06-22", "day": "Sunday", "rate": 125, "category": "sunday", "note": "Slightly Cheaper Sunday Rate" },
    { "date": "2025-06-23", "day": "Monday", "rate": 90, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-06-24", "day": "Tuesday", "rate": 90, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-06-25", "day": "Wednesday", "rate": 90, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-06-26", "day": "Thursday", "rate": 100, "category": "weekday", "note": "Weekday Rate" },
    { "date": "2025-06-27", "day": "Friday", "rate": 145, "category": "friday", "note": "Friday Rate" },
    { "date": "2025-06-28", "day": "Saturday", "rate": 160, "category": "saturday", "note": "Saturday Rate" },
    { "date": "2025-06-29", "day": "Sunday", "rate": 130, "category": "sunday", "note": "Slightly Cheaper Sunday Rate" },
    { "date": "2025-06-30", "day": "Monday", "rate": 95, "category": "weekday", "note": "Weekday Rate" }
]
const rooms = [
    {
        id: "101",
        category: "Standard",
        bookedDates: [],
        pricePerNight: 90,
        amenities: ["Wi-Fi", "TV", "Air Conditioning"],
        capacity: 2,
        isSmokingAllowed: false
    },
    {
        id: "102",
        category: "Deluxe",
        bookedDates: ["2025-05-08", "2025-05-09", "2025-05-12"],
        pricePerNight: 135,
        amenities: ["Wi-Fi", "TV", "Mini Fridge", "Balcony"],
        capacity: 2,
        isSmokingAllowed: false
    },
    {
        id: "103",
        category: "Suite",
        bookedDates: [],
        pricePerNight: 170,
        amenities: ["Wi-Fi", "TV", "Jacuzzi", "Balcony", "Living Area"],
        capacity: 4,
        isSmokingAllowed: true
    },
    {
        id: "104",
        category: "Standard",
        bookedDates: ["2025-05-01", "2025-05-02", "2025-05-03"],
        pricePerNight: 85,
        amenities: ["Wi-Fi", "TV"],
        capacity: 2,
        isSmokingAllowed: false
    },
    {
        id: "105",
        category: "Deluxe",
        bookedDates: ["2025-05-14", "2025-05-15"],
        pricePerNight: 140,
        amenities: ["Wi-Fi", "TV", "Balcony", "Mini Bar"],
        capacity: 3,
        isSmokingAllowed: false
    },
    {
        id: "106",
        category: "Suite",
        bookedDates: ["2025-05-20", "2025-05-21", "2025-05-22"],
        pricePerNight: 160,
        amenities: ["Wi-Fi", "TV", "Jacuzzi", "Living Room"],
        capacity: 4,
        isSmokingAllowed: true
    },
    {
        id: "107",
        category: "Standard",
        bookedDates: ["2025-05-18", "2025-05-19"],
        pricePerNight: 95,
        amenities: ["Wi-Fi", "TV", "Desk"],
        capacity: 2,
        isSmokingAllowed: false
    },
    {
        id: "108",
        category: "Deluxe",
        bookedDates: ["2025-05-10", "2025-05-11"],
        pricePerNight: 145,
        amenities: ["Wi-Fi", "TV", "Balcony"],
        capacity: 2,
        isSmokingAllowed: false
    },
    {
        id: "109",
        category: "Suite",
        bookedDates: ["2025-05-25", "2025-05-26", "2025-05-27"],
        pricePerNight: 165,
        amenities: ["Wi-Fi", "TV", "Living Area", "Kitchenette"],
        capacity: 4,
        isSmokingAllowed: true
    },
    {
        id: "110",
        category: "Standard",
        bookedDates: [],
        pricePerNight: 88,
        amenities: ["Wi-Fi", "TV", "Air Conditioning"],
        capacity: 2,
        isSmokingAllowed: false
    }
];

function getCheckInDate() {
    const checkInDate = document.getElementById('check-in-date').value;
    return checkInDate;
}

function isValidDate(checkInDate, checkOutDate) {
    const checkIn = new Date(checkInDate);
    const checkOut = new Date(checkOutDate);

    if (checkIn >= checkOut) {
        return false;
    }
    return true;

}

function changeSelectedDateColor(component) {
    component.style.backgroundColor = 'red'
    component.style.color = 'white'
    component.classList.add("checked-in");
}


function setNight(checkInDate, checkOutDate) {
    const night = document.getElementById('night-count');
    const diffInMillis = checkOutDate - checkInDate;
    const diffInDays = diffInMillis / (1000 * 3600 * 24);
    console.log(diffInDays);
    night.innerHTML = diffInDays

}

function generateRate(checkIn, checkOut) {
    const matchesRange = getRatesInRange(checkIn, checkOut);
    const table = document.getElementById('rate-view-table');
    table.innerHTML = '';
    const tbody = document.createElement('tbody');

    matchesRange.forEach(a_matchesRange => {
        const tr = document.createElement('tr');
        tr.innerHTML =
            `
        <td>${a_matchesRange.date}</td>
        <td>${a_matchesRange.day}</td>
        <td>${a_matchesRange.category}</td>
        <td>${a_matchesRange.rate}</td>
        <td>${a_matchesRange.note}</td>
        `
        tbody.appendChild(tr);
    })
    table.appendChild(tbody);
}

function getRatesInRange(checkInDate, checkOutDate) {
    return rateViewer.filter(rate => {
        const rateDate = new Date(rate.date);
        return rateDate >= checkInDate && rateDate < checkOutDate;
    });
}

function generateAvailableRoomInfo() {
    const availableRooms = rooms.filter(room => {
        return room.bookedDates.length === 0
    })

    const table = document.getElementById('available-room');
    table.innerHTML = '';
    const tbody = document.createElement('tbody');

    availableRooms.forEach(availableRoom => {
        const tr = document.createElement('tr');
        tr.innerHTML =
            `
        <td>${availableRoom.id}</td>
        <td>${availableRoom.category}</td>
        <td>${availableRoom.pricePerNight}</td>
        <td>
        ${availableRoom.amenities.map(amenity => amenity)}
        </td>
        
        <td>${availableRoom.capacity}</td>
        <td>${availableRoom.isSmokingAllowed ? "Yes" : "NO"}</td>
        `
        //why use map
        tbody.appendChild(tr);
    })
    table.appendChild(tbody);
    console.log(availableRooms);
}
//Start
function handleCheckOutDate() {
    const checkOutDate = document.getElementById('check-out-date').value;
    const checkInDate = getCheckInDate();

    const monthNames = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ];

    if (!isValidDate(checkInDate, checkOutDate)) {
        alert("Select a valid check Out Date");
        // checkInDate = "";
        // checkOutDate = "";
        return false;
    }
    const div = document.getElementById("summary-table");
    div.innerHTML = "";
    div.hidden = false;
    const checkIn = new Date(checkInDate);
    const checkOut = new Date(checkOutDate);
    const stayDates = document.getElementById('stay-date');
    stayDates.innerHTML = `${monthNames[checkIn.getMonth()]} ${checkIn.getDate()} 
    - ${monthNames[checkOut.getMonth()]} ${checkOut.getDate()}`;

    setNight(checkIn, checkOut);
    generateRate(checkIn, checkOut);
    generateAvailableRoomInfo();

}

function handleCheckInDate() {
    const checkInDate = document.getElementById('check-in-date').value;
    const checkOutDate = document.getElementById('check-out-date').value;

    if (checkOutDate === "") {
        return;
    }
    if (!isValidDate(checkInDate, checkOutDate)) {
        alert('Invalid Date Selected');
        // checkInDate = "";
        // checkOutDate = "";
        const summaryTable = document.getElementById("summary-table");
        summaryTable.hidden = true;
    }
    return;
}