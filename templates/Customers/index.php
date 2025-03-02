<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Customer> $customers
 */

?>
<div class="bg-white shadow-lg rounded-2xl p-10">
    <?= $this->Html->link(__('New Customer'), ['action' => 'add'], ['class' => 'bg-[#8680fe] float-right text-white px-6 py-3 rounded-2xl text-lg font-semibold hover:bg-[#87d2f4] transition cursor-pointer']) ?>
    <h3 class="text-4xl font-medium text-[#8680fe] mb-4"><?= __('Customers') ?></h3>
    <div>
        <table>
            <thead>
                <tr>
                    <th class="px-6 py-3 text-left"><?= $this->Paginator->sort('name') ?></th>
                    <th class="px-6 py-3 text-left"><?= $this->Paginator->sort('email') ?></th>
                    <th class="px-6 py-3 text-left"><?= $this->Paginator->sort('phone') ?></th>
                    <th class="px-6 py-3 text-left"><?= $this->Paginator->sort('created') ?></th>
                    <th class="px-6 py-3 text-left"><?= $this->Paginator->sort('modified') ?></th>
                    <th class="px-6 py-3 text-center"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                    <tr class="border-b hover:bg-gray-100">
                        <td class="px-6 py-4"><?= h($customer->name) ?></td>
                        <td class="px-6 py-4"><?= h($customer->email) ?></td>
                        <td class="px-6 py-4"><?= h($customer->phone) ?></td>
                        <td class="px-6 py-4"><?= h($customer->created) ?></td>
                        <td class="px-6 py-4"><?= h($customer->modified) ?></td>
                        <td class="px-6 py-4 text-center space-x-2">
                            <div class="h-5 w-25 flex items-center justify-center gap-x-2.5"> 
                                <?= $this->Html->link(__('👁️'), ['action' => 'view', $customer->id], ['class' => 'no-underline text-xl hover:text-3xl duration-250']) ?>
                                <?= $this->Html->link(__('📝'), ['action' => 'edit', $customer->id], ['class' => 'no-underline text-xl hover:text-3xl duration-250']) ?>
                                <?= $this->Form->postLink(__('❌'), ['action' => 'delete', $customer->id], [
                                    'confirm' => __('Are you sure you want to delete # {0}?', $customer->id),
                                    'class' => 'no-underline text-xl hover:text-3xl duration-250'
                                ]) ?>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator mt-6">
        <ul class="pagination flex justify-center space-x-2 text-[#8680fe]">
            <?= $this->Paginator->first('<< ' . __('First'), ['class' => 'px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 transition']) ?>
            <?= $this->Paginator->prev('< ' . __('Previous'), ['class' => 'px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 transition']) ?>
            <?= $this->Paginator->numbers(['Before' => '', 'After' => '', 'class' => 'px-4 py-2 bg-white border rounded-lg hover:bg-gray-100 transition']) ?>
            <?= $this->Paginator->next(__('Next') . ' >', ['class' => 'px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 transition']) ?>
            <?= $this->Paginator->last(__('Last') . ' >>', ['class' => 'px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 transition']) ?>
        </ul>
        <p class="text-center text-gray-600 mt-4">
            <?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?>
        </p>
    </div>
</div>
