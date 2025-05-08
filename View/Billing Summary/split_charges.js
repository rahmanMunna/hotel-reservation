function evenlySplitted() {
    const input = document.getElementsByClassName('input')
}

function manuallySplitted() {

}
function chargeOwnership() {

}

function handleSplitModeChange(splittedMode) {
    if (!isSelected(splittedMode)) {
        alert('Select an option');
        return false;
    }
    // alert(splittedMode);
    if (splittedMode === "Evenly Splitted") {
        // alert();
        evenlySplitted();


    }
    else if (splittedMode === "Manually Splitted") {
        manuallySplitted();

    }
    else if (splittedMode === "Charge Ownership") {
        chargeOwnership();

    }
}

function isSelected(splittedMode) {
    if (splittedMode === '') {
        return false;
    }
    return true;
}