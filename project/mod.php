<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifation Intership</title>
    <link rel="stylesheet" href="mo.css">
</head>
<body>
    <h1>Modifation Information</h1>
    <hr>

    <form>
        <label>Name :</label>
        <input type="text" name="name" placeholder="Enter your Name" required>
        <br>
        <label>Email :</label>
        <input type="email" name="email" placeholder="Enter your Email" required>
        <br>
        <label>Phone No:</label>
        <input type="tel" name="Phone" placeholder="Enter your Name" required>
        

        <h3> What do yo want to modify</h3>
        <br>
        <select id="duration" name="duration" required required>
                <option value="">-- Select Modifation --</option>
                <option value="1_month">Name </option>
                <option value="2_months">Email</option>
                <option value="3_months">Course / Department</option>
                <option value="6_months">Internship Position / Role</option>
                <option value="6_months">Other Information</option>
        </select>
        <h4> New Information</h4>
        <label for="reason">Reason for Modification</label><br>
        <textarea  name="reason" rows="2" placeholder="Write your reason here..."></textarea>
        <div id="button">
            <button type="button">Submit Change</button>
            <a href="proj.php">
            <button type="button" id="back">Back to Home</button>
            </a>
            
        </div>
    </form>

</body>
</html>

    