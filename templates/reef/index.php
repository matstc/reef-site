<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >

  <head>
  <jdoc:include type="head" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
  </head>

  <body>
  <jdoc:include type="modules" name="top" /> 

  <h2>Breadcrumbs</h2>
  <jdoc:include type="modules" name="position-2" />
  <jdoc:include type="modules" name="static-content" />
  <jdoc:include type="component" />
  <jdoc:include type="modules" name="bottom" />
  </body>

</html>
