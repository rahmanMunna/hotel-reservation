const roomDetails = [
  {
    "roomType": "Deluxe King",
    "quantityRequested": 10,
    "pricePerNight": 130,
    "availableRooms": 20,
    "notes": "Close to elevator"
  },
  {
    "roomType": "Double Queen",
    "quantityRequested": 8,
    "pricePerNight": 115,
    "availableRooms": 15,
    "notes": "Quiet floor preferred"
  },
  {
    "roomType": "Suite Room",
    "quantityRequested": 3,
    "pricePerNight": 220,
    "availableRooms": 5,
    "notes": "VIP guests only"
  },
  {
    "roomType": "Standard Twin",
    "quantityRequested": 6,
    "pricePerNight": 95,
    "availableRooms": 10,
    "notes": "For team members"
  },
  {
    "roomType": "Executive King",
    "quantityRequested": 2,
    "pricePerNight": 170,
    "availableRooms": 4,
    "notes": "Late check-out required"
  }
]
let rowCount = 0;

function displayTbody() {
  const tbody = document.getElementById('tbody');
  const tr = document.createElement('tr');

  tr.innerHTML = `
  <td>
    <select onchange="handleRoomType(this.value, ${++rowCount})" name="" id="room-types-${++rowCount}">
      <option value="">Select Room Type</option>
      ${roomDetails.map(roomDetail => `
        <option value="${roomDetail.roomType}">${roomDetail.roomType}</option>
      `).join('')}
    </select>
  </td>

  <td>
    <input type="number" name="" id="qty-requested-${++rowCount}" />
  </td>

  <td id="price-per-night-${++rowCount}"></td>
  <td id="available-rooms-${++rowCount}"></td>
  <td id="notes-${++rowCount}"></td>

  <td>
    <button onclick="addRow()">Add</button>
    <button onclick="removeRow(${++rowCount})">Remove</button>
  </td>
`;

  tbody.appendChild(tr);
}

function addRow(){
  
}

function handleAddRow() {
  // displayTbody();

}

function setPrice(row, roomType) {
  const pricePerNight = document.getElementById(`price-per-night-${row}`);
  const room = roomDetails.find(roomDetail => roomDetail.roomType === roomType);
  if (room) {
    pricePerNight.innerHTML = `$${room.pricePerNight}`;
  }
}

function setAvailableRooms(row, roomType) {
  const availableRooms = document.getElementById(`available-rooms-${row}`);
  const room = roomDetails.find(roomDetail => roomDetail.roomType === roomType);
  if (room) {
    availableRooms.innerHTML = room.availableRooms;
  }
}

function setNotes(row, roomType) {
  const notesComponent = document.getElementById(`notes-${row}`);
  const room = roomDetails.find(roomDetail => roomDetail.roomType === roomType);
  if (room) {
    notesComponent.innerHTML = room.notes;
  }
}

function handleRoomType(roomType, row) {
  setAvailableRooms(row, roomType);
  setNotes(row, roomType);
  setPrice(row, roomType);
}

//call when submit
function handleSubmit() {
  const groupName = document.getElementById("group-name").value;
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const phone = document.getElementById("phone").value;
  const checkInDate = document.getElementById("check-in-date").value;
  const checkOutDate = document.getElementById("check-out-date").value;
  const numberOfGuest = document.getElementById("number-of-guest").value;

  const paymentOption = document.getElementById('select-payment-options').value;

  const formData = [groupName, name, email, phone, checkInDate, checkOutDate, numberOfGuest, paymentOption];
  console.log(formData)


  if (!isEmpty(formData)) {
    alert("Fill all the field");
    return false;
  }
  if (!isEmailValid(email)) {
    alert("Enter a valid Email");
    return false;
  }
  if (phone.length !== 11) {
    alert("Enter a valid Phone number");
    return false;
  }
  if (!isValidDateSelected(checkInDate, checkOutDate)) {
    alert("Enter a valid Date");
    return false;
  }
  if (numberOfGuest <= 0) {
    alert("Enter a valid Guest number");
    return false;
  }
  if (rowCount === 0) {
    alert("Add a row");
    return false;
  }
  return false;

}

const isEmpty = (elements) => {
  for (const element of elements) {
    if (element.trim().length === 0) {
      return false;
    }
  }
  return true;
};
const isEmailValid = (email) => {

  if (!email.includes('@')) {
    // showErrorMessage("Email must contain @");
    return false;
  }

  const [localPart, domain] = email.split('@');

  if (domain !== "gmail.com") {
    // showErrorMessage("Email must be gmail.com");
    return false;
  }

  if (!isAllLowerCase(localPart) || isFirstCharacterNumber(localPart) || localPart.includes(' ')) {
    // showErrorMessage("Invalid email format (must be all lowercase, no starting number, no spaces");
    return false;
  }

  return true;
};
const isAllLowerCase = (text) => {
  for (let i = 0; i < text.length; i++) {
    if (text[i] >= 'A' && text[i] <= 'Z') {
      return false;
    }
  }
  return true;
};

const isFirstCharacterNumber = (text) => {
  const ch = text[0];
  return ch >= '0' && ch <= '9';
};
const isValidDateSelected = (checkInDate, checkOutDate) => {
  const checkIn = new Date(checkInDate);
  const checkOut = new Date(checkOutDate);

  if (checkIn >= checkOut) {
    return false;
  }
  return true;
}