<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
  </head>

    <body class="layout-two-column-right">
        <div id="top"></div>
        <div id="container">
            <div id="container-inner" class="pkg">
            <div id="banner">
                <div id="banner-inner" class="pkg">
                    <h1 id="banner-header"></h1>
                    <h2 id="banner-subject"></h2>
                    <h3 id="banner-description"><?php echo __('Sistema de Gestión') ?></h3>
                </div>
            </div>
                <div id="pagebody">
                        <div id="pagebody-inner" class="pkg">
                            <div id='hnav'>
                            
                            </div>
                             <div id='hnavmenu'>
                            <div id='navmenu'>
                                    <?php //include_partial('sfBreadNav/navmenu', array('menu' => 'menuPrincipal')) ?>
                            </div>

                            </div>

                            <div id="alpha">
                                <div id="alpha-inner" class="pkg content">
                                   <?php echo $sf_content ?>
                               </div>
                              </div>
                               <div class="clear">&nbsp;</div>
                        </div>

                </div>

            <div id="footer">
              Pie
              <?php //include('_footer.php') ?>
            </div>

            </div>
        </div>
    </body>
</html>
