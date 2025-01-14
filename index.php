<?php
get_header();
if(have_posts()){
    while(have_posts()){
        the_post();
        the_title('<h1>', '</h1>');
    }
}
else{
    echo '<p>No Posts Found</p>';
}
get_footer();

