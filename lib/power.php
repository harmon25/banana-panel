<?php

namespace lib;

class Power {

    public static function power() {
        global $ssh;
        $amps = $ssh->shell_exec_noauth('cat /sys/devices/platform/sunxi-i2c.0/i2c-0/0-0034/axp20-supplyer.28/power_supply/ac/current_now');  // µA
        $volts = $ssh->shell_exec_noauth('cat /sys/devices/platform/sunxi-i2c.0/i2c-0/0-0034/axp20-supplyer.28/power_supply/ac/voltage_now'); // µV
        $watts = round($amps * $volts / pow(10,12), 1);
        if ( $watts > 8 ) $alert = 'alert';
        elseif ( $watts > 6 ) $alert = 'warning';
        else $alert = 'success';

        $result = array(
            'milliampere' => round($amps/1000),
            'voltage' => round($volts/1000000, 1),
            'watts' => $watts,
            'alert' => $alert
        );

        return $result;
    }

}

?>