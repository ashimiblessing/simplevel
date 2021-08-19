<?php
/**
 * Created by IntelliJ IDEA.
 * User: TRAVELDEN DEV
 * Date: 15/06/2017
 * Time: 17:28
 */
class format_template{
    // format educational background info into table
    function eduBackground($schName, $program, $start, $end, $certificate){
       $edu ='';
        for($e = 0; $e < $schName && $program && $start && $end && $certificate ; $e++){
            $edu =
                '<tr><td style=" border: 1px solid #dddddd; text-align: left;padding: 8px;">'.$schName[e].'</td>
            <td style=" border: 1px solid #dddddd;text-align: left;padding: 8px;">'.$program[e].'</td>
            <td style=" border: 1px solid #dddddd;text-align: left;padding: 8px;">'.$start[e].'</td>
            <td style=" border: 1px solid #dddddd;text-align: left;padding: 8px;">'.$end[e].'</td>
            <td style=" border: 1px solid #dddddd;text-align: left;padding: 8px;">'.certificate[e].'</td>
            </tr>';

        }
        return $edu;
    }
}
