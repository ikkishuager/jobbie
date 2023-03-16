<?php
// Connect to your database like you normally do, then get any value into the $count variable
$username = "Jeremy";
$count = 287;
$lvl = 1;
if ($count >= 12800) { $lvl = 10; }
else if ($count >= 6400) { $lvl = 9; }
else if ($count >= 3200) { $lvl = 8; }
else if ($count >= 1600) { $lvl = 7; }
else if ($count >= 800) { $lvl = 6; }
else if ($count >= 400) { $lvl = 5; }
else if ($count >= 200) { $lvl = 4; }
else if ($count >= 100) { $lvl = 3; }
else if ($count >= 50) { $lvl = 2; }
// Render stars or any graphics/images according to dynamic $lvl number
$stars = "";
$i = 1;
while ($i <= $lvl) {
     $stars .= "&#9733;";
     $i++;
}
echo "$stars<br />$username is level $lvl with $count experience points";
?> 