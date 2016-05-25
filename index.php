<?php 

class Application {
    
    public function start(){
    
        $quotes = [
        'Everything takes longer than you think',
        'Fortune is easily found, but hard to be kept',
        'The actions of men are the best interpreters of their thoughts',
        'Money speaks sense in a language all nations understand',
        'Experience is the name every one gives to their mistakes',
        'Injuries may be forgiven, but not forgotten',
    ];
        echo $quotes[array_rand($quotes)];
    }
}

$obj = new Application ();
$obj->start();