// const bookedDates = [2, 4, 5, 6, 12, 16, 18];
const bookedDates = [
    "2025-03-10", // March
    "2025-03-22",
    "2025-04-05", // April
    "2025-04-14",
    "2025-05-02", // May
    "2025-05-04",
    "2025-05-05",
    "2025-05-06",
    "2025-05-12",
    "2025-05-16",
    "2025-05-18",
    "2025-06-03", // June
    "2025-06-17",
    "2025-07-01", // July
    "2025-07-15",
    "2025-08-08", // August
    "2025-08-20"
];


const [currentYear, currentMonth] = currentMonthAndYear();
const dates = generateDate(currentYear, currentMonth);
displayDates(dates, currentMonth, currentYear);

function displayDates(dates, currentMonth, currentYear) {
    const boxes = document.getElementsByClassName("dates");
    const calenderDiv = document.getElementById('dates-day');
    let startingIndex = dates.day[0];
    let dateCount = 0;
    clearAllBoxes(boxes);
    // console.log(boxes.length)
    while (dateCount < dates.date.length) {
        boxes[startingIndex].innerHTML = dates.date[dateCount];
        startingIndex++;
        dateCount++;
    }
    markBookedDate(boxes, currentMonth, currentYear);
}
function markBookedDate(boxes, currentMonth, currentYear) {
    // Pad month to 2 digits
    const paddedMonth = (currentMonth).toString().padStart(2, '0'); // pad with 0 upto reaches 2 digit

    for (const box of boxes) {
        const day = box.innerText.trim();
        const paddedDay = (day).toString().padStart(2, '0');

        const date = `${currentYear}-${paddedMonth}-${paddedDay}`;

        if (bookedDates.includes(date)) { // array.includes(searchElement, fromIndex)
            box.style.backgroundColor = "red";
            box.style.color = "white";
        }
    }
}


function clearAllBoxes(boxes) {
    let count = 0;
    while (count < 42) {
        boxes[count].innerHTML = "";
        boxes[count].style.backgroundColor = 'rgb(189, 225, 213)';
        boxes[count].style.color = ' rgb(183, 17, 69)';
        count++;
    }
}

function generateDate(year, month) {
    const currentDate = new Date(year, month, 1)
    const dates = {
        date: [],
        day: []
    }

    while (currentDate.getMonth() == month) {
        dates.date.push(currentDate.getDate());
        dates.day.push(currentDate.getDay());
        currentDate.setDate(currentDate.getDate() + 1);
    }
    return dates;
}

function currentMonthAndYear() {
    const currentMonthInfo = document.getElementById('year-month').classList.value;
    let [currentYear, currentMonth] = currentMonthInfo.split('-');
    return [currentYear, currentMonth];;
}

function calculateNextMonthAndYear() {
    let [currentYear, currentMonth] = currentMonthAndYear();
    if (parseInt(currentMonth) === 11) {
        currentMonth = 0;
        currentYear = parseInt(currentYear) + 1;
        return [currentYear, currentMonth];
    }
    return [currentYear, parseInt(currentMonth) + 1];
}
function calculatePreviousMonthAndYear() {
    let [currentYear, currentMonth] = currentMonthAndYear();
    if (parseInt(currentMonth) === 0) {
        currentMonth = 11;
        currentYear = parseInt(currentYear) - 1;
        return [currentYear, currentMonth]
    }
    return [currentYear, currentMonth - 1]

}

function displayPreviousMonthCalendar() {
    let [year, previousMonth] = calculatePreviousMonthAndYear();
    const currentMonthInfo = document.getElementById('year-month');
    currentMonthInfo.classList.value = year + "-" + previousMonth;
    showMonthAndYear(year, previousMonth, currentMonthInfo);
    const dates = generateDate(year, previousMonth);
    displayDates(dates,previousMonth,year)

}

function displayNextMonthCalendar() {
    let [year, nextMonth] = calculateNextMonthAndYear();
    const currentMonthInfo = document.getElementById('year-month');
    currentMonthInfo.classList.value = year + "-" + nextMonth;
    showMonthAndYear(year, nextMonth, currentMonthInfo);
    const dates = generateDate(year, nextMonth);
    displayDates(dates,nextMonth,year)
}

function showMonthAndYear(year, month, currentMonthInfo) {
    const monthNames = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ];

    currentMonthInfo.innerHTML = `${year}, ${monthNames[month]}`;

}