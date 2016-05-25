<?php
namespace Greeting;

class Greeting {
    
    use RandomQuote;
    public  function say($name) {
        echo "Hi,". $name." There is a new quote for you:".self::$quotes[array_rand(self::$quotes)];
            
    }
}