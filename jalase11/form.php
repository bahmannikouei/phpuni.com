<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
</head>
<body>
    <form action="processForm.php" method="post">
        <label for="name">Name and Family:</label>
        <input type="name" name="name" id="name"> <br>
        <label for="natcode">National Code:</label>
        <input type="natcode" name="natcode" id="notcode"><br>
        <label for="tel">Phone:</label> 
        <input type="tel" name="tel" id="tel"><br>
        <label for="email">Email:</label> 
        <input type="email" name="email" id="email"><br>
        <label for="Addr">Address:</label> 
        <input type="addr" name="addr" id="addr"><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>