<div class="min-w-[50rem] bg-white shadow-lg rounded-2xl p-8">
    <?= $this->Flash->render() ?>
    <h3 class="text-4xl font-medium text-[#8680fe] mb-4">Login</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend class="text-gray-700 text-lg mb-6" ><?= __('Please enter your username and password') ?></legend>
        <div class="text-gray-700 text-left space-y-2 mb-6">
            <?= $this->Form->control('email', ['required' => true, 'class' => 'w-full p-3 border rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-500']) ?>
            <?= $this->Form->control('password', ['required' => true, 'class' => 'w-full p-3 border rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-500']) ?>
        </div>
    </fieldset>
    <div class="text-center">
        <?= $this->Form->submit(__('Login 🔓'), ['class' => 'bg-[#8680fe] text-white px-6 py-3 rounded-2xl text-lg font-semibold hover:bg-[#87d2f4] transition cursor-pointer']); ?>
        <?= $this->Form->end(); ?>
    </div>
</div>

