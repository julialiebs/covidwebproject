<?php

function fileNames($path){
  $images = preg_grep("/\.(jpeg|jpg|png)$/", scandir(path));
  $jsarr=json_encode($images);
  // echo "var jarray = ". $jsarr . ";\n";
  return $jsarr;
}
// $dir = './../../pics';

?>
