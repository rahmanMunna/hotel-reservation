function handleAddRoom() {
    const roomType = document.getElementById('room-type').value.trim();
    const roomNo = document.getElementById('room-no').value.trim();
    const bedType = document.getElementById('bed-type').value.trim();
    const floor = document.getElementById('floor').value.trim();
    const capacity = document.getElementById('capacity').value.trim();
    const price = document.getElementById('price-per-night').value.trim();
    const availability = document.getElementById('availability').value.trim();
    let amenities = [];

    const roomInfo = [
        roomType,
        roomNo,
        bedType,
        floor,
        capacity,
        price,
        availability
    ];

    const checkBoxes = document.getElementsByClassName('amenity-checkbox');
    for (const checkbox of checkBoxes) {
        if (checkbox.checked) {
            amenities.push(checkbox.value);
        }
    }

    if (!isEmpty(roomInfo)) {
        showErrorMessage("Please fill in all required fields.");
        return false;
    }

    if (amenities.length === 0) {
        showErrorMessage("Please select at least one amenity.");
        return false;
    }

    if (floor <= 0 || price <= 0 || capacity <= 0) {
        showErrorMessage("Floor, Capacity and Price must be positive numbers.");
        return false;
    }

    // Clear error message if all validations pass
    showErrorMessage("");
    return true;
}

const isEmpty = (elements) => {
    for (const element of elements) {
        if (element.trim().length === 0) {
            return false;
        }
    }
    return true;
};

function showErrorMessage(msg) {
    const errorMsg = document.getElementById("error-msg");
    errorMsg.innerHTML = msg;
    errorMsg.style.color = 'red';
}
