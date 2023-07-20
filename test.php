<?php
        $radioVal="tcp";
        $dropmenu="All";
        $file = fopen("tcpall","r");
        echo "<table>";
        //Output lines until EOF is reached
        while(! feof($file))
        {
        echo "<tr><td width='1200' >";
        $line = fgets($file);
        echo $line. "<br>";
        echo "</td></tr>";
        }
        echo "</table>";
	fclose($file);
?>

