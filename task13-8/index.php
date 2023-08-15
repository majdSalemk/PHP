!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
</head>
<body>
    <h1>User Registration</h1>
    <form id="registrationForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
        <input type="submit">

    </form>
<h2>Registerd Users</h2>
<table border="2" id="usersData">
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>

</table>
    <script src="app.js"></script>
</body>
</html>