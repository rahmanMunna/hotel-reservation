const guest = {
    name:'XYZ',
    reservationId:'#8768879',
    roomType:'Deluxe Suite',
    rateType:'',
    checkInDate: '2025-05-17',
    bookingDate:'2025-05-17'
}
console.log(guest)

function start(){

    const months = [
  "January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
];


    const guestName  =document.getElementById('guest-name');
    const reservationIdComponent  = document.getElementById('reservation-id');
    const roomType = document.getElementById('room-type');
    const checkInDateComponent = document.getElementById('check-in-date');
    const bookingDate = document.getElementById('bookingDate');

    const checkInDateFormat = new Date(guest.checkInDate);
    const bookingDateFormat = new Date(guest.checkInDate);

    guestName.innerHTML = guest.name;
    reservationIdComponent.innerHTML =guest.reservationId;
    roomType.innerHTML = guest.rateType;
    checkInDateComponent.innerHTML = `${months[checkInDateFormat.getMonth()]} ${checkInDateFormat.getDate()}, ${checkInDateFormat.getFullYear()}`;
    bookingDate.innerHTML = `${months[bookingDateFormat.getMonth()]} ${bookingDateFormat.getDate()}, ${bookingDateFormat.getFullYear()}`;


}
start();