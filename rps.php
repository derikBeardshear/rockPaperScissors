<?php 

    echo '<html>';
    echo '<title>Rock Paper Scissors</title>';
    echo '<link href="css/styles.css" rel="stylesheet" type="text/css">';
    echo '<body>';

    $option = $_POST['option'];

    $cpu = cpu();

    function cpu() {
        
        $cpuOption = rand(1, 3);

    }

    if($option == 'Rock' or $option == 'rock') {
        
        echo '<p>You have chosen ' . $option . '.';
        
        if($cpu == 1) {
            
            echo '<p>Draw both you and the computer have chosen the same option.</p>';
            
        }
        
        else if($cpu == 2) {
            
            echo '<p>The computer has chosen Paper, you lose.</p>';
            
        }
        
        else {
            
            echo '<p>The computer has chosen Scissors, you win.</p>';
            
        }
        
        echo '<p>Thank you for playing!</p>';
        
    }

    else if ($option == 'Paper' or $option == 'paper') {
        
        echo '<p>You have chosen ' . $option . '.';
        
        if($cpu == 1) {
            
            echo '<p>The computer has chosen Rock, you win.</p>';
            
        }
        
        else if($cpu == 2) {
            
            echo '<p>Draw both you and the computer have chosen the same option.</p>';
            
        }
        
        else {
            
            echo '<p>The computer has chosen Scissors, you lose.</p>';
            
        }
        
        echo '<p>Thank you for playing!</p>';
        
    }
    
    else if ($option == 'Scissors' or $option == 'scissors') {
        
        echo '<p>You have chosen ' . $option . '.';
        
        if($cpu == 1) {
            
            echo '<p>The computer has chosen Rock, you lose.</p>';
            
        }
        
        else if($cpu == 2) {
            
            echo '<p>The computer has chosen Paper, you win.</p>';
            
        }
        
        else {
            
            echo '<p>Draw both you and the computer have chosen the same option.</p>';
            
        }
        
        echo '<p>Thank you for playing!</p>';
        
    }

    else {
        
        echo '<p>Please make a valid selection.</p>';
        
    }

    echo '<form action="index.html" method="get">';
    echo '<p>Would you like to play again?</p><br />';
    echo '<input type="submit" value="Play" id="play">';
    echo '</form>';
    echo '</body>'
        
?>