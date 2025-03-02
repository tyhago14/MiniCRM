<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="p-4 bg-green-600 text-white border border-green-900 rounded-2xl mb-8 mx-auto w-[65rem]" onclick="this.classList.add('hidden')"><?= $message ?></div>
