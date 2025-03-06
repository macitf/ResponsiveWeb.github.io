<?php

$exchange_rates = [
    "USD" => ["CAD" => 1.43, "EUR" => 0.93],
    "CAD" => ["USD" => 0.70, "EUR" => 0.65],
    "EUR" => ["USD" => 1.08, "CAD" => 1.54]
];


$from_value = isset($_GET["from_value"]) ? $_GET["from_value"] : "";
$from_currency = isset($_GET["from_currency"]) ? $_GET["from_currency"] : "";
$to_currency = isset($_GET["to_currency"]) ? $_GET["to_currency"] : "";
$converted_value = "";


if (!empty($from_value) && isset($exchange_rates[$from_currency][$to_currency])) {
    $rate = $exchange_rates[$from_currency][$to_currency];
    $converted_value = $from_value * $rate;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Currency Calculator</title>
</head>
<body>
    <form action="activity5.php" method="GET">
        <table>
            <tr>
                <td>From:</td>
                <td><input type="text" name="from_value" value="<?= htmlspecialchars($from_value) ?>"/></td>
                <td>Currency:</td>
                <td>
                    <select name="from_currency">
                        <option value="USD" <?= ($from_currency == "USD") ? "selected" : "" ?>>USD</option>
                        <option value="CAD" <?= ($from_currency == "CAD") ? "selected" : "" ?>>CAD</option>
                        <option value="EUR" <?= ($from_currency == "EUR") ? "selected" : "" ?>>EUR</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>To:</td>
                <td><input type="text" name="to_value" value="<?= htmlspecialchars($converted_value) ?>" readonly/></td>
                <td>Currency:</td>
                <td>
                    <select name="to_currency">
                        <option value="USD" <?= ($to_currency == "USD") ? "selected" : "" ?>>USD</option>
                        <option value="CAD" <?= ($to_currency == "CAD") ? "selected" : "" ?>>CAD</option>
                        <option value="EUR" <?= ($to_currency == "EUR") ? "selected" : "" ?>>EUR</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="4"><input type="submit" value="Convert"/></td>
            </tr>
        </table>
    </form>
</body>
</html>
