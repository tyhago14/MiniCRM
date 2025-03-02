<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="flex items-center justify-center ">
<div class="flex bg-white shadow-lg rounded-2xl">
    <!-- Sidebar Actions -->
    <aside class="bg-[#ffe7de] min-w-[19rem] p-10 overflow-hidden">
        <div class="grid">
            <h4 class="text-2xl font-medium text-[#8680fe] mb-4"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('🔍 List Customers'), ['action' => 'index'], ['class' => 'py-4 text-xl hover:text-2xl duration-250']) ?>
        </div>
    </aside>

    <!-- Form Section -->
    <div class="min-w-2xl p-10">
        <div class="text-left">
            <?= $this->Form->create($customer) ?>
            <fieldset class="space-y-4">
                <legend class="text-4xl font-medium text-[#8680fe] mb-6"><?= __('👨‍🦱 Add Customer') ?></legend>
                <?php
                    echo $this->Form->control('name', [
                        'class' => 'w-full px-4 py-3 text-xl border border-gray-300 rounded-2xl focus:ring-2 focus:ring-[#8680fe] focus:border-[#8680fe] outline-none',
                        'label' => ['class' => 'block text-lg font-medium text-gray-700']
                    ]);

                    echo $this->Form->control('email', [
                        'class' => 'w-full px-4 py-3 text-xl border border-gray-300 rounded-2xl focus:ring-2 focus:ring-[#8680fe] focus:border-[#8680fe] outline-none',
                        'label' => ['class' => 'block text-lg font-medium text-gray-700']
                    ]);

                    echo $this->Form->control('phone', [
                        'class' => 'w-full px-4 py-3 text-xl border border-gray-300 rounded-2xl focus:ring-2 focus:ring-[#8680fe] focus:border-[#8680fe] outline-none',
                        'label' => ['class' => 'block text-lg font-medium text-gray-700']
                    ]);
                ?>
            </fieldset>

            <!-- Submit Button -->
            <div class="text-center pt-6">
                <?= $this->Form->button(__('Submit'), ['class' => 'bg-[#8680fe] text-white px-6 py-3 rounded-2xl text-lg font-semibold hover:bg-[#87d2f4] transition cursor-pointer']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
</div>
