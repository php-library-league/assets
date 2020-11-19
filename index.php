<?php
    $name       = 'PHP Library';
    $repository = '90zlaya/php-library';
    $assets_location_prefix = basename(getcwd()) === 'assets'
        ? './'
        : 'https://php-library.zlatanstajic.com/assets/';
    $php_library = [
        'on_github'    => [
            'name' => 'View on GitHub',
            'url'  => 'https://github.com/' . $repository
        ],
        'on_packagist' => [
            'name' => 'View on Packagist',
            'url'  => 'https://packagist.org/packages/' . $repository
        ],
        'issues'       => [
            'name' => 'Issues',
            'url'  => 'https://github.com/' . $repository . '/issues'
        ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <link rel="shortcut icon" href="<?=$assets_location_prefix?>img/phplibrary-icon.png" type="image/png">
        <title><?=$name?></title>
        <meta content="<?=$name?>" property="og:title">
        <meta content="<?=$name?> is a set of classes that contain the most useful attributes and methods that facilitate the development of Web applications" name="description">
        <!-- Flatdoc theme -->
        <link href="https://cdn.rawgit.com/rstacruz/flatdoc/v0.9.0/theme-white/style.css" rel="stylesheet">
        <link href="https://ricostacruz.com/flatdoc/support/theme.css" rel="stylesheet">
        <!-- Custom PHP Library style -->
        <style>
          a,
          a.big.button,
          a.big.button:visited,
          .menu a,
          .menu a.active:after,
          .menu a:visited,
          .menu a.level-1,
          .menu a.level-1:visited,
          .content i,
          .content em,
          .content blockquote,
          .content h4,
          .content h5,
          .content .small-heading,
          .content .button + em,
          .header h1,
          .header li a,
          .header h1 a,
          .header h1 a:visited,
          body:not(.big-h3) .content h3 { color: #08A5CD; }
          .button { border: solid 2px #08A5CD; color: #fff; }
          .button:visited { background: #08A5CD; }
          a.big.button { border: solid 3px #08A5CD; }
          .content ul > li:before { border: solid 1px #08A5CD; }
          .title-image { background-image: url('img/background.jpg'); }
        </style>
    </head>
    <body role="flatdoc" class="big-h3 large-brief">
        <div class="title-area title-card title-image">
            <div class="in">
                <div class="headline">
                    <h1><?=$name?></h1>
                    <p>Set of classes containing most useful methods and variables for Web Development</p>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="left">
                <h1><?=$name?></h1>
                <ul>
                    <?php
                        foreach ($php_library as $link)
                        {
                            echo '<li><a href="';
                            echo $link['url'];
                            echo '" target="_blank" rel="noopener">';
                            echo $link['name'];
                            echo '</a></li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="content-root">
            <div class="menubar">
                <div class="section">
                    <a
                        class="big button"
                        href="<?=$php_library['on_github']['url'] . '/releases/latest'?>"
                        target="_blank"
                        rel="noopener"
                    >Download</a>
                </div>
                <div class="menu section" role="flatdoc-menu"></div>
            </div>
            <div role="flatdoc-content" class="content"></div>
        </div>
        <!-- jQuery Load -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <!-- Flatdoc -->
        <script src="https://cdn.rawgit.com/rstacruz/flatdoc/v0.9.0/legacy.js"></script>
        <script src="https://cdn.rawgit.com/rstacruz/flatdoc/v0.9.0/flatdoc.js"></script>
        <script src="https://cdn.rawgit.com/rstacruz/flatdoc/v0.9.0/theme-white/script.js "></script>
        <script src="https://ricostacruz.com/flatdoc/support/theme.js"></script>
        <!-- Initializer -->
        <script>Flatdoc.run({ fetcher: Flatdoc.github("<?=$repository?>") });</script>
    </body>
</html>
