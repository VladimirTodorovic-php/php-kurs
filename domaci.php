<?php

function izracunajPDV($iznos) 
{
    if(!is_numeric($iznos)) {
        echo "broj mora biti numericka vrednost";
    }
    else {
        $procenat = $iznos * 0.22;
        echo "PDV iznosi $procenat";
    }

}

izracunajPDV(100);