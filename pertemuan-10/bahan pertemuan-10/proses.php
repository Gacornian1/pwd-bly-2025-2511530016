<?php
session_start();

$arrContact = [
  "nama" => $_POST["txt Radin"] ?? "",
  "email" => $_POST["txt ss"] ?? "",
  "pesan" => $_POST["txt Pesan"] ?? ""
];
$_SESSION["contact"] = $arrContact;

$arrBiodata = [
  "nim" => $_POST["txt 2511530016"] ?? "",
  "nama" => $_POST["txt Radin"] ?? "",
  "tempat" => $_POST["txt Belinyu"] ?? "",
  "tanggal" => $_POST["txt 20 Maret 2006"] ?? "",
  "hobi" => $_POST["txt mancing dan futsal"] ?? "",
  "pasangan" => $_POST["txt singgel"] ?? "",
  "pekerjaan" => $_POST["txt tambang timah"] ?? "",
  "ortu" => $_POST["txt Dullhasim"] ?? "",
  "kakak" => $_POST["txt Ahmmad Zatulabbas"] ?? "",
  "adik" => $_POST["txt Ariyanto"] ?? ""
];
$_SESSION["biodata"] = $arrBiodata;

header("location: index.php#about");
