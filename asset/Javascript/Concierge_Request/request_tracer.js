let requestedServices = [];

let xttp = new XMLHttpRequest();
xttp.open('get', '../../../model/requests_data.php', true);
xttp.send();
xttp.onreadystatechange = function () {
  if (this.readyState == 4 && this.status == 200) {
    requestedServices = JSON.parse(this.response);
    console.log(requestedServices);
    displayRequestOrders();

  }
}




function displayRequestOrders() {
    for (const requestedOrder of requestedServices) {

        // console.log(requestedOrder);

        const main = document.getElementsByTagName('main');
        // console.log(main)

        const div = document.createElement('div');
        div.setAttribute('class', 'order-card');

        div.innerHTML =
            `
            <h1>Category : ${requestedOrder.category}</h1>
            <h2>Service Name : ${requestedOrder.items.name}</h2>
            <p>
                ${requestedOrder.items.description}
            </p>
            <div class="price-status">
                <p>
                    price: ${requestedOrder.items.price}
                </p>
                <button id="status-btn">Pending</button>
            </div>
            `
        main[0].appendChild(div);


    }
}

