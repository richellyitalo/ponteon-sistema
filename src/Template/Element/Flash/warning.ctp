<?php
if (isset($params['escape']) && $params['escape'] == true) {
    $message = h($message);
}
?>
<div class="alert alert-warning" ><?= $message ?></div>
