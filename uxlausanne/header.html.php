<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo URL_PUBLIC; ?>public/themes/current/uxlausanne/assets/css/uxlausanne.css" />
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Dosis:300,500,700">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, follow" />
        <meta name="description" content="<?php echo ($this->description() != '') ? $this->description() : ''; ?>" />
        <meta name="keywords" content="<?php echo ($this->keywords() != '') ? $this->keywords() : '' ; ?>" />
        <title><?php echo $this->title(); ?></title>
        <script src="<?php echo URL_PUBLIC; ?>public/themes/current/uxlausanne/assets/js/modernizr.js"></script>
    </head>
    <body>

        <div id="outer-wrap">
            <div id="inner-wrap">
                <header class="section">
                    <div id="top">
                        <a class="nav-btn" id="nav-open-btn" href="#nav">Menu</a>
                    </div>
                </header>
                <nav id="nav" class="main-nav" role="navigation">
                    <ul class="nav nav-pills nav-centered">
                        <li><a<?php echo url_match('/') ? ' class="current"': ''; ?> href="<?php echo URL_PUBLIC; ?>">Home</a></li>
                        <?php foreach($this->find('/')->children() as $menu): ?>
                        <li><?php echo $menu->link($menu->title, (in_array($menu->slug, explode('/', $this->url)) ? ' class="current"': null)); ?></li>
                        <?php endforeach; ?> 
                        <li class="register highlight"><a href="http://register.uxlausanne.com/" target="_blank">Buy tickets</a></li>
                    </ul>
                    <a class="close-btn" id="nav-close-btn" href="#top">Return to Content</a>
                </nav>