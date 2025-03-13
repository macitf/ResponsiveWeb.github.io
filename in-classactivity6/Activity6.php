<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Registration Form</h2>

    <form action="Activity6-preview.php" method="POST">
        <table>
            <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td><label for="username">Username:</label></td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td><label for="address">Address:</label></td>
                <td><input type="text" name="address" id="address"></td>
            </tr>
            <tr>
                <td><label for="country">Country:</label></td>
                <td>
                    <select name="country" id="country">
                        <option value="USA">USA</option>
                        <option value="UK">UK</option>
                        <option value="Canada">Canada</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="zipcode">ZIP Code:</label></td>
                <td><input type="text" name="zipcode" id="zipcode"></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
                <td>Sex:</td>
                <td>
                    <div class="inline-group">
                        <label><input type="radio" name="sex" value="Male"> Male</label>
                        <label><input type="radio" name="sex" value="Female"> Female</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Language:</td>
                <td>
                    <div class="inline-group">
                        <input type="checkbox" name="language[]" value="English">
                        <label for="english">English</label>

                        <input type="checkbox" name="language[]" value="French">
                        <label for="french">French</label>

                        <input type="checkbox" name="language[]" value="German">
                        <label for="german">German</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td><label for="about">About:</label></td>
                <td><textarea name="about" id="about" rows="4"></textarea></td>
            </tr>
            <tr class="submit-btn">
                <td colspan="2"><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>

</body>
</html>
