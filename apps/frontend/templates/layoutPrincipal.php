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
                
                <div id="pagebody">
                        <div id="pagebody-inner" class="pkg">
                            <div id='hnav'>
                                barrita
                            </div>
                             <div id='hnavmenu'>
                            <div id='navmenu'>
                                    <?php include_partial('sfBreadNav/navmenu', array('menu' => 'menuPrincipal')) ?>
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
