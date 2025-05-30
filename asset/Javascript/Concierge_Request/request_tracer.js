let requestedServices = [];

let xttp = new XMLHttpRequest();
xttp.open('get', '../../model/requests_data.php', true);
xttp.send();
xttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        requestedServices = JSON.parse(this.response);
        displayRequestOrders();
        // console.log(requestedServices);
    }
}


function displayRequestOrders() {
    for (const requestedOrder of requestedServices) {

        console.log(requestedOrder);

        const main = document.getElementsByTagName('main');
        console.log(main)

        const div = document.createElement('div');
        div.setAttribute('class', 'order-card');

        div.innerHTML =
            `
                    <div id="card-heading">
                        <h2>Request_id : #${requestedOrder.request_id}</h2>
                        <h2>Request Time : ${requestedOrder.request_time}</h2>
                        <h2>User id : ${requestedOrder.user_id}</h2>

                    </div>
                
                    <div >
                        <p>
                            Total Price: ${requestedOrder.total_price}
                        </p>
                        <button id="status-btn">Pending</button>
                    </div>
                    `
        main[0].appendChild(div);


    }
}

