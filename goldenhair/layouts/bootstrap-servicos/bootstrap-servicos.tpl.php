<?php

/*

 * @file

 * Template for a 2 column panel layout.

 *

 * This template provides a two column panel display layout, with

 * additional areas for the top and the bottom.

 *

 * Variables:

 * - $id: An optional CSS id to use for the layout.

 * - $content: An array of content, each item in the array is keyed to one

 *   panel of the layout. This layout supports the following sections:

 *   - $content['top']: Content in the top row.

 *   - $content['left']: Content in the left column.

 *   - $content['right']: Content in the right column.

 *   - $content['bottom']: Content in the bottom row.

 */

?>

  <div class="botao-ligue"><a href="http://goldenhair.com.br/#contato"><img src="http://goldenhair.com.br/sites/all/themes/goldenhair/img/ligue.png" /></a></div>      

<div class="bootstrap clear-block panel-display" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>



  <?php if ($content['top']): ?>

    <div class="row">

      <div class="col-sm-12 col-md-12 col-lg-12"><?php print $content['top']; ?></div>

    </div>    

  <?php endif; ?>


  <div class="row">

    <?php if ($content['left']): ?>

    <div class="panel-col-first col-sm-4">

      <div class="inside"><?php print $content['left']; ?></div>

    </div>

     <?php endif; ?>



     <?php if ($content['right']): ?>

    <div class="panel-col-last col-sm-8">

      <div class="inside">
        <?php print $content['right']; ?>
        <a class="botao" href="http://goldenhair.com.br/?servicos=f#servicos"><i class="fa fa-undo"></i> | Voltar</a>        

      </div>

    </div>

     <?php endif; ?>





  </div>





  <?php if ($content['bottom']): ?>

    <div class="row">

      <div class="col-sm-12 col-md-12 col-lg-12"><?php print $content['bottom']; ?></div>

    </div>    

  <?php endif; ?>

</div>

