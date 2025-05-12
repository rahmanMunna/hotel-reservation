const guests = [
    { id: 1, name: 'A' },
    { id: 2, name: 'B' },
    { id: 3, name: 'C' },
    { id: 4, name: 'D' }
];
const charges = [
    { id: 1, date: '01/05/2025', description: 'Room Night', amount: 900 },
    { id: 2, date: '02/05/2025', description: 'Dinner', amount: 300 },
    { id: 3, date: '03/05/2025', description: 'Mini Bar', amount: 150 }
];

function loadTableHeader() {
    const tableHeader = document.getElementById('table-header');
    guests.forEach(guest => {
        const th = document.createElement('th');
        th.innerHTML = guest.name;
        tableHeader.appendChild(th);
    })
    const splitColumn = document.createElement('th');
    splitColumn.innerHTML = 'Split Mode'
    tableHeader.appendChild(splitColumn);

}

function loadTableData() {
    const tbody = document.getElementById('table-body');

    charges.forEach(charge => {
        const tr = document.createElement('tr');
        tr.innerHTML =
            `
        <td>${charge.id}</td>
        <td>${charge.date}</td>
        <td>${charge.description}</td>
        <td id="amount-${charge.id}">${charge.amount}</td>
        `
        for (let i = 0; i < guests.length; i++) {
            const td = document.createElement('td');
            const input = document.createElement('input');
            input.type = 'number';
            input.placeholder = 'Enter Amount'
            input.disabled = true;
            input.setAttribute('class', `${charge.id}`);
            td.appendChild(input);
            tr.appendChild(td);
        }
        const td = document.createElement('td');
        td.innerHTML =
            `<select class= 'split-mode' name="" onchange="handleSplitModeChange(this.value,${charge.id})">
             <option value="">Split Mode</option>
             <option value="Evenly Splitted">Evenly Splitted</option>
             <option value="Manually Splitted">Manually Splitted</option>
             
            </select>
        `
        tr.appendChild(td);
        tbody.appendChild(tr);
    })

    //summary data
    const tbodySummary = document.getElementById('summary-table-body');
    guests.forEach(guest => {
        const tr = document.createElement('tr');
        const guestName = document.createElement('td');
        const balance = document.createElement('td');
        guestName.innerHTML = `${guest.name}`;
        balance.setAttribute('id', guest.name);

        tr.appendChild(guestName)
        tr.appendChild(balance)
        tbodySummary.appendChild(tr);
    })
}
function updateSummaryTable() {

}

function evenlySplitted(splittedMode, id) {
    const inputs = document.getElementsByClassName(id);
    const amount = document.getElementById('amount-' + id).innerHTML;

    const amountPerPerson = Math.round(parseInt(amount) / inputs.length);
    // console.log(amount.innerHTML);
    for (const input of inputs) {
        // console.log(input)
        input.value = amountPerPerson;
        input.disabled = true;
    }
}
function manuallySplitted(id) {
    const inputs = document.getElementsByClassName(id);
    const amount = document.getElementById('amount-' + id).innerHTML.trim();

    // console.log(inputs, amount);

    let state = false;
    let totalAmount = 0;
    for (const input of inputs) {
        input.disabled = false;
        input.addEventListener("change", () => {
            // console.log(amount, input.value)
            if (parseInt(input.value) > parseInt(amount) || totalAmount > parseInt(amount)) {

                alert(`${id} no invalid input amount`);
                state = true;
                return;
            }

            else {
                totalAmount += parseInt(input.value);
                console.log(totalAmount, parseInt(input.value));
            }
        })


    }
    if (state) {
        alert('InValid input');
    }
    else if (totalAmount > parseInt(amount)) {
        alert('Out of Amount');
    }

}
function chargeOwnership() {

}

function handleSplitModeChange(splittedMode, id) {
    if (!isSelected(splittedMode)) {
        return false;
    }
    if (splittedMode === "Evenly Splitted") {
        evenlySplitted(splittedMode, id);
    }
    else if (splittedMode === "Manually Splitted") {
        manuallySplitted(id);
    }
}

function isSelected(splittedMode) {
    if (splittedMode === '') {
        return false;
    }
    return true;
}

function handleConfirm() {
    const split_options = document.getElementsByClassName('split-mode');
    const inputs = document.getElementsByTagName("input");
    // console.log(inputs)

    //check is any mode is selected for all row
    // for (const split_option of split_options) {

    //     if (split_option.value === "") {
    //         alert('Select a split mode');
    //         return;
    //     }

    // }

    // //check all input field has value
    // for (const input of inputs) {

    //     if (input.value === "" || parseInt(input.value) < 0) {
    //         alert('Enter a valid amount');
    //         return;
    //     }
    // }

    //validate all charges inserted correctly

    charges.forEach(charge => {
        const inputs = document.getElementsByClassName(charge.id);
        console.log(inputs);
        let totalAmount = 0;
        for (const input of inputs) {
            totalAmount = totalAmount + parseInt(input.value);
        }
        console.log(charge.amount,totalAmount)
        if (totalAmount < charge.amount) {
            alert(`row-${charge.id} has total amount doesn't match`);
            return false;
        }
    })



}

loadTableHeader();
loadTableData();