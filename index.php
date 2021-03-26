<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <title>Test Server</title>
</head>

<body>
    <form method="post" action="./database/SaveInDB.php" enctype="multipart/form-data">
        <label for="firstName">First Name</label>
        <br>
        <input type="text" id="firstName" name="firstName" placeholder="Enter First Name" value="tango" />
        <br>

        <label for="lastName">Last Name</label>
        <br>
        <input type="text" id="lastName" name="lastName" placeholder="Enter Last Name" value="mahajan" />
        <br>

        <label for="mobileNumber">Mobile Number</label>
        <br>
        <input type="number" id="mobileNumber" name="mobileNumber" placeholder="Enter Mobile Number" value="124243" />
        <br>

        <label for="email">Your Email</label>
        <br>
        <input type="email" id="email" name="email" placeholder="Enter Your Email" value="support@tarunmahajan.com" />
        <br>

        <label>Select University</label>
        <select name="university">
            <option value="rgpv">RGPV</option>
            <option value="davv">DAVV</option>
            <option value="mnit">MNIT</option>
        </select>
        <br>

        <label>File: </label><input type="file" name="file" />
        <br>
        <button type="submit" value="Upload Image" name="file">Add</button>
    </form>
    <!-- <br><br>
    <form method="post" action="./database/getallusers.php">
        <input type="submit" name="getAllUsers" value="getAllUsers">
    </form> -->
</body>

</html>