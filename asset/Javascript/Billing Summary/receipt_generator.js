const reservation = {
    guestName: "Alice Johnson",
    roomNumber: 203,
    reservationId: "#A90324",
    checkInDate: "2025-05-20",
    checkOutDate: "2025-05-23",
    numberOfNights: 3
};
const charges = [
    {
        date: "2025-04-25",
        description: "Room Night Charge",
        quantity: 1,
        unitPrice: 1000
    },
    {
        date: "2025-04-26",
        description: "Room Service",
        quantity: 2,
        unitPrice: 150
    },
    {
        date: "2025-04-26",
        description: "Laundry",
        quantity: 3,
        unitPrice: 50
    },
    {
        date: "2025-04-27",
        description: "Mini Bar",
        quantity: 1,
        unitPrice: 300
    }
];
const paymentSummary = {
    totalAmountDue: "3000 Tk",
    payedAmount: "3000 Tk",
    paymentMethod: "MasterCard (**** **** **** 5678)",
    paymentDate: "May 10, 2025",
    balanceDue: "0.00 Tk"
};
const months = [
    "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
];



function loadReservationDetails() {
    const guestName = document.getElementById('guest-name');
    const roomNumber = document.getElementById('room-number');
    const reservationId = document.getElementById('reservation-id');
    const checkInDate = document.getElementById('check-in-date');
    const checkOutDate = document.getElementById('check-out-date');
    const numberOfNights = document.getElementById('number-of-nights');

    guestName.innerHTML = `Guest Name : ${reservation.guestName}`;
    roomNumber.innerHTML = `Room number : ${reservation.roomNumber}`;
    reservationId.innerHTML = `Reservation Id : ${reservation.reservationId}`;
    checkInDate.innerHTML = `check-in-date : ${reservation.checkInDate}`;
    checkOutDate.innerHTML = `check-out-date : ${reservation.checkOutDate}`;
    numberOfNights.innerHTML = `Number of nights : ${reservation.numberOfNights}`;
}

function loadCharges() {
    const chargesTbody = document.getElementById('charges-tbody');
    charges.forEach(charge => {
        const tr = document.createElement('tr');
        const date = new Date(charge.date);
        tr.innerHTML =
            `
        <td>${date.getDate() + " " + months[date.getMonth()]}</td>
        <td>${charge.description}</td>
        <td>${charge.quantity}</td>
        <td>${charge.unitPrice} Tk</td>
        <td>${charge.unitPrice * charge.quantity} Tk</td>
        `
        chargesTbody.appendChild(tr);
    })
}
function loadPaymentSummary() {
    const paymentSummaryTbody = document.getElementById('payment-summary-tbody');

    const rows = [
        ["Total Amount Due", paymentSummary.totalAmountDue],
        ["Payed Amount", paymentSummary.payedAmount],
        ["Payment Method", paymentSummary.paymentMethod],
        ["Payment Date", paymentSummary.paymentDate],
        ["Balance Due", paymentSummary.balanceDue]
    ];

    rows.forEach(row => {
        const tr = document.createElement('tr');
        tr.innerHTML =
            `
        <td>${row[0]}</td>
        <td>${row[1]}</td>
        `
        paymentSummaryTbody.appendChild(tr);
    })

}

document.getElementById('download-pdf').addEventListener('click', () => {
    const btn = document.getElementById('download-pdf');
    btn.setAttribute('hidden', 'true');
    window.print();
    btn.removeAttribute('hidden');
})

loadReservationDetails();
loadCharges();
loadPaymentSummary();