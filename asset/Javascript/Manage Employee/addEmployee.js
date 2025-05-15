function addEmployee() {
    const employeeInfo = [
        getFirstName(),
        getLastName(),
        getEmail(),
        getPhone(),
        getDob(),
        getRole(),
        getJoiningDate()
    ];
    console.log(employeeInfo);
    return false;
}

function getFirstName() {
    return document.getElementById('firstName').value;
}

function getLastName() {
    return document.getElementById('lastName').value;
}

function getEmail() {
    return document.getElementById('email').value;
}

function getPhone() {
    return document.getElementById('phone').value;
}

function getDob() {
    return document.getElementById('dob').value;
}

function getRole() {
    return document.getElementById('role').value;
}

function getJoiningDate() {
    return document.getElementById('joiningDate').value;
}
