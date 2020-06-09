
<?php
//   $restart = shell_exec("shutdown -r now");
//   echo "Restarting pc... <br>\n";
//   echo $restart;
  
// if (php_uname('s') == 'MacOS') {
//   echo "Usas MacOS\n";
// }

echo php_uname('s')."\n";
echo PHP_OS."\n";

if (DIRECTORY_SEPARATOR === '/') {
  echo "Linux\n";
}
if (DIRECTORY_SEPARATOR === '\\') {
  echo "Windows\n";
}

if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
  echo "Linux\n";
}  
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
  echo "Windows\n";
}
?>
