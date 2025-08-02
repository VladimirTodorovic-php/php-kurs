<?php 

$trenutno_vreme = 22;


if($trenutno_vreme >= 5 && $trenutno_vreme < 12) { 
    echo "jutro jeee, jutro je";
}
if($trenutno_vreme >= 12 && $trenutno_vreme < 20) {
    echo "Podne je";
}
else {
    echo "noc je";
}

