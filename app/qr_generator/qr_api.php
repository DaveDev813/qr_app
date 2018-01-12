<?php

require '../../vendor/autoload.php';

use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\QrCode;

if(isset($_POST["qr_value"]) && !empty($_POST["qr_value"])) {
  
  $value = $_POST["qr_value"];
  
  // Create a basic QR code
  $qrCode = new QrCode($value);
  $qrCode->setSize(300);

  // Set advanced options
  $qrCode->setWriterByName('png');
  $qrCode->setMargin(10);
  $qrCode->setEncoding('UTF-8');
  $qrCode->setErrorCorrectionLevel(ErrorCorrectionLevel::HIGH);
  $qrCode->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0]);
  $qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255]);
  $qrCode->setLogoWidth(150);
  $qrCode->setValidateResult(false);

  // Save it to a file
  $qrCode->writeFile(__DIR__.'/generated_qr/qrcode.png');

  // Directly output the QR code
  header('Content-Type: '.$qrCode->getContentType());

  echo $qrCode->writeString();
}








