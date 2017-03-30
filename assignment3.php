<?php
require_once("ParentClass.php");
require_once("ChildClass.php");

?>

<!doctype html>
<html>
    <head>
        <title>Object Oriented Programming - Simple Class</title>
        <link rel="stylesheet" href="assignment3.css">
    </head>
    <body>
        <strong>List of Names and Books Issued</strong> 
        <br/><br/>
    <strong>Person Books, Empty Constructor, Two Names</strong>
    <br><br>
    <?php
    $vj = new PersonBooks();
    $vj->__set($vj->first_name,"VJ");
    $vj->set_name("VJ");
    $vj->Book_name = "Dan Brown";
    ?>
    <p><?php print $vj ?></p>
    <strong>Person Books, Empty Constructor, Three Names</strong>
    <br>
    <?php
    $vj = new PersonBooks();
    $vj->set_name("NJ");
    $vj->Book_name = "Sidney Sheldon";
    ?>
    <p><?php print $vj ?></p>
    <strong>Person Books, Parameterized Constructor</strong>
    <br>
    <?php
    $vj = new PersonBooks("VJ", "NJ");
    $vj->Book_name = "The Windmills of God";
    ?>
    <p><?php print $vj ?></p>
    <strong>Organization Books, Empty Constructor</strong>
    <?php
    $nj = new OrganizationBooks();
    $nj->set_name("MKY");
    $nj->Book_name = "Charles Brown";
    ?>
    <p><?php print $nj ?></p>
    <strong>Organization Books, Parameterized Constructor</strong>
    <br>
    <?php
    $nj = new PersonBooks("MKY");
    $nj->Book_name = "Charles Brown";
    ?>
    <p><?php print $nj ?></p>
    </body>
</html>