<?php
    function isProduction() {
        $domain = gethostname();
        $regexp = '/000webhost.io/';
        if (!preg_match($regexp, $domain) > 0 ) {
            return false;
        } else {
            return true;
        }
    }

    function prepareEnvFiles000WEbHosting() {
        // putenv() has been disabled on 000webhost for security reasons.
        $filename = (dirname(__DIR__)).'/.env';
        $contents = file($filename);
        $regex_pattern = '/(?P<name>.+)="(?P<value>[^"]+)"/';
        $vars = array();
        foreach($contents as $content) {
            preg_match($regex_pattern,$content,$regex_match);
            $vars[$regex_match["name"]] = $regex_match["value"];
        }
       return $vars;

    }