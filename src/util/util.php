<?php
    //2019.10.04-2
    function printTable($myrows) {
        if (count($myrows) == 0) {
            echo "<hr>";
            echo "No results";
            echo "<hr>";
            //we can just return since table is not needed
            return;
        }
        echo "<table>";
        foreach ($myrows as $key => $row) {
            //special case using first row we create our table head with column names
            if ($key == 0) {
                echo "<thead><tr>";
                foreach ($row as $colname => $unusedcolvalue) {
                    echo "<td>" . $colname . "</td>";
                }
                echo "</tr></thead>";
            }
            echo "<tr>";
            // foreach ($row as $unusedcolkey => $colvalue) {
            foreach ($row as  $cellvalue) {
                
                echo "<td>" . $cellvalue . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }