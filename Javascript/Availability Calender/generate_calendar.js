const [currentYear, currentMonth] = currentMonthAndYear();
const dates = generateDate(currentYear, currentMonth);
displayDates(dates);

function displayDates(dates) {
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
    // console.log(dateCount, dates.date.length)

}

function clearAllBoxes(boxes) {
    let count = 0;
    while (count < 42) {
        boxes[count].innerHTML = "";
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
    displayDates(dates)

}

function displayNextMonthCalendar() {
    let [year, nextMonth] = calculateNextMonthAndYear();
    const currentMonthInfo = document.getElementById('year-month');
    currentMonthInfo.classList.value = year + "-" + nextMonth;
    showMonthAndYear(year, nextMonth, currentMonthInfo);
    const dates = generateDate(year, nextMonth);
    displayDates(dates)
}

function showMonthAndYear(year, month, currentMonthInfo) {
    const monthNames = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ];

    currentMonthInfo.innerHTML = `${year}, ${monthNames[month]}`;

}