<?php
echo <<<_END
	<form method =  "post" action = "calc.php"><pre>
	Сумма заимствования	<input type = "text" name = "principle">
	Ежемесячная выплата	<input type = "text" name = "monthly">
	Количество лет		<input type = "text" name = "years" value = "25">
	Процент годовых		<input type = "text" name = "rate"  value = "6">
					    <input type = "submit">
	</pre></form>
_END;
?>