<?php

$users = [
  ["Name","Age","Email"],
  ["Yaseen",20,"yaseen@test.com"],
  ["Muhammad",20, "muhammad@test.com"],
  ["Khan",32, "khan@test.com"]
];

echo "<table border='1'>";
for($i=0;$i<count($users);$i++){
  echo "<tr>";
  for($j=0;$j<count($users[$i]);$j++){
    echo "<td>".$users[$i][$j]."</td>";
  }
  echo "</tr>";
}
echo "</table>";

?>