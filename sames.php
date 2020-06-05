<?php 
//ARCHIVO QUE MUESTRA LAS DIFERENCIAS DE LAS COMPARATIVAS EN PHP
$values = array(
  NAN,
  0,
  1,
  -1,
  "0",
  "1",
  "-1",
  "php",
  '',
  TRUE,
  FALSE,
  NULL,
  array(),
  array('')
);
$formato1 = '%19s    ==    %-18s    :    %s'."\n";
$formato2 = '%18s    ===    %-18s    :    %s'."\n";
$formatoBoolean = '%18s    to BOOLEAN    :    %s'."\n";

foreach ($values as $value) {
  echo sprintf($formatoBoolean,toString($value),toString((bool)$value));
}
echo "\n";

foreach ($values as $value) {
  foreach ($values as $value2) {
    echo sprintf($formato1,toString($value),toString($value2),toString($value == $value2));
  }
  echo "\n";
}

foreach ($values as $value) {
  foreach ($values as $value2) {
    echo sprintf($formato2,toString($value),toString($value2),toString($value === $value2));
  }
  echo "\n";
}

function toString($value) {
    return str_replace("\n", "", var_export($value, true));
}