const bookings = [
    {
        bookingId: 'BK20250518A1',
        bookingType: 'Individual',
        checkIn: '2025-06-01',
        checkOut: '2025-06-04',
        nights: 3,
        roomType: 'Deluxe King',
        guestCount: 2,
        totalPrice: '$360'
    },
    {
        bookingId: 'BK20250518B2',
        bookingType: 'Group',
        checkIn: '2025-07-10',
        checkOut: '2025-07-15',
        nights: 5,
        roomType: 'Standard Twin (x5 rooms)',
        guestCount: 10,
        totalPrice: '$1500'
    },
    {
        bookingId: 'BK20250518C3',
        bookingType: 'Corporate',
        checkIn: '2025-08-05',
        checkOut: '2025-08-07',
        nights: 2,
        roomType: 'Executive Suite (x2 rooms)',
        guestCount: 4,
        totalPrice: '$1000'
    },
    {
        bookingId: 'BK20250518D4',
        bookingType: 'Online',
        checkIn: '2025-06-20',
        checkOut: '2025-06-21',
        nights: 1,
        roomType: 'Standard Single',
        guestCount: 1,
        totalPrice: '$90'
    },
    {
        bookingId: 'BK20250518E5',
        bookingType: 'Walk-in',
        checkIn: '2025-05-17',
        checkOut: '2025-05-19',
        nights: 2,
        roomType: 'Deluxe Queen',
        guestCount: 2,
        totalPrice: '$250'
    }
];

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
        </div>
        <button>Cancel</button>
        `
        parentBookingsDiv.appendChild(div);

    })

}

displayBookingsHistory();
