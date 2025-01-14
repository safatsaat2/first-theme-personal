<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?> <!-- This is essential for WordPress to load scripts and styles -->
</head>
<body <?php body_class(); ?>> <!-- Adds dynamic body classes -->
    <header class="srs-header">
        <!-- Header content goes here -->
    </header>
