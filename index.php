<?PHP
$name = "name";
$alter = alter;
echo "Hallo, ich heisse $name, ich bin $alter Jahre alt." ;
?>
<br>
<?PHP
$zahl1 = 23;
$zahl2 = 55;
$ergebnis = $zahl1+$zahl2;
if ($ergebnis > 70) {
    echo " Ergebnis: $ergebnis";
}
else {
    echo " Ergebnis: Fehler";
}
?>
<form>
    <input type="text" name="form">
    <button>absenden</button>
</form>
<?PHP
if (isset($_GET["form"])) {
    $form = ($_GET["form"]);
    echo "Guten Tag, " . $form;
}
?>
<form>
    <input type="number" name="zahl3">
    <input type="number" name="zahl4">
    <button>Multiplizieren</button>
</form>
<?PHP
if (isset($_GET["zahl3"]) && ($_GET["zahl4"])) {
    $zahl3 = ($_GET["zahl3"]);
    $zahl4 = ($_GET["zahl4"]);
    $ergebnis2 = $zahl3*$zahl4;
    echo $zahl3 . " und " . $zahl4 . " gibt " . $ergebnis2;
}
?>
