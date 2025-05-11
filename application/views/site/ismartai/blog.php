<?php include("partials/head.php"); ?>
<?php include("partials/navbar.php"); ?>

<main class="bg-white dark:bg-gray-900 transition-colors duration-500">
  <section class="py-16 max-w-screen-xl mx-auto px-4">
    <h1 class="text-4xl font-bold text-center text-gray-800 dark:text-white mb-6">บทความและเคล็ดลับการขายออนไลน์</h1>
    <p class="text-center text-gray-600 dark:text-gray-300 mb-12">เรียนรู้เทคนิค ขยายยอดขาย และใช้ ismartai อย่างมีประสิทธิภาพ</p>

    <!-- Featured Article -->
    <div class="grid md:grid-cols-2 gap-8 mb-16">
      <img src="/assets/img/blog/featured.jpg" alt="บทความเด่น" class="rounded-lg shadow-md w-full h-auto">
      <div class="flex flex-col justify-center">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">เริ่มต้นขายของออนไลน์อย่างไรให้เวิร์ค?</h2>
        <p class="text-gray-600 dark:text-gray-300 mb-6">รวมเคล็ดลับการเริ่มต้นธุรกิจขายออนไลน์ สำหรับผู้ที่ไม่เคยขายของมาก่อน พร้อมเครื่องมือช่วยประหยัดเวลา</p>
        <a href="/blog-detail.php?id=1" class="text-blue-600 dark:text-blue-400 hover:underline text-sm font-medium">อ่านบทความเต็ม →</a>
      </div>
    </div>

    <!-- Other Articles -->
    <div class="grid md:grid-cols-3 gap-8">
      <?php
      $articles = [
        [
          "title" => "ตั้งค่าแชทบอทอัตโนมัติใน 5 นาที",
          "image" => "/assets/img/blog/bot-setup.jpg",
          "desc" => "แนะนำวิธีเริ่มต้นใช้งาน ismartai chatbot แบบรวดเร็วไม่ง้อทีมไอที",
          "id" => 2
        ],
        [
          "title" => "เทคนิคโพสต์ขายให้คนอยากซื้อ",
          "image" => "/assets/img/blog/marketing.jpg",
          "desc" => "เขียนยังไงให้ลูกค้าอยากกด ซื้อ ตอนนี้ทันที!",
          "id" => 3
        ],
        [
          "title" => "สรุปฟีเจอร์ใหม่ ismartai 2025",
          "image" => "/assets/img/blog/update.jpg",
          "desc" => "บรอดแคสต์ AI, การวิเคราะห์ความคิดเห็น, และโพสต์แบบ Multi-platform",
          "id" => 4
        ]
      ];

      foreach ($articles as $article) :
      ?>
        <div class="bg-gray-50 dark:bg-gray-800 rounded-lg shadow hover:shadow-md transition p-4">
          <img src="<?= $article['image']; ?>" alt="<?= $article['title']; ?>" class="rounded-md mb-4 h-40 w-full object-cover">
          <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-2"><?= $article['title']; ?></h3>
          <p class="text-sm text-gray-600 dark:text-gray-300 mb-3"><?= $article['desc']; ?></p>
          <a href="/blog-detail.php?id=<?= $article['id']; ?>" class="text-blue-600 dark:text-blue-400 text-sm hover:underline">อ่านเพิ่มเติม →</a>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-12">
      <a href="/blog-all.php" class="inline-block px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 text-sm">
        ดูบทความทั้งหมด
      </a>
    </div>
  </section>
</main>

<?php include("partials/footer.php"); ?>