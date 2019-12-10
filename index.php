<?php
    $name       = 'PHP Library';
    $repository = '90zlaya/php-library';

    $assets_location_prefix = basename(getcwd()) === 'assets'
        ? './'
        : 'https://php-library.zlatanstajic.com/assets/';

    $php_library = array(
        'hyperlinks' => array(
            'php_library' => array(
                'on_github'    => array(
                    'name' => 'View on GitHub',
                    'url'  => 'https://github.com/' . $repository,
                ),
                'on_packagist' => array(
                    'name' => 'View on Packagist',
                    'url'  => 'https://packagist.org/packages/' . $repository,
                ),
                'issues'       => array(
                    'name' => 'Issues',
                    'url'  => 'https://github.com/' . $repository . '/issues',
                ),
            ),
        ),
    );
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
        <meta content="<?=$name?> is set of classes containing most useful methods and variables for Web Development" name="description">
        <!-- jQuery Load -->
        <script src="<?=$assets_location_prefix?>js/jquery.min.js"></script>
        <!-- Flatdoc -->
        <script src="<?=$assets_location_prefix?>js/legacy.js"></script>
        <script src="<?=$assets_location_prefix?>js/flatdoc.js"></script>
        <!-- Flatdoc theme -->
        <link href="<?=$assets_location_prefix?>css/style.css" rel="stylesheet">
        <script src="<?=$assets_location_prefix?>js/script.js"></script>
        <link href="<?=$assets_location_prefix?>css/theme.css" rel="stylesheet">
        <script src="<?=$assets_location_prefix?>js/theme.js"></script>
        <!-- Custom PHP Library style -->
        <link href="<?=$assets_location_prefix?>css/custom.css" rel="stylesheet">
        <!-- Initializer -->
        <script>
            Flatdoc.run({
                fetcher: Flatdoc.github("<?=$repository?>")
            });
        </script>
    </head>
    <body role="flatdoc" class="big-h3 large-brief">
        <!-- TITLE -->
        <div class="title-area title-card title-image">
            <div class="in">
                <div class="headline">
                    <h1><?=$name?></h1>
                    <p>Set of classes containing most useful methods and variables for Web Development</p>
                </div>
            </div>
        </div>
        <!-- HEADER -->
        <div class="header">
            <div class="left">
                <h1><?=$name?></h1>
                <ul>
                    <?php
                        foreach ($php_library['hyperlinks']['php_library'] as $link)
                        {
                            echo '<li><a href="';
                            echo $link['url'];
                            echo '" target="_blank">';
                            echo $link['name'];
                            echo '</a></li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
        <!-- CONTENT -->
        <div class="content-root">
            <div class="menubar">
                <div class="section">
                    <a class="big button" href="<?=$php_library['hyperlinks']['php_library']['on_github']['url'] . '/releases/latest'?>" target="_blank">Download</a>
                </div>
                <div class="menu section" role="flatdoc-menu"></div>
            </div>
            <div role="flatdoc-content" class="content"></div>
        </div>
    </body>
</html>
