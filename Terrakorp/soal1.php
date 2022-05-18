<?php
$jml = $_GET['jml'];
echo "<table border=1>";
for ($a = $jml; $a > 0; $a--)
{
  $z=0;
  for ($b = $a; $b > 0; $b--)
  {
    $z +=$b;
  }
  echo "<tr><td colspan='$jml'>Total : '$z'</td></tr>\n";
  echo "<tr>\n";
  for ($b = $a; $b > 0; $b--)
  {
    echo "<td>$b</td>";
  }
  echo "</tr>";
}
echo "</table>";

?>