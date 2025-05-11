<?php include("partials/head.php"); ?>
<?php include("partials/navbar.php"); ?>

<main class="bg-white dark:bg-gray-900 transition-colors duration-500">
  <section class="py-20 max-w-screen-xl mx-auto px-4">
    <h1 class="text-4xl font-bold text-center text-gray-800 dark:text-white mb-4">แพ็กเกจที่เหมาะกับคุณ</h1>
    <p class="text-center text-gray-600 dark:text-gray-300 mb-12">เลือกแผนการใช้งานที่ตรงกับความต้องการของธุรกิจคุณ</p>

    <!-- Pricing Cards -->
    <div class="grid md:grid-cols-3 gap-8 mb-16">
      <?php
      $plans = [
        [
          "name" => "เริ่มต้น",
          "price" => "490",
          "features" => ["แชทบอท Keyword", "โพสต์อัตโนมัติ (1 ช่องทาง)", "ดูรายชื่อลูกค้า", "ตอบกลับคอมเมนต์"],
          "highlight" => false
        ],
        [
          "name" => "ธุรกิจ",
          "price" => "1,290",
          "features" => ["แชทบอท Flow", "บรอดแคสต์ข้อความ", "จัดกลุ่มลูกค้า", "Google Sheets & API"],
          "highlight" => true
        ],
        [
          "name" => "องค์กร",
          "price" => "2,990",
          "features" => ["แชทบอท AI (OpenAI)", "ระบบอีคอมเมิร์ซ", "สรุปรายงานยอดขาย", "Live Chat หลายพนักงาน"],
          "highlight" => false
        ]
      ];

      foreach ($plans as $plan) :
      ?>
        <div class="p-6 rounded-xl shadow-sm <?= $plan['highlight'] ? 'bg-blue-50 border-2 border-blue-600' : 'bg-white dark:bg-gray-800'; ?>">
          <h3 class="text-xl font-bold text-gray-800 dark:text-white"><?= $plan['name']; ?></h3>
          <p class="text-3xl font-bold text-blue-600 mt-4 mb-6">฿<?= $plan['price']; ?>/เดือน</p>
          <ul class="mb-6 text-sm text-gray-600 dark:text-gray-300 space-y-2">
            <?php foreach ($plan['features'] as $feature) : ?>
              <li>✓ <?= $feature; ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/register" class="block w-full text-center bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 text-sm">
            <?= $plan['highlight'] ? 'ทดลองใช้ฟรี' : 'เลือกแพ็กเกจนี้'; ?>
          </a>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Feature Comparison Table -->
    <div class="overflow-x-auto">
      <table class="w-full text-sm text-left text-gray-600 dark:text-gray-300 border-collapse">
        <thead class="bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-white">
          <tr>
            <th class="px-4 py-3">คุณสมบัติ</th>
            <th class="px-4 py-3">เริ่มต้น</th>
            <th class="px-4 py-3">ธุรกิจ</th>
            <th class="px-4 py-3">องค์กร</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $features = [
            "แชทบอท Keyword" => ["✓", "✓", "✓"],
            "Flow การสนทนา" => ["-", "✓", "✓"],
            "บรอดแคสต์" => ["-", "✓", "✓"],
            "Google Sheets" => ["-", "✓", "✓"],
            "Live Chat" => ["-", "✓", "✓"],
            "แชทบอท AI (OpenAI)" => ["-", "-", "✓"],
            "อีคอมเมิร์ซ/คำสั่งซื้อ" => ["-", "-", "✓"],
          ];

          foreach ($features as $feature => $values) {
            echo "<tr class='border-t'>";
            echo "<td class='px-4 py-2 font-medium'>{$feature}</td>";
            foreach ($values as $val) {
              echo "<td class='px-4 py-2 text-center'>" . $val . "</td>";
            }
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </section>
</main>

<?php include("partials/footer.php"); ?>