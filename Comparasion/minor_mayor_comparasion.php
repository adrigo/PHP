<?php 
/*Shows what it returns when make the comparasion of < and >
 *@author Adrián Gómez <adrian.gd@live.com>
 */
$values = array(
  NAN,
  INF,
  -INF,
  0,
  1,
  -1,
  10,
  100,
  10000000,
  "0",
  "1",
  "-1",
  "php",
  '',
  TRUE,
  FALSE,
  NULL,
  array(),
  array(''),
);
$formato1 = '%19s    >    %-18s    :    %s'."\n";
$formato2 = '%18s    <    %-18s    :    %s'."\n";
echo "\n-------------------------------------------------------------\n\n";

foreach ($values as $value) {
  foreach ($values as $value2) {
    echo sprintf($formato1,toString($value),toString($value2),toString($value > $value2));
  }
  echo "\n";
}
echo "\n-------------------------------------------------------------\n\n";

foreach ($values as $value) {
  foreach ($values as $value2) {
    echo sprintf($formato2,toString($value),toString($value2),toString($value < $value2));
  }
  echo "\n";
}

function toString($value) {
    return str_replace("\n", "", var_export($value, true));
}
