<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
</head>
<body>
    <h3>School Management System</h3>
    <h4>Dear {{ $details['name'] }}, Your School Details are--</h4>
    <p>Roll No ={{ $details['rollNo'] }}</p>
    <p>Grade ={{ $details['grade'] }}</p>
    <p>Address ={{ $details['address'] }}</p>
    <p>Guardian Name ={{ $details['gurdian_name'] }}</p>
    <p>Phone Number ={{ $details['phone_number'] }}</p>
    <p>Gender ={{ $details['gender'] }}</p>
    <p>Date of Birth ={{ $details['date_of_birth'] }}</p>
</body>
</html>

