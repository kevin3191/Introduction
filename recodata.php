<?php
include 'format.php';

$header = "
	<tr id = 'trrow' ><td colspan = '2' >
		<a href = 'mainpage.php'><b>Home</b></a>
	</td>
	<td id = 'tdheader' >
		<a href = 'creabackup.php' > Previous </a>
	</td></tr>

";

$body = "
		<td colspan = '2' >
			<b> Recover Data </b><br />
				<br />&nbsp; &nbsp; &nbsp; 
				o	Go to \"SETTINGS\" tab, then click the \"RECOVER DATA.\"
				<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src = 'img/123.png'>
				
		</td></tr>
";

$footer = "
	<tr id = 'trrow' ><td colspan = '2'>
	</td><td id = 'tdfooter' >
		<a href = 'creabackup.php' > Previous </a>
	</td></tr>
";

echo $head . $header . $SideBarStart . $SideBarGuide . $SideBarEnd . $body . $footer . $foot;

?>