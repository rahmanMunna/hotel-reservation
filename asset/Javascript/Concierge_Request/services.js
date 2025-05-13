import servicesData from "./services_data.js";

// console.log(servicesData)


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
            <p>${item.description} <span>${item.icon}</span></p>
            <h3>Price : ${item.price}</h3>
            <button class="order-book-btn">Order/Book</button>
            `
            card.setAttribute('class', 'inner-card');
            card.setAttribute('id', item.id);
            allCardDiv.appendChild(card);
        })
        allCardDiv.setAttribute('class', 'card');
        categoryDiv.appendChild(allCardDiv);
        services.appendChild(categoryDiv);


    }

}
displayServices();


//Add to localStorage
let placedOrders = JSON.parse(localStorage.getItem('request-order')) || []
console.log(placedOrders);
let requestOrder = [...placedOrders];
const btns = document.getElementsByTagName('button');
for (const btn of btns) {
    btn.addEventListener('click', (e) => {
        const card = e.target.parentElement;

        checkForDuplicate(requestOrder, card.id);
        localStorage.setItem('request-order', JSON.stringify(requestOrder));
    })
}

function checkForDuplicate(itemList, itemWishToAdd) {
    for (const item of itemList) {
        if (item === itemWishToAdd) {
            alert("❌ Failed to place order! Item already in ordered");
            return;
        }
    }
    itemList.push(itemWishToAdd);
    alert("✅ Order placed successfully!");
}


  