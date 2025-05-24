let servicesData = [];

let xttp = new XMLHttpRequest();
xttp.open('get', '../../model/services_data.php', true);
xttp.send();
xttp.onreadystatechange = function () {
  if (this.readyState == 4 && this.status == 200) {
    servicesData = JSON.parse(this.response);
    console.log(servicesData);

  }
}


export default servicesData;
