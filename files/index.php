<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="user_data.php">
        <label for=" name">
            Name: <input type="text" name="name">
        </label> <br>
        <label for="email">
            Email: <input type="email" name="email">
        </label><br>
        <label for="country">
            Country: <input type="name" name="country">
        </label><br>
        <label for="dob">
            D-O-B: <input type="date" name="d_o_b">
        </label><br>
        <label for="gender">
            Gender: <input type="radio" name="gender" value="Male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="Female">
            <label for="Female">Female</label>
            <input type="radio" name="gender" value="Other">
            <label for="other">Other</label><br>
        </label>
        <button type="submit">Submit</button>
    </form>
</body>

</html>