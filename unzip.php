<?php

  $zip = new ZipArchive;

  if ($zip->open('upload.zip') === TRUE) {
    $zip->extractTo('./');
    $zip->close();
    echo '解凍に成功しました。';
  } else {
    echo '解凍に失敗しました。';
  }

?>