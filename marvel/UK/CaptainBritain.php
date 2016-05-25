<?php

namespace Marvel\UK;

class CaptainBritain {
    public static function whoami() {
        
        $character = explode('\\', __CLASS__);
        $character_name = array_pop($character);
        $character_from = array_pop($character);
        return "I`am $character_name from $character_from .";
    }
    
}


