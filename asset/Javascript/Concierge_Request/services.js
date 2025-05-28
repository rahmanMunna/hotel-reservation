// import servicesData from "./services_data.js";

let servicesData = [];

let xttp = new XMLHttpRequest();
xttp.open('get', '../../model/services_data.php', true);
xttp.send();
xttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        servicesData = JSON.parse(this.response);
        console.log(servicesData);
        displayServices();

    }
}
function displayServices() {
    const services = document.getElementById('services');
    // console.log(services);

    for (const service of servicesData) {
        const categoryDiv = document.createElement('div');
        const h1 = document.createElement('h1');
        h1.textContent = service.category;
        categoryDiv.appendChild(h1);

        const allCardDiv = document.createElement('div');
        service.items.map((item) => {
            // console.log(item);
            const card = document.createElement('div');
            card.innerHTML = `
            <h2>Name : ${item.name}</h2>
            <p>${item.description}</p>
            <h3>Price : ${item.price}</h3>
            `
            const btn = document.createElement('button');
            btn.classList.add("order-book-btn");
            btn.innerHTML = "Order";
            btn.addEventListener('click', () => handleOrder(item.id, item.price))
            card.appendChild(btn);



            card.setAttribute('class', 'inner-card');
            card.setAttribute('id', item.id);
            allCardDiv.appendChild(card);
        })
        allCardDiv.setAttribute('class', 'card');
        categoryDiv.appendChild(allCardDiv);
        services.appendChild(categoryDiv);


    }

}

function handleOrder(service_id, price) {
    const date = new Date();
    const year = date.getFullYear();
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const day = String(date.getDate()).padStart(2, '0');
    const onlyDate = `${year}-${month}-${day}`;
    xttp.open('post', '../../model/addToServiceRequest.php', true);
    xttp.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
    xttp.send("service_id="+service_id+"%price="+price+"%onlyDate"+onlyDate);

    xttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.response);
        }
    }
}




