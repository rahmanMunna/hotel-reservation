const hotelOrders = [
    { id: '1', date: "2025-04-20", desc: "Room Night Charge", category: "Room", amount: "3000 Tk" },
    { id: '2', date: "2025-04-21", desc: "Laundry Service", category: "Service", amount: "800 Tk" },
    { id: '3', date: "2025-04-22", desc: "Dinner Buffet", category: "Food", amount: "1500 Tk" },
    { id: '4', date: "2025-04-23", desc: "Spa Appointment", category: "Wellness", amount: "2500 Tk" },
    { id: '5', date: "2025-04-24", desc: "Mini Bar", category: "Food", amount: "1100 Tk" },
    { id: '6', date: "2025-04-25", desc: "Lunch Order", category: "Food", amount: "2000 Tk" },
    { id: '7', date: "2025-04-26", desc: "Airport Pickup", category: "Transport", amount: "1800 Tk" },
    { id: '8', date: "2025-04-27", desc: "Room Upgrade", category: "Room", amount: "1200 Tk" },
    { id: '9', date: "2025-04-28", desc: "Conference Room Rental", category: "Facility", amount: "3500 Tk" },
    { id: '10', date: "2025-04-29", desc: "Late Checkout Fee", category: "Service", amount: "1000 Tk" }
];

const months = [
    "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
];

function loadTableData() {
    const tbody = document.getElementById('folio-table-tbody');
    hotelOrders.forEach(hotelOrder => {
        const tr = document.createElement('tr');
        const date = new Date(hotelOrder.date);
        tr.innerHTML =
            `
        <td>${months[date.getMonth()]} ${date.getDate()}</td>
        <td>${hotelOrder.desc}</td>
        <td>${hotelOrder.category}</td>
        <td>${hotelOrder.amount} </td>
        <td>
            <input id=${hotelOrder.id} type="checkbox">
        </td>
        `
        tbody.appendChild(tr);
    })
}
loadTableData();