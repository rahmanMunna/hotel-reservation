function handledSelectedDate() {
    const dates = document.getElementsByClassName('dates');

    for (const date of dates) {
        date.addEventListener('click', () => {
            const selectedDate = date.innerHTML;
            setCheckInDate(selectedDate)
            changeSelectedDateColor(date);
        })
    }
}
handledSelectedDate();

function setCheckInDate(date) {
    const monthNames = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ];

    const monthInfo = document.getElementById('year-month');
    const [year, month] = monthInfo.classList.toString().split('-');
    const checkInDate = document.getElementById('check-in-date');
    checkInDate.innerHTML = `${date} ${monthNames[month]}, ${year}`;
}

function setCheckOutDate(date) {
    const monthNames = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ];

    const monthInfo = document.getElementById('year-month');
    const [year, month] = monthInfo.classList.toString().split('-');
    const checkInDate = document.getElementById('check-out-date');
    checkInDate.innerHTML = `${date} ${monthNames[month]}, ${year}`;
}

function changeSelectedDateColor(component) {
    component.style.backgroundColor = 'red'
    component.style.color = 'white'
}
function setNightCount(sign) {
    const night = document.getElementById('night-count');
    if (sign === '+') {

        night.innerHTML = parseInt(night.innerHTML) + 1;
    }
    else {
        night.innerHTML = parseInt(night.innerHTML) == 0 ? 0 : parseInt(night.innerHTML) - 1;
    }


}