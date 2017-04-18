<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Game Artis | <?php echo $this->title; ?></title>
<?php
foreach ($this->stylesheets as $stylesheet) {
	echo '<link href="' . $stylesheet . '" rel="stylesheet" type="text/css" />' . "\n";
}
?>
</head>

<body>
<div align="center"><div class="container">
    <div id="header">
        <span id="cname">Game Artis</span>
        <ul id="nav">
        	<li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </div>
    
    <img src="images/blockimage.jpg" alt="Block Image" />
    
    <?php echo $this->body; ?>
    <div id="cpyright">&copy; Copyright 2008 XYZ Company. All rights reserved.</div>
</div></div>
<?php
foreach ($this->javascripts as $javascript) {
	echo '<script src="' . $javascript . '" language="javascript" type="text/javascript" defer="defer"></script>' . "\n";
}
?>
</body>
</html>