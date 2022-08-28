<?php if(!class_exists('Rain\Tpl')){exit;}?><h1>Hello <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>

<p>Testando templates</p>
<p>Versão <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
<p><?php echo htmlspecialchars( $lorenIpsum, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>