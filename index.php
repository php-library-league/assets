<?php
    $name = 'PHP Library';
    $repository = '90zlaya/php-library';
    $location_prefix = basename(getcwd()) === 'assets' ? './' : './assets/';
    $links = array(
        'on_github' => array(
            'name' => 'View on GitHub',
            'url' => 'https://github.com/' . $repository
        ),
        'on_packagist' => array(
            'name' => 'View on Packagist',
            'url' => 'https://packagist.org/packages/' . $repository
        )
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="<?=$name?>" property="og:title">
    <meta name="description" content="<?=$name?> is a set of classes that contain the most useful attributes and methods that facilitate the development of Web applications">
    <title><?=$name?></title>
    <link href="<?=$location_prefix?>img/phplibrary-icon.png" rel="shortcut icon" type="image/png">
    <link href="https://cdn.rawgit.com/rstacruz/flatdoc/v0.9.0/theme-white/style.css" rel="stylesheet">
    <link href="https://ricostacruz.com/flatdoc/support/theme.css" rel="stylesheet">
    <style>
        :root { --php-library-color: #08a5cd; }
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
        body:not(.big-h3) .content h3 { color: var(--php-library-color); }
        .button { border: solid 2px var(--php-library-color); color: #fff; }
        .button:visited, a.big.button:hover { background: var(--php-library-color); }
        a.big.button { border: solid 3px var(--php-library-color); }
        .content ul > li:before { border: solid 1px var(--php-library-color); }
        .title-card h1 { font-family: montserrat, sans-serif; }
        .title-image { background-image: url('<?=$location_prefix?>img/background.jpg'); }
        @media only screen and (max-width: 768px) {
            .content h1::before, .content h2::before, .content .big-heading::before, body.big-h3 .content h3::before { max-width: 100%; left: auto; }
        }
    </style>
</head>
<body role="flatdoc" class="big-h3 large-brief">
    <div class="title-area title-card title-image">
        <div class="in">
            <div class="headline">
                <h1><?=$name?></h1>
                <p>Set of classes that contain the most useful attributes and methods that facilitate the development of Web applications</p>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="left">
            <h1><?=$name?></h1>
            <ul>
                <?php
                    foreach ($links as $link) {
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
                <a class="big button"
                    href="<?=$links['on_github']['url'] . '/releases/latest'?>"
                    target="_blank"
                    rel="noopener"
                >Download</a>
            </div>
            <div class="menu section" role="flatdoc-menu"></div>
        </div>
        <div role="flatdoc-content" class="content"></div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/rstacruz/flatdoc/v0.9.0/legacy.js"></script>
    <script src="https://cdn.rawgit.com/rstacruz/flatdoc/v0.9.0/flatdoc.js"></script>
    <script src="https://cdn.rawgit.com/rstacruz/flatdoc/v0.9.0/theme-white/script.js "></script>
    <script src="https://ricostacruz.com/flatdoc/support/theme.js"></script>
    <script>Flatdoc.run({ fetcher: Flatdoc.github("<?=$repository?>") });</script>
</body>
</html>
