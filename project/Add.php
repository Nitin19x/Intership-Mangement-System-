<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Intership</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>
    <h3> New Internship </h3>
    <hr>
    <br>
    <h5>New</h5>
    <div class="ll">
        <form>
            <label>Internship name:</label>
            <input type="text" name="name" placeholder="Intership Name" required>
            <br>
            <label>Location:</label>
            <input type="location" name="location" placeholder="Enter your location" required>
            <br>
         
            <label for="duration">Internship Duration:</label>

            <select id="duration" name="duration" required required>
                <option value="">-- Select Duration --</option>
                <option value="1_month">1 Month</option>
                <option value="2_months">2 Months</option>
                <option value="3_months">3 Months</option>
                <option value="6_months">6 Months</option>
            
            </select>

            <br>
            <label>Stipend:</label>
            <input type="Amount" name="Amount" placeholder="Enter amount" min="1" required>
            <br>
            <label>Last Date:</label>
            <input type="date" name="date" required>
            <br>
            <div id="button">
                <button type="submit" id="res">Register</button>
                <br>
                <button type="submit">Reset</button>
                <br>
            </div>
        </form>
    </div>
</body>
</html>