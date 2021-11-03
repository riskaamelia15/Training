<?php
$datajson = "[5, 3, 4, 2, 1]";
$data = json_decode($datajson);
echo implode (" - ", $data);
?>