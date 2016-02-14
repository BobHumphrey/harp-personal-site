<?php

$fp = fopen('_footer.ejs', "r");
$fp2 = fopen('footer.blade.php', "w-");
fwrite($fp2, '<?php' . PHP_EOL);
fwrite($fp2, '$home = env(\'BH_HOME\');' . PHP_EOL);
fwrite($fp2, '?>' . PHP_EOL);
fwrite($fp2, PHP_EOL);



// loop through each record and update if needed
while (!feof($fp)) {
  $line = fgets($fp);
  $pos = strpos($line, '<%= home %>');
  if ($pos === false) {
    // just write the record
    fwrite($fp2, $line);
  }
  else {
    // update the record
    $lineUpdated = str_replace('<%= home %>', '{{ $home }}', $line);
    // Write the updated record
    fwrite($fp2, $lineUpdated);
  }
}

// close the files
fclose($fp);
fclose($fp2);
