<?php
require('Persistence.php');

$db = new Persistence();
$added = $db->add_comment($_POST);

if($added) {
  header( 'Location: indexC.php' );
}
else {
  header( 'Location: indexC.php?error=Your comment was not posted due to errors in your form submission' );
}
?>