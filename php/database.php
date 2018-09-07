<?php
         mysqli_report(MYSQLI_REPORT_STRICT);

        try {
                $connection = new mysqli("localhost","root","", "db_venetoinmostra") ;
                } catch (Exception $e ) {
                    echo "<h4> Database momentaneamente non disponibile :( </h4>";
                    exit;
                }

?>
