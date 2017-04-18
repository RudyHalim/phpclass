<?php
require_once('libraries/Page.php');
$page = new Page;
$page->setTitle('Contact');
$page->startBody();
?>
<h2>Contact</h2>
<form action="" method="post" name="contact">
    <table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th>Name</th>
        <td><input name="name" type="text" /></td>
      </tr>
      <tr>
        <th>Email</th>
        <td><input name="email" type="text" /></td>
      </tr>
      <tr>
        <th>Subject</th>
        <td><input name="subject" type="text" /></td>
      </tr>
      <tr>
        <th>Message</th>
        <td><textarea name="message" cols="50" rows="10"></textarea></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input name="submit" type="submit" value="Send" /></td>
      </tr>
    </table>
</form>
<?php
$page->endBody();
echo $page->render('inc/template.php');