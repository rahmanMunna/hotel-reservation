function displayBookingsHistory() {
    const parentBookingsDiv = document.getElementById('bookings-div');
    bookings.forEach(booking => {
        const div = document.createElement('div');
        div.classList.add('booking-card');
        div.innerHTML =
            `
        <div>
            <p>Booking ID: <span>${booking.bookingId}</span></p>
            <p>Booking Type: <span>${booking.bookingType}</span></p>
        </div>
        <div>
            <p>Check-in Date: <span>${booking.checkIn}</span></p>
            <p>Check-out Date: <span>${booking.checkOut}</span></p>
        </div>
        <div>
            <p>Room Type: <span>${booking.roomType}</span></p>
            <p>Number of Guests: <span>${booking.guestCount}</span></p>
        </div>
        <div>
            <p>Number of Nights: <span>${booking.nights}</span></p>
            <p>Total Price: <span>${booking.totalPrice}</span></p>
            <p>Total Price: <span>${booking.penalty}</span></p>
        </div>
        <button>Cancel</button>
        `
        parentBookingsDiv.appendChild(div);

    })

}

displayBookingsHistory();
