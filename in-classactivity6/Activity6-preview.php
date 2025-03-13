<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Preview</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Preview</h2>

    <?php
    function getValue($field) {
        return isset($_POST[$field]) && !empty($_POST[$field]) ? htmlspecialchars($_POST[$field]) : "Not provided";
    }

    function getLanguages() {
        return isset($_POST["language"]) && !empty($_POST["language"]) ? implode(", ", $_POST["language"]) : "Not provided";
    }

    echo "<p> " . getValue("name") . "</p>";
    echo "<p> " . getValue("username") . "</p>";
    echo "<p> " . getValue("password") . "</p>";
    echo "<p> " . getValue("address") . "</p>";
    echo "<p> " . getValue("country") . "</p>";
    echo "<p> " . getValue("zipcode") . "</p>";
    echo "<p> " . getValue("email") . "</p>";
    echo "<p> " . getValue("sex") . "</p>";
    echo "<p>" . getLanguages() . "</p>";
    echo "<p> " . getValue("about") . "</p>";
    ?>

</body>
</html>
