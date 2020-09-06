<form method="post">
    USD: <input type="number" name="usd"><br>
    <input type="submit" value="convert">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $usd = $_POST["usd"];
}
$vnd = $usd * 23000;
echo $usd. "USD" . " = ". $vnd. " VND";
