<?php
//Here you can fetch data by database using id
if (isset($_POST['submit'])) {
if (base64_decode($_POST['id']) == 1) {
$product_name = 'KK 1';
$product_currency = 'USD';
$product_id = 1;
if (isset($_POST['amount'])) {
$product_price = $_POST['amount'];
} else {
$product_price = 5;
}
} else
if (base64_decode($_POST['id']) == 2) {
$product_name = 'KK 2';
$product_currency = 'USD';
$product_id = 2;
if (isset($_POST['amount'])) {
$product_price = $_POST['amount'];
} else {
$product_price = 10;
}
} else if (base64_decode($_POST['id']) == 3) {
$product_name = 'Future Shine';
$product_currency = 'USD';
$product_id = 3;
if (isset($_POST['amount'])) {
$product_price = $_POST['amount'];
} else {
$product_price = 25;
}
} else if (base64_decode($_POST['id']) == 4) {
$product_name = 'Save Earth';
$product_currency = 'USD';
$product_id = 4;
if (isset($_POST['amount'])) {
$product_price = $_POST['amount'];
} else {
$product_price = 50;
}
}
//Here we can use paypal url or sanbox url.
$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
//Here we can used seller email id.
$merchant_email = ' put merchnats email id here';
//here we can put cancle url when payment is not completed.
$cancel_return = "http://localhost/donate-with-paypal/Donations.php";
//here we can put cancle url when payment is Successful.
$success_return = "http://localhost/donate-with-paypal/Donationssuccess.php";
?>
<div style="margin-left: 38%"><img src="images/ajax-loader.gif"/><img src="images/processing_animation.gif"/></div>
<form name = "myform" action = "<?php echo $paypal_url; ?>" method = "post" target = "_top">
<input type = "hidden" name = "cmd" value = "_donations">
<input type = "hidden" name = "cancel_return" value = "<?php echo $cancel_return ?>">
<input type = "hidden" name = "return" value = "<?php echo $success_return; ?>">
<input type = "hidden" name = "business" value = "<?php echo $merchant_email; ?>">
<input type = "hidden" name = "lc" value = "C2">
<input type = "hidden" name = "item_name" value = "<?php echo $product_name; ?>">
<input type = "hidden" name = "item_number" value = "<?php echo $product_id; ?>">
<input type = "hidden" name = "amount" value = "<?php echo $product_price; ?>">
<input type = "hidden" name = "currency_code" value = "<?php echo $product_currency; ?>">
<input type = "hidden" name = "button_subtype" value = "services">
<input type = "hidden" name = "no_note" value = "0">
</form>
<script type="text/javascript">
document.myform.submit();
</script>
<?php }
?>
