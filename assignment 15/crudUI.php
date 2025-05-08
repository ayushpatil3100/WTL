<!DOCTYPE html>
<html>
<head>
  <title>Student Manager</title>
  <style>
    body { font-family: Arial; margin: 2rem; }
    input, button { margin: 5px; padding: 8px; }
    table, th, td { border: 1px solid black; border-collapse: collapse; padding: 8px; }
  </style>
</head>
<body>

  <h2>Add Student</h2>
  <input id="name" placeholder="Name">
  <input id="dept" placeholder="Department">
  <button onclick="addStudent()">Add</button>

  <h2>Update Student</h2>
  <input id="update-id" placeholder="ID">
  <input id="update-name" placeholder="New Name">
  <input id="update-dept" placeholder="New Department">
  <button onclick="updateStudent()">Update</button>

  <h2>Delete Student</h2>
  <input id="delete-id" placeholder="ID">
  <button onclick="deleteStudent()">Delete</button>

  <h2>All Students</h2>
  <button onclick="loadStudents()">Refresh List</button>
  <table id="student-table">
    <tr><th>ID</th><th>Name</th><th>Department</th></tr>
  </table>

<script>
const API = "http://localhost:3000/crudServer.php";

// Fetch and show all students
function loadStudents() {
  fetch(API)
    .then(res => res.json())
    .then(data => {
      const table = document.getElementById("student-table");
      table.innerHTML = "<tr><th>ID</th><th>Name</th><th>Department</th></tr>";
      data.forEach(s => {
        table.innerHTML += `<tr><td>${s.id}</td><td>${s.name}</td><td>${s.department}</td></tr>`;
      });
    });
}

// Add a student
function addStudent() {
  const name = document.getElementById("name").value;
  const department = document.getElementById("dept").value;
  fetch(API, {
    method: "POST",
    headers: {"Content-Type": "application/json"},
    body: JSON.stringify({name, department})
  })
  .then(res => res.json())
  .then(() => loadStudents());
}

// Update a student
function updateStudent() {
  const id = document.getElementById("update-id").value;
  const name = document.getElementById("update-name").value;
  const department = document.getElementById("update-dept").value;
  fetch(API, {
    method: "PUT",
    headers: {"Content-Type": "application/json"},
    body: JSON.stringify({id, name, department})
  })
  .then(res => res.json())
  .then(() => loadStudents());
}

// Delete a student
function deleteStudent() {
  const id = document.getElementById("delete-id").value;
  fetch(API, {
    method: "DELETE",
    headers: {"Content-Type": "application/json"},
    body: JSON.stringify({id})
  })
  .then(res => res.json())
  .then(() => loadStudents());
}

// Load initially
loadStudents();
</script>

</body>
</html>
