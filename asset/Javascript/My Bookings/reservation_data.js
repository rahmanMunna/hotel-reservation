let reservations = [];
let xttp = new XMLHttpRequest();
xttp.open('get', '../../../model/reservations_data.php', true);
xttp.send();
xttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        reservations = JSON.parse(this.response);
        console.log(reservations);
        
    }
}

