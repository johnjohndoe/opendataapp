<?php
        $year = date('Y');
        $month = date('m');

        echo json_encode(array(
       
                array(
                        'id' => 1,
                        'title' => "Event1-horst",
                        'start' => "$year-$month-10",
                        'url' => "update.php?idwert=183"
                ),
               
                array(
                        'id' => 2,
                        'title' => "Event2",
                        'start' => "$year-$month-20",
                        'end' => "$year-$month-22",
                        'url' => "update.php"
                )
       
        ));

?>
