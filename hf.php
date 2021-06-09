<?php
function cabeza(){
    echo '<nav>';    
    echo '<div class="nav-wrapper black">';
    echo '<a href="#" class="brand-logo center">PAT :D</a>';
    echo '<ul id="nav-mobile" class="left hide-on-med-and-down">';
    echo '<li><a href="../index.php">JSON_Page</a></li>';
    echo '</ul>';
    echo '</div>';
    echo '</nav>';
}

function fin(){
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col l6 s12">';
    echo '<h5 class="white-text">Footer Content</h5>';
    echo '<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>';
    echo '</div>';
    echo '<div class="col l4 offset-l2 s12">';
    echo '<h5 class="white-text">Links</h5>';
    echo '<ul>';
    echo '<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>';
    echo '<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>';
    echo '<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>';
    echo '<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>';
    echo '</ul>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<div class="footer-copyright">';
    echo '<div class="container">';
    echo '© 2014 Copyright Text';
    echo '<a class="grey-text text-lighten-4 right" href="#!">More Links</a>';
    echo '</div>';
    echo '</div>';
}
