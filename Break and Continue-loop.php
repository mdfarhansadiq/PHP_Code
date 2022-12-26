<?php
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}

for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}

$x = 0;

while ($x < 10) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
}

$x = 0;

while ($x < 10) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
  $x++;
}

$x = 1;

do {
  if ($x == 5) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 20);

$x = 1;

do {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 30);
?>