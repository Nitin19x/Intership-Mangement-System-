<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PROJECT</title>
    <link rel="stylesheet" href="front.css">
</head>
<body>
    <h1>Intership Management System</h1>
    <hr>

    <h2>Company Dashborad</h2>
    <h3>Employer Register from</h3>
    <div class="ll">
        <form>
            <label>Organisation Name:</label>
            <input type="text" name="name"  placeholder="Enter Organisation Name"  required>
            <br>
            <label>Email:</label>
            <input type="email" name="email"  placeholder="Enter Eamil Addres" required>
            <br>
            <label>Password:</label>
            <input type="password"  name="password" placeholder="Enter your Password" required >
            <br>
            <label>First Name:</label>
            <input type="text" name="firstname"  placeholder="Enter your First name" required>
            <br>
            <label>Last Name:</label>
            <input type="text" name="lastname"  placeholder="Enter your last name" required>
            <br>
            <label>Mobile No:</label>
            <input type="tel" name="number" placeholder="Enter phone number" minlength="10" maxlength="10" required>
            <br>
            <div id="mod">
                <a href="Add.php">
                <button type="button">Submit</button>
                </a>
                <a href="mod.php">
                <button type="button" id="back">Modifation Information</button>
                </a>
                

            </div>
        </div>
           
        </form>
    </div>
    
</body>
</html>