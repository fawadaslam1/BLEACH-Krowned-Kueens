<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <meta name="description" content="">
        <meta name="author" content="">
      
  <link rel="icon" href="https://i.imgur.com/FHnHqMh.jpeg" type="image/x-icon">
        <title>👑DONATE/INVEST: KROWNED KUEENS🎶</title>
<link rel="stylesheet" type="text/css" href="donationsstyle.css">
<link rel="stylesheet" href="donationsstyle.css" type="text/css">
</head>
<body>
<div id = "main">
<h1>Donate to the Krowned Kueens Music Project With PayPal!</h1>
<div id = "container">
<h2>Your donation makes you a signature investor in a project that will redefine the scope of technology and entertainment! Thanks in advance for any sum that you provide.</h2>
<hr/>
<!-- Place somewhere in the <body> of your page -->
<div class="flexslider">
<!-- image slider start here -->
<ul class="slides">
<li>
<div class="box-shadow-preview">
<img src="https://i.imgur.com/vHRFhe4.png"/>
</div>
</li>
<li>
<div class="box-shadow-preview">
<img src="" />
</div>
</li>
<li>
<div class="box-shadow-preview">
<img src="" />
</div>
</li>
<li>
<div class="box-shadow-preview">
<img src="" />
</div>
</li>
<li>
<div class="box-shadow-preview">
<img src="" />
</div>
</li>
</ul>
</div>
<div class="donate">
<!-- 1st charity container -->
<div class="charity">
<a href=""><img src="images/logo.gif"></a>
<form action="Donationsprocess.php" method="POST">
<input type="hidden" name="id" value="<?php echo base64_encode(1); ?>">
<input type="submit" value="Donate $25" name="submit">
</form>
<p>Or give <a href="#" onclick="show('<?php echo base64_encode(1); ?>');" class="show2">any amount</a>.</p>
</div>
<!-- 2nd charity container -->
<div class="charity">
<a href=""><img src="images/logo.gif"></a>
<form action="Donationsprocess.php" method="POST">
<input type="hidden" name="id" value="<?php echo base64_encode(2); ?>">
<input type="submit" value="Donate $25" name="submit">
</form>
<p>Or give <a href="#" onclick="show('<?php echo base64_encode(2); ?>');">any amount</a>.</p>
</div>
<!-- 3rd charity container -->
<div class="charity">
<a href=""><img src="images/logo.gif"></a>
<form action="Donationsprocess.php" method="POST">
<input type="hidden" name="id" value="<?php echo base64_encode(3); ?>">
<input type="submit" value="Donate $25" name="submit">
</form>
<p>Or give <a href="#" onclick="show('<?php echo base64_encode(3); ?>');">any amount</a>.</p>
</div>
<!-- 4th charity container -->
<div class="charity">
<a href=""><img src="images/logo.gif"></a>
<form action="Donationsprocess.php" method="POST">
<input type="hidden" name="id" value="<?php echo base64_encode(4); ?>">
<input type="submit" value="Donate $25" name="submit">
</form>
<p>Or give <a href="#" onclick="show('<?php echo base64_encode(4); ?>');">any amount</a>.</p>
</div>
</div>
</div>
<img id="paypal_logo" style="margin-left: 722px;" src="images/secure-paypal-logo.jpg">
</div>
<div id="pop2" class="simplePopup">
<h3>Donate and start helping today!</h3>
<form action="Donationsprocess.php" method="POST">
<img src="images/logo.gif">
<br/>
<b>$</b><input type="hidden" name="id" id='charity_id' value=''>
<input type="number" value="" name="amount" required="required" step=".1">
<input type="submit" value="Donate Now" name="submit">
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<!-- code for sliders -->
<script type="text/javascript" charset="utf-8">
$(window).load(function() {
$('.flexslider').flexslider();
});</script>
<script src="js/jquery.simplePopup.js" type="text/javascript"></script>
<!-- call popup -->
<script type="text/javascript">
function show(id) {
$('#charity_id').val(id);
$('.box-shadow-preview').css("opacity", "0.1");
$('#pop2').simplePopup();
}
</script>

     <footer class="site-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-12 mt-4">
                                <p class="copyright-text mb-0">Copyright © BLEACH: Krowned Kueens (The Software & The Animation) | A Project by Princelawrenz | Characters made <a rel="nofollow" href="https://x.com/tite_official">Noriaki Kubo</a></p>
                            </div>
</body>
</html>
