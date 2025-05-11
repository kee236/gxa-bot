<?php include("partials/head.php"); ?>
<?php include("partials/navbar.php"); ?>

<main class="bg-white dark:bg-gray-900 transition-colors duration-500">
  <section class="py-16 max-w-screen-md mx-auto px-4">
    <h1 class="text-4xl font-bold text-center text-gray-800 dark:text-white mb-6">คำถามที่พบบ่อย (FAQ)</h1>
    <p class="text-center text-gray-600 dark:text-gray-300 mb-12">รวมคำถามจากผู้ใช้งาน ismartai เกี่ยวกับระบบ แพ็กเกจ และการใช้งาน</p>

    <!-- FAQ Accordion -->
    <div id="accordion-collapse" data-accordion="collapse" class="space-y-4">

      <!-- คำถาม: ระบบใช้งานได้กี่ช่องทาง -->
      <div class="border rounded-lg bg-gray-50 dark:bg-gray-800 border-gray-200 dark:border-gray-700">
        <h2>
          <button type="button"
            class="flex justify-between items-center w-full p-4 font-medium text-left text-gray-800 dark:text-white"
            data-accordion-target="#faq-1" aria-expanded="false" aria-controls="faq-1">
            ระบบเชื่อมต่อได้กี่ช่องทางบ้าง?
            <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.25 4.25a.75.75 0 01-1.06 0L5.23 8.29a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </button>
        </h2>
        <div id="faq-1" class="hidden p-4 text-gray-600 dark:text-gray-300">
          รองรับ Facebook, Instagram, LINE OA, TikTok, Twitter, YouTube, Google Sheets, OpenAI และ API เชื่อมต่อเพิ่มเติมได้
        </div>
      </div>

      <!-- คำถาม: ทดลองใช้งานฟรี -->
      <div class="border rounded-lg bg-gray-50 dark:bg-gray-800 border-gray-200 dark:border-gray-700">
        <h2>
          <button type="button"
            class="flex justify-between items-center w-full p-4 font-medium text-left text-gray-800 dark:text-white"
            data-accordion-target="#faq-2" aria-expanded="false" aria-controls="faq-2">
            มีทดลองใช้งานฟรีไหม?
            <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.25 4.25a.75.75 0 01-1.06 0L5.23 8.29a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </button>
        </h2>
        <div id="faq-2" class="hidden p-4 text-gray-600 dark:text-gray-300">
          มีแพ็กเกจทดลองใช้ฟรี 7 วันโดยไม่ต้องผูกบัตรเครดิต สามารถลงทะเบียนได้ที่หน้าแรก
        </div>
      </div>

      <!-- คำถาม: การเปลี่ยนแพ็กเกจ -->
      <div class="border rounded-lg bg-gray-50 dark:bg-gray-800 border-gray-200 dark:border-gray-700">
        <h2>
          <button type="button"
            class="flex justify-between items-center w-full p-4 font-medium text-left text-gray-800 dark:text-white"
            data-accordion-target="#faq-3" aria-expanded="false" aria-controls="faq-3">
            สามารถเปลี่ยนแพ็กเกจภายหลังได้หรือไม่?
            <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.25 4.25a.75.75 0 01-1.06 0L5.23 8.29a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </button>
        </h2>
        <div id="faq-3" class="hidden p-4 text-gray-600 dark:text-gray-300">
          ได้เลย! สามารถอัปเกรดหรือลดระดับแพ็กเกจได้จากเมนู "ตั้งค่าบัญชี" ระบบจะคิดราคาส่วนต่างตามวันที่เหลือ
        </div>
      </div>

      <!-- เพิ่มคำถามอื่นๆ ได้อีกตามต้องการ -->

    </div>
  </section>
</main>

<?php include("partials/footer.php"); ?>

<!-- ใส่ Flowbite JS -->
<script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>