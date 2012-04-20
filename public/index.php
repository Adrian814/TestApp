<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
   <HEAD>
      <TITLE>PHP-Tests</TITLE>
   </HEAD>
   <BODY>
   		<?php
			$v1 = "Test";
			$v2 = (double)3;
			$v3 = "TRUE";
			$v4 = 5;
			$v5 = NULL;
			
			echo 'Value is '. gettype($v1) . '.<br/>';
			echo 'Value is '. gettype($v2) . '.<br/>';
			echo 'Value is '. gettype($v3) . '.<br/>';
			echo 'Value is '. gettype($v4) . '.<br/>';
			echo 'Value is '. gettype($v5) . '.<br/>';
		?>
   </BODY>
</HTML>


