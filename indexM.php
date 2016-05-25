<?php
require __DIR__ .'\vendor\autoload.php'; 

use Marvel\NewYork\HankPym;
use Marvel\NewJersey\Wasp;
use Marvel\Asgard\Thor;
use Marvel\NewYork\LongIsland\IronMan;
use Marvel\NewJersey\Paterson\WonderMan;
use Marvel\UK\CaptainBritain;
use Marvel\Illinois\Beast;



echo HankPym::whoami().'<br>';
echo Wasp::whoami().'<br>';
echo Thor::whoami().'<br>';
echo IronMan::whoami().'<br>';
echo WonderMan::whoami().'<br>';
echo CaptainBritain::whoami().'<br>';
echo Beast::whoami().'<br>';
