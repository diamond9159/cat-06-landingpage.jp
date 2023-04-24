<?php

$to = "akinori.shimizu@g-ginc.com";

$from = '';
$name = '';
$number = '';
$cmessage = '';

if (isset($_POST['email']))
	$from = $_POST['email'];

if (isset($_POST['name']))
	$name = $_POST['name'];

if (isset($_POST['tel']))
	$number = $_POST['tel'];

if (isset($_POST['message']))
	$cmessage = $_POST['message'];


$headers = "From: $from";
$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: " . $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$subject = "【便利屋 ねこの手】新規案件";


$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>【便利屋　ねこのて】お申込いただきありがとうございました。</title></head><body>";
$body .= "ご担当者様<br><br>
			ランディングページよりお申し込みがありましたので、<br>
			メールまたはお電話にてご連絡をお願いします。<br>";
$body .= "─ご送信内容の確認─────────────────<br>";

$body .= "[ お名前 ]" . $name . "<br>";
$body .= "[ メールアドレス ]" . $from . "<br>";
$body .= "[ 電話番号 ]" . $number . "<br><br>";
$body .= "[ ご相談内容 ]" . $cmessage . "<br>";
$body .= "</body></html>";

$send = mail($to, $subject, $body, $headers);



if ($send) {

	$temp = $from;
	$from = $to;
	$to = $temp;

	$headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: " . $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$subject = "【コンビニテテ】ご応募ありがとうございます。";


	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>【コンビニテテ】ご応募ありがとうございます。</title></head><body>";
	$body .= "$name 様<br><br>
			この度はお問合わせいただき、誠にありがとうございます。
			内容確認後、スタッフより折り返しご連絡致します。
			今しばらくお待ちいただきますよう、よろしくお願い致します。<br>";
	$body .= "─ご送信内容の確認─────────────────<br>";

	$body .= "[ お名前 ]" . $name . "<br>";
	$body .= "[ メールアドレス ]" . $from . "<br>";
	$body .= "[ 電話番号 ]" . $number . "<br><br>";
	$body .= "[ ご相談内容 ]" . $cmessage . "<br>";
	$body .= "</body></html>";

	$send = mail($to, $subject, $body, $headers);

	if ($send) {
		echo '<script type="text/javascript">alert("成功しました。");</script>';
		header('Location: thanks.html');
	}
} else {
	echo '<script type="text/javascript">alert("失敗しました。");</script>';
}

?>