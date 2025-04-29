
const servicesData = [    {
        category: "Food & Drinks",
        items: [
            {
                name: "Pancakes Breakfast",
                description: "Fluffy pancakes with syrup.",
                price: 15,
                icon: "🍳"
            },
            {
                name: "Fresh Juice",
                description: "Orange or Apple Juice.",
                price: 5,
                icon: "🥤"
            },
            {
                name: "Continental Breakfast",
                description: "Croissant, coffee, and fruit.",
                price: 18,
                icon: "🥐"
            },
            {
                name: "Lunch Combo",
                description: "Sandwich, salad, and drink.",
                price: 25,
                icon: "🥪"
            },
            {
                name: "Gourmet Dinner",
                description: "Three-course chef's dinner.",
                price: 70,
                icon: "🍽️"
            },
            {
                name: "Midnight Snack",
                description: "Cookies and milk delivered.",
                price: 10,
                icon: "🍪"
            }
        ]
    },
    {
        category: "Spa & Wellness",
        items: [
            {
                name: "30-min Back Massage",
                description: "Relaxing massage therapy.",
                price: 40,
                icon: "💆"
            },
            {
                name: "Sauna Session",
                description: "45 minutes in sauna.",
                price: 30,
                icon: "🔥"
            },
            {
                name: "Facial Treatment",
                description: "Rejuvenating skin therapy.",
                price: 50,
                icon: "🧖"
            },
            {
                name: "Aromatherapy",
                description: "Essential oils relaxation.",
                price: 35,
                icon: "🌸"
            },
            {
                name: "Yoga Class",
                description: "Morning outdoor yoga session.",
                price: 20,
                icon: "🧘"
            },
            {
                name: "Hot Stone Massage",
                description: "Therapeutic hot stone massage.",
                price: 55,
                icon: "🪨"
            }
        ]
    },
    {
        category: "Local Tours",
        items: [
            {
                name: "City Sightseeing",
                description: "3-hour bus tour around the city.",
                price: 60,
                icon: "🚌"
            },
            {
                name: "River Cruise",
                description: "2-hour river cruise with snacks.",
                price: 50,
                icon: "🚤"
            },
            {
                name: "Historical Walk",
                description: "Guided walk through old town.",
                price: 30,
                icon: "🚶‍♂️"
            },
            {
                name: "Museum Tour",
                description: "Visit top museums with a guide.",
                price: 40,
                icon: "🏛️"
            },
            {
                name: "Wine Tasting",
                description: "Local vineyard wine tasting tour.",
                price: 65,
                icon: "🍷"
            },
            {
                name: "Mountain Hike",
                description: "Half-day guided mountain hike.",
                price: 45,
                icon: "🥾"
            }
        ]
    },
    {
        category: "Room Amenities",
        items: [
            {
                name: "Extra Pillow",
                description: "Request an extra pillow.",
                price: 0,
                icon: "🛏️"
            },
            {
                name: "Baby Crib",
                description: "Baby crib for room.",
                price: 0,
                icon: "🍼"
            },
            {
                name: "Mini Fridge",
                description: "Request a mini fridge.",
                price: 10,
                icon: "🧊"
            },
            {
                name: "Microwave",
                description: "Microwave for room use.",
                price: 10,
                icon: "🍲"
            },
            {
                name: "Extra Towels",
                description: "Additional bath towels.",
                price: 0,
                icon: "🛁"
            },
            {
                name: "Bathrobe",
                description: "Request a cozy bathrobe.",
                price: 5,
                icon: "🧥"
            }
        ]
    }
];


function displayServices() {
    const services = document.getElementById('services');
    console.log(services);

    for (const service of servicesData) {
        const categoryDiv = document.createElement('div');
        const h1 = document.createElement('h1');
        h1.textContent = service.category;
        categoryDiv.appendChild(h1);

        const allCardDiv = document.createElement('div');
        service.items.map((item) => {
            const card = document.createElement('div');
            card.innerHTML = `
            <h2>Name : ${item.name}</h2>
            <p>${item.description} <span>${item.icon}</span> </p>
            <h3>Price : ${item.price}</h3>
            <button>Order/Book</button>
            `
            card.setAttribute('class','inner-card');
            allCardDiv.appendChild(card);
        })
        allCardDiv.setAttribute('class','card');
        categoryDiv.appendChild(allCardDiv);
        services.appendChild(categoryDiv);


    }

}
displayServices();