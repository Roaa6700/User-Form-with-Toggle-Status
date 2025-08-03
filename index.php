<?php
$conn = new mysqli("localhost", "root", "", "employees");
$result = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Users Info</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="container">
    <!-- Header -->
    <div class="header">
      <h1 class="main-title">Users Info</h1>
    </div>

    <!-- Input Form -->
    <div class="input-section">
      <form class="employee-form" method="POST" action="insert.php">
        <div class="form-row">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required />

          <label for="age">Age:</label>
          <input type="number" id="age" name="age" required />

          <button type="submit">Submit</button>
        </div>
      </form>
    </div>

    <!-- Table -->
    <div class="table-section">
      <table class="employee-table">
        <thead>
          <tr>
            <th>ID</th><th>Name</th><th>Age</th><th>Status</th><th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php while($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= $row['age'] ?></td>
            <td><?= $row['status'] ?></td>
            <td>
              <a href="toggle.php?id=<?= $row['id'] ?>&status=<?= $row['status'] ?>">
                <button class="toggle-btn">Toggle</button>
              </a>
            </td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>