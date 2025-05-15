const employees = [
  {
    id: "EMP001",
    firstName: "John",
    lastName: "Doe",
    email: "john.doe@example.com",
    phone: "555-123-4567",
    dob: "1990-05-15",
    role: "Manager",
    joiningDate: "2018-03-01"
  },
  {
    id: "EMP002",
    firstName: "Jane",
    lastName: "Smith",
    email: "jane.smith@example.com",
    phone: "555-987-6543",
    dob: "1985-11-20",
    role: "Receptionist",
    joiningDate: "2019-07-10"
  },
  {
    id: "EMP003",
    firstName: "Michael",
    lastName: "Brown",
    email: "michael.brown@example.com",
    phone: "555-654-3210",
    dob: "1992-08-08",
    role: "Housekeeping",
    joiningDate: "2021-01-25"
  },
  {
    id: "EMP004",
    firstName: "Emily",
    lastName: "Davis",
    email: "emily.davis@example.com",
    phone: "555-321-9876",
    dob: "1995-02-22",
    role: "Chef",
    joiningDate: "2020-05-18"
  },
  {
    id: "EMP005",
    firstName: "Daniel",
    lastName: "Lee",
    email: "daniel.lee@example.com",
    phone: "555-888-1122",
    dob: "1988-12-12",
    role: "Front Desk",
    joiningDate: "2017-11-03"
  }
];

function loadEmployeeInfo() {
    const tbody = document.getElementById("employee-info-tbody");

    employees.forEach(employee => {
        const tr = document.createElement('tr');
        tr.innerHTML =
            `
         <td>${employee.id}</td>
         <td>${employee.firstName}</td>
         <td>${employee.lastName}</td>
         <td>${employee.email}</td>
         <td>${employee.phone}</td>
         <td>${employee.dob}</td>
         <td>${employee.role}</td>
         <td>${employee.joiningDate}</td>
        `
        tbody.appendChild(tr);
    })
}
loadEmployeeInfo();