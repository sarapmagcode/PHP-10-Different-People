<?php
    $headings = array("No.", "Name", "Image", "Age", "Birthday", "Contact Number");
    $data = array(
        array("Mary", "images/1.jpeg", 31, "February 9, 1990", "09874859625"),
        array("Jenny", "images/2.jpeg", 25, "January 31, 1996", "09234542344"),
        array("Bobby", "images/3.jpeg", 14, "March 1, 2007", "09587498754"),
        array("Lucy", "images/4.jpeg", 29, "May 16, 1992", "09887498745"),
        array("Chris", "images/5.jpeg", 13, "December 29, 2008", "09124785458"),
        array("Ralph", "images/6.jpeg", 26, "April 14, 1995", "09985745872"),
        array("Joseph", "images/7.jpeg", 24, "November 23, 1997", "09365987412"),
        array("Liue", "images/8.jpeg", 36, "September 4, 1985", "09015247896"),
        array("Anna", "images/9.jpeg", 33, "October 8, 1988", "09214785963"),
        array("Eric", "images/10.jpeg", 35, "August 15, 1986", "09214785963")
    );
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <title></title>
    </head>
    <body>
        <div class="container">
            <table>
                <tr>
                    <?php
                        for ($i = 0; $i < count($headings); $i++) {
                            echo "<th>" . $headings[$i] . "</th>";
                        }
                    ?>
                </tr>
                <?php
                    sort($data);
                    for ($row = 0; $row < count($data); $row++) {
                    ?>
                        <tr>
                            <?php
                                echo "<td>" . $row + 1 . "</td>";
                                foreach ($data[$row] as $x => $val) {
                                    if ($x == 1) {
                                        echo "<td><img src=\"" . $val . "\">" . "</td>";
                                    } else {
                                        echo "<td>" . $val . "</td>";
                                    }
                                }      
                            ?>
                        </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </body>
</html>