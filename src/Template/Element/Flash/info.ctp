<?php
if (isset($params['escape']) && $params['escape'] == true) {
    $message = h($message);
}
?>
<div class="alert alert-info" ><?= $message ?></div>
