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
    <script type="text/javascript" src="//use.typekit.net/jbq6ddu.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<body class="<?php echo $this->slug() == "" ? 'homepage' : $this->slug() ; ?>">




    <div class="container">
        <div class="row">
            <div class="col-sm-2 hidden-xs">
                <img src="<?php echo URL_PUBLIC; ?>public/themes/current/uxlausanne/assets/img/logo_uxls.svg" alt="" width="100%" class="isolated">
            </div>
            <div class="col-sm-8">
                <nav id="nav" class="main-nav" role="navigation">
                    <div class="header-v-center">
                        <ul class="nav nav-pills nav-centered">
                            <li><a<?php echo url_match('/') ? ' class="current"': ''; ?> href="<?php echo URL_PUBLIC; ?>">Home</a></li>
                            <?php foreach($this->find('/')->children() as $menu): ?>
                                <li><?php echo $menu->link($menu->title, (in_array($menu->slug, explode('/', $this->url)) ? ' class="current"': null)); ?></li>
                            <?php endforeach; ?> 
                        </ul>
                        <a class="close-btn" id="nav-close-btn" href="#top">Return to Content</a>
                    </div>
                </nav>
            </div>
            <div class="col-sm-2 hidden-xs">
                <div class="header-v-center-sm text-center">
                    <a href="http://register.uxlausanne.com/" target="_blank" class="btn btn-primary btn-lg">
                        Buy tickets

                    </a>
                    <p>
                        <small>special infos like the date</small>
                    </p>
                </div>
            </div>
        </div>
    </div>        



