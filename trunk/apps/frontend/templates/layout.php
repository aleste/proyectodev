<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                        <h1 id="banner-header"><?php //echo __('Sistema de Gestión') ?></h1>
                        <h2 id="banner-subject"><?php //echo __('Sistema de Gestión') ?></h2>
                        <h3 id="banner-description"><?php //echo __('Sistema de Gestión') ?></h3>
                    </div>
                </div>
                <div id="pagebody">
                        <div id="pagebody-inner" class="pkg">
                            <div class='hnav'>
                                <?php //include('_nav.php') ?>                                
                            </div>
                            <div class="clear">&nbsp;</div>
                               <?php echo $sf_content ?>                           
                        </div>
                </div>
            
            </div>
        </div>
    </body>
</html>
