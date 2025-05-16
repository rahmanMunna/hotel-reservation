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

function displayRooms() {
    const roomsCards = document.getElementById('rooms-cards');
    rooms.forEach(room => {
        if (room.available) {
            const div = document.createElement('div');
            div.innerHTML =
                `
            <p>Room ID: <span>${room.room_id}</span></p>
            <p>Room No: <span>${room.room_no}</span></p>
            <p>Room Type: <span>${room.room_type}</span></p>
            <p>Bed Type: <span>${room.bed_type}</span></p>
            <p>Capacity: <span>${room.capacity}</span></p>
            <p>Amenities: <span>${room.amenities.join(", ")}</span></p>
            <p>Floor: <span>${room.floor}</span></p>
            <p>Price per night: <span>$${room.price_per_night}</span></p>
            `
            div.setAttribute('class', 'room-card');
            roomsCards.appendChild(div);
        }
    })
}
displayRooms();