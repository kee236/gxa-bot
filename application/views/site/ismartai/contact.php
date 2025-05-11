<?php include("partials/head.php"); ?>
<?php include("partials/navbar.php"); ?>

<main class="bg-white dark:bg-gray-900 transition-colors duration-500">
  <section class="py-16 max-w-screen-xl mx-auto px-4">
    <h1 class="text-4xl font-bold text-center text-gray-800 dark:text-white mb-6">ติดต่อเรา</h1>
    <p class="text-center text-gray-600 dark:text-gray-300 mb-12">สะดวกสบาย พร้อมให้บริการคุณ 24 ชั่วโมง</p>

    <div class="grid md:grid-cols-2 gap-10">
      <!-- Contact Info -->
      <div class="space-y-6 text-gray-700 dark:text-gray-300">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">ประเทศไทย</h2>
        <p><strong>บริษัท:</strong> isamrt company</p>
        <p><strong>ที่อยู่:</strong> 123 ต.รือเสาะ อ.รือเสาะ จ.นราธิวาส 96150</p>
        <p><strong>โทร:</strong> 012-3456789</p>
        <p><strong>อีเมล:</strong> <a href="mailto:support@ismart.com" class="text-blue-600 hover:underline">support@ismart.com</a></p>

        <!-- Social Icons -->
        <div class="flex space-x-4 mt-4">
          <a href="#" aria-label="Facebook">
            <img src="/assets/img/social_media/facebook.svg" alt="Facebook" class="h-6 w-6">
          </a>
          <a href="#" aria-label="Instagram">
            <img src="/assets/img/social_media/instagram.svg" alt="Instagram" class="h-6 w-6">
          </a>
          <a href="#" aria-label="LINE">
            <img src="/assets/img/social_media/line.svg" alt="LINE" class="h-6 w-6">
          </a>
          <a href="#" aria-label="Twitter">
            <img src="/assets/img/social_media/twitter.svg" alt="Twitter" class="h-6 w-6">
          </a>
          <a href="#" aria-label="YouTube">
            <img src="/assets/img/social_media/youtube.svg" alt="YouTube" class="h-6 w-6">
          </a>
        </div>
      </div>

      <!-- Contact Form -->
      <div>
        <form action="#" method="POST" class="space-y-6 bg-gray-50 dark:bg-gray-800 p-6 rounded-lg shadow-md">
          <div>
            <label for="name" class="block mb-1 font-medium text-gray-700 dark:text-gray-200">ชื่อของคุณ</label>
            <input type="text" name="name" id="name" required
              class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md bg-white dark:bg-gray-900 text-gray-800 dark:text-white">
          </div>

          <div>
            <label for="email" class="block mb-1 font-medium text-gray-700 dark:text-gray-200">อีเมล</label>
            <input type="email" name="email" id="email" required
              class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md bg-white dark:bg-gray-900 text-gray-800 dark:text-white">
          </div>

          <div>
            <label for="message" class="block mb-1 font-medium text-gray-700 dark:text-gray-200">ข้อความ</label>
            <textarea name="message" id="message" rows="5" required
              class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md bg-white dark:bg-gray-900 text-gray-800 dark:text-white"></textarea>
          </div>

          <button type="submit"
            class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition text-sm">
            ส่งข้อความ
          </button>
        </form>
      </div>
    </div>
  </section>
</main>

<?php include("partials/footer.php"); ?>