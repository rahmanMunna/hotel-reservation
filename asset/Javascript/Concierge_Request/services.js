// import servicesData from "./services_data.js";

// let servicesData = [];

// let xttp = new XMLHttpRequest();
// xttp.open('get', '../../model/services_data.php', true);
// xttp.send();
// xttp.onreadystatechange = function () {
//     if (this.readyState == 4 && this.status == 200) {
//         servicesData = JSON.parse(this.response);
//         console.log(servicesData);
//         displayServices();

//     }
// }

const servicesData = [
    {
        category: "Food & Drinks",
        items: [
            { id: "fd-1", name: "Pancakes Breakfast", description: "Fluffy pancakes with syrup.", price: 150, icon: "🍳" },
            { id: "fd-2", name: "Fresh Juice", description: "Orange or Apple Juice.", price: 120, icon: "🥤" },
            { id: "fd-3", name: "Continental Breakfast", description: "Croissant, coffee, and fruit.", price: 160, icon: "🥐" },
            { id: "fd-4", name: "Lunch Combo", description: "Sandwich, salad, and drink.", price: 170, icon: "🥪" },
            { id: "fd-5", name: "Gourmet Dinner", description: "Three-course chef's dinner.", price: 300, icon: "🍽️" },
            { id: "fd-6", name: "Midnight Snack", description: "Cookies and milk delivered.", price: 130, icon: "🍪" }
        ]
    },
    {
        category: "Spa & Wellness",
        items: [
            { id: "sw-1", name: "30-min Back Massage", description: "Relaxing massage therapy.", price: 200, icon: "💆" },
            { id: "sw-2", name: "Sauna Session", description: "45 minutes in sauna.", price: 180, icon: "🔥" },
            { id: "sw-3", name: "Facial Treatment", description: "Rejuvenating skin therapy.", price: 220, icon: "🧖" },
            { id: "sw-4", name: "Aromatherapy", description: "Essential oils relaxation.", price: 190, icon: "🌸" },
            { id: "sw-5", name: "Yoga Class", description: "Morning outdoor yoga session.", price: 150, icon: "🧘" },
            { id: "sw-6", name: "Hot Stone Massage", description: "Therapeutic hot stone massage.", price: 250, icon: "🪨" }
        ]
    },
    {
        category: "Local Tours",
        items: [
            { id: "lt-1", name: "City Sightseeing", description: "3-hour bus tour around the city.", price: 300, icon: "🚌" },
            { id: "lt-2", name: "River Cruise", description: "2-hour river cruise with snacks.", price: 270, icon: "🚤" },
            { id: "lt-3", name: "Historical Walk", description: "Guided walk through old town.", price: 200, icon: "🚶‍♂️" },
            { id: "lt-4", name: "Museum Tour", description: "Visit top museums with a guide.", price: 230, icon: "🏛️" },
            { id: "lt-5", name: "Wine Tasting", description: "Local vineyard wine tasting tour.", price: 310, icon: "🍷" },
            { id: "lt-6", name: "Mountain Hike", description: "Half-day guided mountain hike.", price: 260, icon: "🥾" }
        ]
    },
    {
        category: "Room Amenities",
        items: [
            { id: "ra-1", name: "Extra Pillow", description: "Request an extra pillow.", price: 100, icon: "🛏️" },
            { id: "ra-2", name: "Baby Crib", description: "Baby crib for room.", price: 100, icon: "🍼" },
            { id: "ra-3", name: "Mini Fridge", description: "Request a mini fridge.", price: 150, icon: "🧊" },
            { id: "ra-4", name: "Microwave", description: "Microwave for room use.", price: 150, icon: "🍲" },
            { id: "ra-5", name: "Extra Towels", description: "Additional bath towels.", price: 100, icon: "🛁" },
            { id: "ra-6", name: "Bathrobe", description: "Request a cozy bathrobe.", price: 120, icon: "🧥" }
        ]
    }
];


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

displayServices();




