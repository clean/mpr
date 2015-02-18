<?php
/**
 * My print_r - debug function
 * @author Oliwier Ptak (https://github.com/oliwierptak)
 *
 * Usage example:
 * mpr($mixed);
 * mpr($mixed,1); <- stop execution of the script
 * mpr($mixed,1,1); <- stop execution and show backtrace
 */
function mpr($val, $die = false, $showTrace = false)
{
    if (!headers_sent()) {
        header("content-type: text/plain");
    }

    echo '--MPR--';
    if (is_array($val) || is_object($val)) {
        print_r($val);
        if (is_array($val)) {
            reset($val);
        }
    }
    else {
        var_dump($val);
    }

    if ($showTrace || $die) {
        $trace = debug_backtrace();
        echo "--\n";
        echo sprintf("Who called me: %s line %s", $trace[0]['file'], $trace[0]['line']);
        if ($showTrace) {
            echo "\nTrace:";
            for ($i = 1; $i <= 100; $i++) {
                if(!isset($trace[$i])) {
                    break;
                }
                echo sprintf("\n%s line %s", $trace[$i]['file'], $trace[$i]['line']);
            }
        }
    }
    echo "\n";

    if ($die) {
        die();
    }
}
