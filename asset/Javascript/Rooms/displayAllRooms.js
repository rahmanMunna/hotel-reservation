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
    const tbody = document.getElementById('room-details-tbody');
    rooms.forEach(room => {
        if (room.available) {
            const tr = document.createElement('tr');
            tr.innerHTML =
            `
            <td>${room.room_id}</td>
            <td>${room.room_no}</td>
            <td>${room.room_type}</td>
            <td>${room.bed_type}</td>
            <td>${room.capacity}</td>
            <td>${room.floor}</td>
            <td>$${room.price_per_night}</td>
            <td>${room.amenities.join(", ")}</td>
            `
            tr.setAttribute('class', 'room-card');
            tbody.appendChild(tr);
        }
    })
}
displayRooms();