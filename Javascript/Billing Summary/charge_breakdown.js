const data = [
    { date: "2025-04-20", time: "2 PM", desc: "Room Night Charge", qty: 2, rate: 1200, category: "Room", source: "Online Booking" },
    { date: "2025-04-21", time: "9 AM", desc: "Breakfast", qty: 2, rate: 300, category: "Food", source: "Restaurant" },
    { date: "2025-04-22", time: "5 PM", desc: "Laundry Service", qty: 3, rate: 200, category: "Service", source: "Housekeeping" },
    { date: "2025-04-23", time: "8 PM", desc: "Dinner", qty: 2, rate: 500, category: "Food", source: "Restaurant" },
    { date: "2025-04-24", time: "11 AM", desc: "Mini Bar", qty: 4, rate: 250, category: "Food", source: "Room Service" },
    { date: "2025-04-25", time: "3 PM", desc: "Room Night Charge", qty: 1, rate: 1000, category: "Room", source: "Room Service" },
    { date: "2025-04-26", time: "6 AM", desc: "Morning Tea", qty: 2, rate: 150, category: "Food", source: "Room Service" }
];

const months = [
    "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
];

function loadTable() {
    const tbody = document.getElementById('charge-breakdown-tbody');
    data.forEach(a_data => {
        const date = new Date(a_data.date);
        const tr = document.createElement('tr');
        tr.innerHTML =
            `
        <td>${months[date.getMonth()]} ${date.getDate()}</td>
        <td>${a_data.time}</td>
        <td>${a_data.desc}</td>
        <td>${a_data.qty}</td>
        <td>${a_data.rate} Tk</td>
        <td>${a_data.rate * a_data.qty}</td>
        <td>${a_data.category}</td>
        <td>${a_data.source}</td>
        `
        tbody.appendChild(tr);
    })
}
loadTable();