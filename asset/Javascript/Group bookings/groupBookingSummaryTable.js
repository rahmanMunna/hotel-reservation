function displaySummaryTable(formData) {
    const tds = document.getElementsByClassName("summary-td");
    console.log(tds);
    console.log(formData);

    for (let c = 0; c < tds.length; c++) {
        if (tds[c]) {
            tds[c].innerHTML = formData[c];
        }
    }
}
