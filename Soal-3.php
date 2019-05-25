<?php
$string = "Makan Skuy!";
echo "Ada <strong>".preg_match_all('/[aeiou]/i',$string,$matches)." huruf vokal</strong> dalam kata <strong>".$string."</strong>";
?>