<?php
function db_connect ($db) {
	
	$dblink = new mysqli("localhost", "webuser", "s[1q)lA8KQHLD7qL", $db);
	return $dblink;
}

function redirect ( $uri )
{ ?>
<script type="text/javascript">
document.location.href="<?php echo $uri; ?>";</script>
<?php die;
}

?>
