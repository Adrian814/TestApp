<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
   <HEAD>
      <TITLE>My first HTML document</TITLE>
   </HEAD>
   <BODY>
   		<?php
			$variable = 8;
			
			echo "Value is now $variable<br/>";
			$variable += 2;
			echo "Add 2. Value is now $variable<br/>";
			$variable -= 4;
			echo "Subtract 4. Value is now $variable<br/>";
			$variable *= 5;
			echo "Multiply by 5. Value is now $variable<br/>";
			$variable /= 3;
			echo "Divide by 3. Value is now $variable<br/>";
			$variable++;
			echo "Increment value by one. Value is now $variable<br/>";
			$variable--;
			echo "Decrement value by one. Value is now $variable<br/>";	
		?>   
   </BODY>
</HTML>


