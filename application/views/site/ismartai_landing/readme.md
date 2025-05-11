

โครงสร้างหน้าเว็บ ismartai ที่เขียนด้วย PHP + HTML พร้อมใช้ Tailwind CSS (สามารถนำไปวางใน .php file ได้ทันที) ซึ่งรองรับทุก Section หลักของหน้าแรก:


---

✅ ไฟล์โครงสร้างหลัก (index.php)

<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ismartai แชทบอทอัจฉริยะ</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Font แนะนำ: Kanit จาก Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
  <style>body { font-family: 'Kanit', sans-serif; }</style>
</head>
<body class="bg-white text-gray-800">

  <?php include("partials/navbar.php"); ?>

  <?php include("partials/hero.php"); ?>

  <?php include("partials/features.php"); ?>

  <?php include("partials/integrations.php"); ?>

  <?php include("partials/why-choose.php"); ?>

  <?php include("partials/pricing.php"); ?>

  <?php include("partials/support.php"); ?>

  <?php include("partials/blog.php"); ?>

  <?php include("partials/newsletter.php"); ?>

  <?php include("partials/footer.php"); ?>

</body>
</html>


---

📂 โครงสร้างไฟล์

ismartai-landing/
│
├── index.php
├── /partials/
│   ├── navbar.php
│   ├── hero.php
│   ├── features.php
│   ├── integrations.php
│   ├── why-choose.php
│   ├── pricing.php
│   ├── support.php
│   ├── blog.php
│   ├── newsletter.php
│   └── footer.php
└── /assets/
    ├── logo.svg
    └── icons/


---

✅ ตัวอย่าง partials/navbar.php

<nav class="bg-white border-b border-gray-200 shadow-sm">
  <div class="max-w-screen-xl mx-auto flex justify-between items-center px-4 py-4">
    <a href="/" class="flex items-center space-x-2">
      <img src="/assets/logo.svg" class="h-8" alt="ismartai logo">
      <span class="font-bold text-xl text-blue-600">ismartai</span>
    </a>
    <ul class="hidden md:flex space-x-6 text-sm font-medium text-gray-700">
      <li><a href="/">หน้าแรก</a></li>
      <li><a href="#features">ฟีเจอร์</a></li>
      <li><a href="#pricing">ราคา</a></li>
      <li><a href="#blog">บทความ</a></li>
      <li><a href="#contact">ติดต่อเรา</a></li>
    </ul>
    <div class="space-x-2">
      <a href="/login" class="text-sm text-gray-700 hover:underline">เข้าสู่ระบบ</a>
      <a href="/register" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 text-sm">สมัครใช้งาน</a>
    </div>
  </div>
</nav>


---

✅ ตัวอย่าง partials/hero.php

<section class="bg-blue-50 py-20">
  <div class="max-w-screen-xl mx-auto px-4 flex flex-col-reverse md:flex-row items-center">
    <div class="md:w-1/2 space-y-6">
      <h1 class="text-4xl font-bold text-gray-800">ismartai แชทบอท: ระบบจัดการร้านค้าอัตโนมัติครบวงจร</h1>
      <p class="text-gray-600 text-lg">ตอบแชท ปิดการขาย จัดการออเดอร์ อัตโนมัติ 24 ชั่วโมง เพิ่มยอดขาย ลดงานแอดมิน</p>
      <div class="space-x-4">
        <a href="/register" class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700">ทดลองใช้ฟรี</a>
        <a href="#features" class="text-blue-600 hover:underline">ดูฟีเจอร์</a>
      </div>
      <div class="flex space-x-4 mt-6">
        <img src="/assets/icons/facebook.svg" class="h-6" alt="Facebook">
        <img src="/assets/icons/line.svg" class="h-6" alt="LINE">
        <img src="/assets/icons/tiktok.svg" class="h-6" alt="TikTok">
        <img src="/assets/icons/google-sheets.svg" class="h-6" alt="Sheets">
        <img src="/assets/icons/openai.svg" class="h-6" alt="OpenAI">
      </div>
    </div>
    <div class="md:w-1/2 mb-8 md:mb-0">
      <img src="/assets/chatbot-illustration.svg" alt="Chatbot Demo" class="w-full">
    </div>
  </div>
</section>


---

✅ พร้อมใช้งานทันที:

คุณสามารถพัฒนาแต่ละไฟล์ใน /partials/ ให้เหมาะสมกับโครงสร้างที่คุณให้มาได้เลย เช่น:

features.php → ใช้ card component จาก Tailwind + Flowbite

pricing.php → แสดง pricing table + ปุ่มสมัคร

footer.php → รวมลิงก์, โลโก้, โซเชียล, ภาษา



---

✅ พร้อมใช้งานกับ Flowbite

ถ้าคุณจะใช้ Flowbite ร่วมกับ Tailwind CSS:

1. เพิ่ม CDN: <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>


2. หรือ ติดตั้งผ่าน npm และ Tailwind plugin




---

ต้องการให้ผมสร้างโครง HTML+PHP สำหรับส่วนไหนเพิ่มเติมก่อน (เช่น ฟีเจอร์แชทบอท, การเชื่อมต่อ, footer เต็ม) หรือให้ zip ตัวอย่างทั้งหมดให้ดาวน์โหลดไหมครับ?

