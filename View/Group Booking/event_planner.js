// Assuming you have an array of events
const events = [
  {
    name: 'Welcome Dinner',
    date: '2025-05-15',
    startTime: '19:00',
    endTime: '21:00',
    venue: 'Banquet Hall A',
    guests: 80,
    setup: 'Banquet',
    duration: '2h',
    description: 'An intimate gathering to welcome guests, often featuring dinner and light entertainment.'
  },
  {
    name: 'Ceremony',
    date: '2025-05-16',
    startTime: '10:00',
    endTime: '11:00',
    venue: 'Garden',
    guests: 150,
    setup: 'Theater',
    duration: '1h',
    description: 'The main wedding ceremony, typically lasting between 30 minutes to an hour.'
  },
  {
    name: 'Reception',
    date: '2025-05-17',
    startTime: '18:00',
    endTime: '22:00',
    venue: 'Ballroom',
    guests: 200,
    setup: 'Banquet',
    duration: '4h',
    description: 'A celebration following the ceremony, including dinner, dancing, and other festivities.'
  }
]

function handleAddButton(){
  const groupName = document.getElementById("group-name").value;
  const startDate = document.getElementById('from-date').value;
  const endDate = document.getElementById('to-date').value;
  const groupContact = document.getElementById('number').value;
  const contactName = document.getElementById('name');

  const groupInfo = [groupName,groupContact,startDate,endDate,groupContact,contactName];

  if(!isEmpty(groupInfo)){
    alert("Fill all the field");
    return;
  }

  if(new Date(startDate) >= new Date(endDate)){
    alert("Enter a valid Date");
    return;
  }
  if(groupContact.length !== 11){
    alert("Enter a valid contact number");
    return;
  }
  setContactName(contactName);
  setEventDate(startDate,endDate);
  setGroupContact(groupContact);
  setGroupName(groupName);
  
  document.getElementById('save-event').disabled = false;

  return;
  
}

const isEmpty = (elements) => {
    for (const element of elements) {
        if (element.length === 0) {
            return false;
        }
    }
    return true;
};

function setGroupName(groupName){
  const groupNameSummary =document.getElementById('set-group-name');
  groupNameSummary.innerHTML = groupName;
}
function setGroupContact(number){
  const groupContactSummary = document.getElementById('set-group-contact');
  groupContactSummary.innerHTML = number;
}
function setContactName(contactName){
  const setContactName = document.getElementById('set-contact-name');
  setContactName.innerHTML = contactName;
}
function setEventDate(startDate,endDate){
  const monthNames = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ];
    const start = new Date(startDate);
    const end = new Date(endDate);

    const eventDate = document.getElementById('set-event-date');
    eventDate.innerHTML = `${monthNames[start.getMonth()]} ${start.getDate()} - ${monthNames[end.getMonth()]} ${end.getDate()} `

}

function handleSubmit(){
  const eventName = document.getElementsByName('event-name')[0].value;
  const date = document.getElementsByName('event-date')[0].value;
  const startTime = document.getElementsByName('event-time')[0].value;
  const endTime = document.getElementsByName('event-time')[1].value;
  const venue = document.getElementsByName('venue')[0].value;
  const numberOfGuests = document.getElementsByName('guests')[0].value;
  const setupType = document.getElementsByName('setup-type')[0].value;
  // const equipment = document.getElementsByName('equipment')[0].value;
  // const notes = document.getElementsByName('notes')[0].value;


  const addEventData = [eventName,date,startTime,endTime,venue,numberOfGuests,setupType];

  console.log(addEventData)
  if(!isEmpty(addEventData)){
    alert('Fill all the field');
    return false;
  }
  if(numberOfGuests<=0){
    alert("Enter a valid number of guests");
    return false;
  }
  const newEvent = {
    name:eventName,
    date:date,
    startTime:parseInt(startTime),
    endTime:parseInt(endTime),
    venue:venue,
    guests:parseInt(numberOfGuests),
    setup:setupType,
    duration: `${parseInt(endTime) - parseInt(startTime)}h`
  }
  events.push(newEvent);
  console.log(events);
  
  // console.log(time);
  loadEventScheduleTable();
  return true;

}

function loadEventScheduleTable(){
  const tbody =  document.getElementById("event-schedule-tbody");
  events.forEach(event =>{
    const tr = document.createElement('tr');
    tr.innerHTML = 
    `  
    <td id="event-name">${event.name}</td>
    <td id="date">${event.date}</td>
    <td id="starting-time">${event.startTime}</td>
    <td id="ending-time">${event.endTime}</td>
    <td id="venue/room">${event.venue}</td>
    <td id="guest">${event.guests}</td>
    <td id="setup-type">${event.setup}</td>
    <td class="actions">
      <button>Edit</button>
      <button>Delete</button>
    </td>
    `
    tbody.appendChild(tr);
  })
}


loadEventScheduleTable();