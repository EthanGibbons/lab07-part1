<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="my first php file">
        <meta name="keywords" content="HTML, Doctype, Head, Body, Meta, Paragraph, Headings, Strong, Emphasis">
        <meta name="author" content="Ethan Gibbons">
        <title>Display the Days of the Week</title>
    </head>

    <body>
        <h1>PHP Variables, Arrays and Operators</h1>

        <?php
            $days = ["Sunday", "Monday","Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

            echo "<p>The days of the week in English are: </p>" . "<p>$days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6].</p>". "<br>";        

            $fr_days = ["Dimanche", "Lundi","Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];

            echo "<p>The days of the week in French are: </p>" . "<p>$fr_days[0], $fr_days[1], $fr_days[2], $fr_days[3], $fr_days[4], $fr_days[5], $fr_days[6].</p>";        
        
        ?>

    </body>
</html>