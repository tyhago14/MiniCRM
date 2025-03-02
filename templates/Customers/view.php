<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<div class="flex items-center justify-center ">
<div class="flex bg-white shadow-lg rounded-2xl">
    <aside class="bg-[#ffe7de] min-w-[19rem] p-10 overflow-hidden">
        <div class="grid">
            <h4 class="text-2xl font-medium text-[#8680fe] mb-4"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('📝 Edit Customer'), ['action' => 'edit', $customer->id], ['class' => 'py-4 text-xl hover:text-2xl duration-250']) ?>
            <?= $this->Form->postLink(__('❌ Delete Customer'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id), 'class' => 'py-4 text-xl hover:text-2xl duration-250']) ?>
            <?= $this->Html->link(__('🔍 List Customers'), ['action' => 'index'], ['class' => 'py-4 text-xl hover:text-2xl duration-250']) ?>
            <?= $this->Html->link(__('👨‍🦱 New Customer'), ['action' => 'add'], ['class' => 'py-4 text-xl hover:text-2xl duration-250']) ?>
        </div>
    </aside>
    <div class="min-w-2xl p-10">
        <div class="text-left">
            <h3 class="text-4xl font-medium text-[#8680fe] mb-4"><?= h($customer->name) ?></h3>
            <table class="min-w-full">
                <tr class="border-b">
                    <th class="py-4 text-xl font-bold"><?= __('Name') ?></th>
                    <td class="pl-7 text-xl"><?= h($customer->name) ?></td>
                </tr>
                <tr class="border-b">
                    <th class="py-4 text-xl font-bold"><?= __('Email') ?></th>
                    <td class="pl-7 text-xl"><?= h($customer->email) ?></td>
                </tr>
                <tr class="border-b">
                    <th class="py-4 text-xl font-bold"><?= __('Phone') ?></th>
                    <td class="pl-7 text-xl"><?= h($customer->phone) ?></td>
                </tr>
                <tr class="border-b">
                    <th class="py-4 text-xl font-bold"><?= __('Created') ?></th>
                    <td class="pl-7 text-xl"><?= h($customer->created) ?></td>
                </tr>
                <tr class="border-b">
                    <th class="py-4 text-xl font-bold"><?= __('Modified') ?></th>
                    <td class="pl-7 text-xl"><?= h($customer->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
</div>
