<?php
include 'format.php';

$header = "
	<tr id = 'trrow' ><td colspan = '2' >
		<a href = 'mainpage.php'><b>Home</b></a>
	</td>
	<td id = 'tdheader' >
		<a href = 'rfidreader.php' >  Next </a>
	</td></tr>

";

$body = "
		<td colspan = '2' >
			<b> Getting to Know SAM </b><br />
				&nbsp; &nbsp; &nbsp; 
				Take a few moments to familiarize yourself with system controls and displays. You may find it helpful to bookmark this section and refer to it as you read through the rest of the manual.
	
		</td></tr>
";

$footer = "
	<tr id = 'trrow' ><td colspan = '2'>
	</td><td id = 'tdfooter' >
		<a href = 'rfidreader.php' >  Next </a>
	</td></tr>
";

echo $head . $header . $SideBarStart . $SideBarIntro . $SideBarGuide . $SideBarEnd . $body . $footer . $foot;

		
		?>