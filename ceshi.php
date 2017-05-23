<?php
$zfmima = '555666';
$zfpass = isset($_POST['zfpass'])?$_POST['zfpass']:'';
$state = ($zfpass == $zfmima) ? 'correct' : 'error';
echo $state;
?>