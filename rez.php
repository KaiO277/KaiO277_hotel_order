<?php

$name = $_POST['name'];

$email = $_POST['email'];

$pokój = $_POST['pokój'];

$liczbad = $_POST['liczbad'];

$liczbal = $_POST['liczbal'];

$datap = $_POST['datap'];

$dataw = $_POST['dataw'];

$message = $_POST['message'];


$odkogo = "TwojAdresEmail1@gmail.com";

$dokogo = "igor.siwek@carturismo.com";

$tytul = "Formularz kontaktowy ";


$wiadomosc = "";
$wiadomosc .= "Imie i nazwisko: " . $name . "\n";
$wiadomosc .= "Email: " . $email . "\n";
$wiadomosc .= "pokój: " . $pokój . "\n";
$wiadomosc .= "Liczba dorosłych:" . $liczbad . "\n";
$wiadomosc .= "Liczba dzieci:" . $liczbal . "\n";
$wiadomosc .= "Data Przyjazdu: " . $datap . "\n";
$wiadomosc .= "Data Wyjazdu: " . $dataw . "\n";
$wiadomosc .= "Wiadomość: " . $message . "\n";


$sukces = mail($dokogo, $tytul, $wiadomosc, "Od: <$odkogo>");


if ($sukces){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=potwierdzenie.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>
