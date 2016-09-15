<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 15/09/2016
 * Time: 13:55
 */
$total = count($items);
for ($i = 0; $i < $total; ++$i): ?>
  <p><?php print render($items[$i]); ?></p>
<?php endfor; ?>