function setCancellationDate(date) {
    const cancellationDate = document.getElementById('set-cancellation-date');
    cancellationDate.innerHTML = date;
}

function setNotes(notes) {
    const notesTd = document.getElementById('notes');
    notesTd.innerHTML = notes;
}
//start
function handleSaveButton() {

    const cancellationDate = document.getElementById('cancellation-date').value;
    const reasonForCancellation = document.getElementById('reason-for-cancellation').value;

    // console.log(cancellationDate, reasonForCancellation);

    if (cancellationDate.length === 0 || reasonForCancellation.length === 0) {
        alert('Fill all the field');
        return false;
    }
    setCancellationDate(cancellationDate);
    setNotes(reasonForCancellation);

    return true;

} 