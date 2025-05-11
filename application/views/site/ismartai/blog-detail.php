<?php include("partials/head.php"); ?>
<?php include("partials/navbar.php"); ?>

<?php
// จำลองการดึงข้อมูลแบบ Static จาก ID (ในระบบจริงจะเชื่อม DB)
$article_id = $_GET['id'] ?? 1;

$articles = [
  1 => [
    'title' => 'เริ่มต้นขายของออนไลน์อย่างไรให้เวิร์ค?',
    'image' => '/assets/img/blog/featured.jpg',
    'date' => '11 พฤษภาคม 2025',
    'content' => "
      <p>ในยุคที่คนหันมาซื้อของผ่านมือถือมากขึ้น เจ้าของร้านจำเป็นต้องมีระบบที่ช่วยตอบแชท ปิดการขาย และวิเคราะห์ข้อมูลลูกค้าได้แบบอัตโนมัติ...</p>
      <h3 class='text-lg font-semibold mt-6'>1. วางเป้าหมายการขายให้ชัด</h3>
      <p>ไม่ว่าจะเป็นรายได้, จำนวนออเดอร์ หรือกลุ่มเป้าหมายที่คุณต้องการ...</p>
      <h3 class='text-lg font-semibold mt-6'>2. ใช้ระบบแชทบอทลดภาระ</h3>
      <p>ismartai จะช่วยให้คุณสามารถตอบคำถามลูกค้าอัตโนมัติได้ 24 ชั่วโมง พร้อมเชื่อมต่อกับหลายช่องทาง...</p>
    ",
  ],
  2 => [
    'title' => 'ตั้งค่าแชทบอทอัตโนมัติใน 5 นาที',
    'image' => '/assets/img/blog/bot-setup.jpg',
    'date' => '10 พฤษภาคม 2025',
    'content' => "
      <p>ismartai chatbot ออกแบบมาให้ใช้งานง่าย ไม่ต้องมีความรู้โค้ดเลย เพียงแค่...</p>
      <ul class='list-disc ml-6 mt-2'>
        <li>เลือกช่องทางที่ต้องการ</li>
        <li>เพิ่มคำถาม-คำตอบ</li>
        <li>เปิดใช้งานทันที</li>
      </ul>
    ",
  ],
  // เพิ่มบทความอื่นๆได้ตามต้องการ
];

$article = $articles[$article_id] ?? $articles[1];
?>

<main class="bg-white dark:bg-gray-900 transition-colors duration-500">
  <section class="py-16 max-w-screen-md mx-auto px-4">
    <div class="mb-8">
      <a href="/blog.php" class="text-sm text-blue-600 dark:text-blue-400 hover:underline">← กลับไปหน้าบทความ</a>
    </div>

    <img src="<?= $article['image']; ?>" alt="<?= $article['title']; ?>" class="w-full rounded-lg mb-6">

    <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-2"><?= $article['title']; ?></h1>
    <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">เผยแพร่เมื่อ <?= $article['date']; ?></p>

    <div class="prose dark:prose-invert max-w-none text-gray-800 dark:text-gray-300">
      <?= $article['content']; ?>
    </div>

    <!-- Social share (ตัวอย่าง) -->
    <div class="mt-10 border-t pt-6">
      <p class="text-sm text-gray-500 mb-2">แชร์บทความนี้:</p>
      <div class="flex space-x-4">
        <a href="#" class="hover:underline text-blue-600">Facebook</a>
        <a href="#" class="hover:underline text-pink-500">Instagram</a>
        <a href="#" class="hover:underline text-sky-500">Twitter</a>
        <!-- เพิ่มไอคอนก็ได้ -->
      </div>
    </div>
  </section>
</main>

<?php include("partials/footer.php"); ?>