<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="pink">
    <table class="text-center"height = "400px" width = "450" border = "1px solid black" cellspacing="0px" cellpadding = "20px">
        <tr>
            <td><h1 style="color: darkmagenta ;">Participation information</h1></td>
        <form action="form1.html">
            <tr>
                <td>FullName<input type="text" name="name" placeholder="Enter full name" required><br><br></td>
            <tr>
                <td>Email: <input type="email" name="email"pladeholder="enter gmail" required text-align="right"><br><br></td>
            <tr>
                <td>
                    Password:<input type="password" name="pass" text-aligh="center"><br><br></td>
            <tr>
                <td>Gender:<input type="radio" name="gen" value="m">Male
                <input type="radio" name="gen" value ="f">Female</td></tr>
                <tr>
                    <td>
                    Phonenumber:<input type="number" name="num"></td>
            <br>
            <tr>
                <td>DOB:<input type="date" name="date"><br></td>
            <tr>
                <td>Age:<input type="age" name="age"></td>
            <tr>
                <td>Id:<input type="id" name="id"></td>
            <tr>
                <td>city</td>
                <td><select name="city" class="form-control"</td>
                <option>Prayagraj</option>
                <option>Delhi</option>
                <option>Haryana</option>
                <option>Banaras</option>
            </tr>
            
    </table>
        
            <h3>where did you hear about this even.....?</h3>
            <input type="radio" value="i">Instagram
            <input type="radio" value="t">Twitter
            <input type="radio" value="w">Whatsup
            <input type="radio" value="0">Others<br>
            <h1>Payment information</h1>
            <input type="radio" value="i">Credit card
            <input type="radio" value="s">ATM
            <input type="radio" value="d">Cash<br><br>
            <br>
            <button type="submit">submit</button>
            <button type="button">Button</button>
            <button type="reset">Reset</button>

</body>
</html>