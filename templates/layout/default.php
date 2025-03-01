<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
$identity = $this->request->getAttribute('identity');
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['style']) ?> 

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="bg-blue-50">
    <div class="flex items-center justify-between max-w-[120rem] p-8 mx-auto mb-8">
        <div class="space-x-4 flex items-center">
            <a href="<?= $this->Url->build('/') ?>" class="text-[#8680fe] text-3xl font-medium"><span class="text-gray-700 font-medium">Mini</span>CRM</a>
            <img class="size" src="<?= $this->Url->build('/img/agenda.svg') ?>" alt="logo" style="width:40px;">
        </div>
        <div class="space-x-8">
            <?php if ($identity): ?>
                <a class="text-gray-500 font-medium text-2xl hover:text-[#87d2f4] transition" href="http://localhost:8765/customers">Customers</a>
                <a class="text-gray-500 font-medium text-2xl hover:text-[#87d2f4] transition" href="http://localhost:8765/users/logout">Logout</a>
            <?php else: ?>
                <a class="text-gray-500 font-medium text-2xl hover:text-[#87d2f4] transition" href="http://localhost:8765/users/login">Login</a>
                <a class="text-gray-500 font-medium text-2xl hover:text-[#87d2f4] transition" href="http://localhost:8765/users/add">Sign In</a>
            <?php endif; ?>
        </div>
    </div>
    <main class="main">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
    </main>
    <footer>
    </footer>
</body>
</html>
