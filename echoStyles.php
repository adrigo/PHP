<?php
echo "---------------16---------------\n";
for ($color = 30; $color <= 37; $color++) {
  echo shell_exec('echo "Default \e['.$color.'mCOLOR\e[0m --> "'.$color);
}
for ($color = 90; $color <= 97; $color++) {
  echo shell_exec('echo "Default \e['.$color.'mCOLOR\e[0m --> "'.$color);
}
echo "\n---------backgrounds 16---------\n";
for ($color = 40; $color <= 47; $color++) {
  echo shell_exec('echo "Default \e['.$color.'mCOLOR\e[0m --> "'.$color);
}
for ($color = 100; $color <= 107; $color++) {
  echo shell_exec('echo "Default \e['.$color.'mCOLOR\e[0m --> "'.$color);
}

echo "-------------88/256-------------\n";
for ($color = 0; $color < 256; $color++) {
  echo shell_exec('echo "Default \e[38;5;'.$color.'mCOLOR\e[0m --> "'.$color);
}
echo "\n-------backgrounds 88/256-------\n";
for ($color = 0; $color < 256; $color++) {
  echo shell_exec('echo "Default \e[48;5;'.$color.'mCOLOR\e[0m --> "'.$color);
}
