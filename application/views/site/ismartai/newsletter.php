<?php include("partials/head.php"); ?>
<?php include("partials/navbar.php"); ?>

<main class="bg-white dark:bg-gray-900 transition-colors duration-500">
  <section class="py-20 max-w-screen-md mx-auto px-4 text-center">
    <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-4">
      รับข่าวสาร อัปเดต และโปรโมชั่นจาก ismartai
    </h1>
    <p class="text-gray-600 dark:text-gray-300 mb-10">
      เราจะส่งเฉพาะข้อมูลสำคัญ อัปเดตฟีเจอร์ใหม่ และโปรโมชั่นสุดพิเศษให้คุณก่อนใคร
    </p>

    <form action="#" method="POST" class="flex flex-col md:flex-row items-center justify-center gap-4">
      <input type="email" name="email" placeholder="กรอกอีเมลของคุณ"
        class="w-full md:w-2/3 px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-md bg-white dark:bg-gray-800 text-gray-800 dark:text-white placeholder-gray-400"
        required />
      <button type="submit"
        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-md text-sm transition">
        สมัครรับข่าวสาร
      </button>
    </form>

    <!-- ตอบกลับเมื่อสมัคร -->
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
      <div class="mt-8 bg-green-100 text-green-800 dark:bg-green-800 dark:text-white p-4 rounded-md">
        ขอบคุณที่สมัครรับข่าวสาร เราจะติดต่อคุณผ่านอีเมลที่ให้ไว้
      </div>
    <?php endif; ?>
  </section>
</main>

<?php include("partials/footer.php"); ?>