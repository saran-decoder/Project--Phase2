<?php

include 'libs/mid.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <?=load_temp('_head');?>

    </head>
    <body>
        <header class="header">

            <?=load_temp('_header');?>

        </header>
        
        <main>

            <?=load_temp('_sections/home');?>
            <?=load_temp('_sections/about');?>
            <?=load_temp('_sections/services');?>
            <?=load_temp('_sections/portfolio');?>
            <?=load_temp('_sections/review');?>
            <?=load_temp('_sections/contact');?>
            
        </main>

        <footer>

            <?=load_temp('_footer');?>
        
        </footer>

        <?=load_temp('_script');?>
    </body>
</html>