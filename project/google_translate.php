<?php

class google_translate{

    public $original_language;
    public $translate;
    public $domain;


    function __construct ($original_language, $translate, $domain){
        $this->original_language = $original_language;      
        $this->translate = $translate;
        $this->domain = $domain;
    }   

    function translate(){


        $url = "http://translate.googleusercontent.com/translate_c?act=url&depth=1&hl=" . $this->original_language;
        $url .= "&ie=UTF8&prev=_t&rurl=translate.google.com&sl=" .  $this->original_language;
        $url .= "&tl=". $this->translate;
        $url .= "&u=" . $this->domain;


        echo "<script language=\"javascript\">document.location=\"$url\"</script>";             


    }
}
?>