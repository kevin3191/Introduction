<?php
include 'format.php';

$header = "
	<tr id = 'trrow' ><td colspan = '2' >
		<a href = 'mainpage.php'><b>Home</b></a>
	</td>
	<td id = 'tdheader' >
		<a href = 'printrep.php' > Previous </a>
			&nbsp; | &nbsp;
		<a href = 'recodata.php' >  Next </a>
	</td></tr>

";

$body = "
		<td colspan = '2' >
			<b> Create Back-Up Data </b><br />
				<br />&nbsp; &nbsp; &nbsp; 
				o	 Go to \"SETTINGS\" tab, then click the \"BACK UP DATA\" to create back up data.
				<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src = 'img/122.png'>
				
		</td></tr>
";

$footer = "
	<tr id = 'trrow' ><td colspan = '2'>
	</td><td id = 'tdfooter' >
		<a href = 'printrep.php' > Previous </a>
			&nbsp; | &nbsp;
		<a href = 'recodata.php' >  Next </a>
	</td></tr>
";

echo $head . $header . $SideBarStart . $SideBarGuide . $SideBarEnd . $body . $footer . $foot;

?>