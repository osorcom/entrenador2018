<?php
$files = scandir("controller");
foreach ($files as $f) {
  if(!is_dir($f)) require_once $f;
}
?>
