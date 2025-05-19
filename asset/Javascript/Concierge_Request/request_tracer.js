import servicesData from "./services_data.js";
alert();

const placedOrder = JSON.parse(localStorage.getItem('request-order'));

let requestedOrders = [];
for (const serviceData of servicesData) {
    for (const item of serviceData.items) {
        for (const ordered of placedOrder) {
            if (ordered === item.id) {
                //make an object of the item and push to requestOrder array
                const order = {
                    category: serviceData.category,
                    items: item
                }
                requestedOrders.push(order);
            }
        }
    }
}


function displayRequestOrders() {
    for (const requestedOrder of requestedOrders) {

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

displayRequestOrders();