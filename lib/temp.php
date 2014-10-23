<?php

namespace lib;

class Temp {

    /**
     * The number of line which will be shown in the popover
     */
    public static $DETAIL_LINE_COUNT = 5;

    public static function temp() {
        $result = array();

        $temp_file = "/sys/devices/platform/sunxi-i2c.0/i2c-0/0-0034/temp1_input";
        if (file_exists($temp_file)) {
            $lines = file($temp_file);
            $pos = strpos($lines[1], "t=");
            $currenttemp = round(substr($lines[1], $pos + 2) / 1000, 1) . "°C";
        } else {
            $currenttemp = "N/A";
        }
        $result['alert'] = 'success';
        $result['degrees'] = $currenttemp;

        return $result;
    }

}

?>
