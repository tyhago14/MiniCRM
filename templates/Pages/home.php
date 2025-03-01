<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset=utf-8>
  <?= $this->Html->css([ 'style']) ?> 
</head>
<body>
  <div class="flex items-center justify-around max-w-[120rem] p-12 mx-auto mb-8">
    <div class="max-w-3xl bg-white shadow-lg rounded-2xl p-8 text-center">
      <h1 class="text-4xl font-medium text-[#8680fe] mb-4">Welcome to Mini CRM</h1>
      <p class="text-gray-700 text-lg mb-6">
        Manage your contacts effortlessly with <strong>Mini CRM</strong>, a simple yet powerful contact management system built with 
        <span class="text-[#8680fe]">CakePHP</span> and <span class="text-[#8680fe]">Tailwind CSS</span>.
      </p>
              
      <div class="bg-[#ffe7de] p-4 rounded-lg mb-6">
        <h2 class="text-xl font-medium text-[#8680fe] mb-2">What You Can Do:</h2>
        <ul class="text-gray-700 text-left space-y-2">
          <li>✅ <strong>Register & Log In</strong> – Secure authentication to keep your data safe.</li>
          <li>✅ <strong>Add Contacts</strong> – Easily store new contacts in the database.</li>
          <li>✅ <strong>View Contact List</strong> – Access all saved contacts in an organized list.</li>
          <li>✅ <strong>Edit & Delete Contacts</strong> – Update or remove contact details with just a click.</li>
        </ul>
      </div>

      <p class="text-gray-600 mb-6">With a clean and responsive design, Mini CRM ensures a smooth user experience.</p>        
      <a href="http://localhost:8765/users/add" class="bg-[#8680fe] text-white px-6 py-3 rounded-lg text-lg font-semibold hover:bg-[#87d2f4] transition">
      Get Started 🚀
      </a>
    </div>
    <div>
      <img class="size" src="<?= $this->Url->build('/img/home.png') ?>" alt="home" style="width:40rem;">
    </div>
  </div>
</body>
</html>