<html>
    <head>
        <title>Resume</title>
        <link rel="stylesheet" type="text/css" href="name.css" />
    </head>
    <body>
        <header>
            <h1>
                <!-- <?= $greeting ?> -->
            </h1>
        </header>
        <h6>
        <ul>
            <?php


            ?>
            </ul>
        </h6>
        <!-- <form action="http://localhost:8888/name.php" class="default" method="POST"> -->
            <form action="http://localhost/name.php" class="default" method="POST">
            <label for="name">Name:</label>
            <input name ="name" id="name" type="text">
            <br>
            <br>
            <label for="roll_no">Roll No:</label>
            <input name = "roll_no" id="roll_no" type="text">
            <br>
            <br>
            <label for="dob">Date of Birth:</label>
            <input name="dob" id = "dob" type="date">
            <br>
            <br>
            <label for="address">Address:</label>
            <input name="address" id="address" type="text">
            <br>
            <br>
            <label for="mob">Mobile No.:</label>
            <input name="mob" id="mob" type="number">
            <br>
            <br>
            <label for="mail">E-mail:</label>
            <input name="mail" id="mail" type="email">
            <br>
            <br>
            <label for="sgpa1">SGPA-1:</label>
            <input name="sgpa1" id="sgpa1" type="number">
            <br>
            <br><label for="sgpa2">SGPA-2:</label>
            <input name="sgpa2" id="sgpa2" type="number">
            <br>
            <br><label for="sgpa3">SGPA-3:</label>
            <input name="sgpa3" id="sgpa3" type="number">
            <br>
            <br><label for="sgpa4">SGPA-:4</label>
            <input name="sgpa4" id="sgpa4" type="number">
            <br>
            <br><label for="sgpa5">SGPA-5:</label>
            <input name="sgpa5" id="sgpa5" type="number">
            <br>
            <br><label for="sgpa6">SGPA-6:</label>
            <input name="sgpa6" id="sgpa6" type="number">
            <br>
            <br><label for="sgpa7">SGPA-:7</label>
            <input name="sgpa7" id="sgpa7" type="number">
            <br>
            <br><label for="sgpa8">SGPA-:8</label>
            <input name="sgpa8" id="sgpa8" type="number">
            <br>
            <br>
            <label for="cgpa">CGPA:</label>
            <input name="cgpa" id="cgpa" type="number">
            <br>
            <br>
            <label for="hobb">Hobbies:</label>
            <br>
            <textarea name="hobb" id = "hobb" type="text"  rows="4" cols="50"></textarea>
            <br>
            <br>
            <label for="residence">Hosteller:</label>
            <input name="residence" id="hostel" type="radio" name="resident" value="Hostel">
            <br>
            <label for="residence">Day Scholor:</label>
            <input name="residence" id="dayschol" type="radio" name="resident" value="Day Scholar">
            <br>
            <br>
            <label for="reference">References:</label>
            <br>
            <textarea name="reference" id = "reference" type="text"  rows="4" cols="50"></textarea>
            <br>
            <br>
            <!-- <label for="submit"></label> -->
            <input type="submit" value="submit">
        </form>
    </body>
</html>