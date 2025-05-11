<?php include("partials/head.php"); ?>
<?php include("partials/navbar.php"); ?>

<main class="bg-white dark:bg-gray-900 transition-colors duration-500">
  <section class="py-16 max-w-screen-xl mx-auto px-4">
    <h1 class="text-4xl font-bold text-center text-gray-800 dark:text-white mb-6">ฟีเจอร์ของ ismartai</h1>
    <p class="text-center text-gray-600 dark:text-gray-300 mb-12">จัดการธุรกิจของคุณด้วยระบบเดียว ครบทุกช่องทาง</p>

    <!-- Tabs -->
    <div class="mb-8 border-b border-gray-200 dark:border-gray-700">
      <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" role="tablist">
        <li class="mr-2"><button class="tablink inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg dark:text-blue-400" onclick="openTab(event, 'chat')">แชทบอท</button></li>
        <li class="mr-2"><button class="tablink inline-block p-4 hover:text-blue-600 dark:hover:text-blue-400" onclick="openTab(event, 'ecommerce')">อีคอมเมิร์ซ</button></li>
        <li class="mr-2"><button class="tablink inline-block p-4 hover:text-blue-600 dark:hover:text-blue-400" onclick="openTab(event, 'comment')">คอมเมนต์</button></li>
        <li class="mr-2"><button class="tablink inline-block p-4 hover:text-blue-600 dark:hover:text-blue-400" onclick="openTab(event, 'post')">โพสต์อัตโนมัติ</button></li>
        <li><button class="tablink inline-block p-4 hover:text-blue-600 dark:hover:text-blue-400" onclick="openTab(event, 'broadcast')">บรอดแคสต์</button></li>
      </ul>
    </div>

    <!-- Content Tabs -->
    <div id="chat" class="tabcontent">
      <?php include("partials/features/chatbot.php"); ?>
    </div>

    <div id="ecommerce" class="tabcontent hidden">
      <?php include("partials/features/ecommerce.php"); ?>
    </div>

    <div id="comment" class="tabcontent hidden">
      <?php include("partials/features/comment.php"); ?>
    </div>

    <div id="post" class="tabcontent hidden">
      <?php include("partials/features/post.php"); ?>
    </div>

    <div id="broadcast" class="tabcontent hidden">
      <?php include("partials/features/broadcast.php"); ?>
    </div>

  </section>
</main>

<?php include("partials/footer.php"); ?>

<!-- JS สำหรับ tab toggle -->
<script>
  function openTab(evt, tabId) {
    const tabContents = document.querySelectorAll(".tabcontent");
    tabContents.forEach(tab => tab.classList.add("hidden"));

    const tabLinks = document.querySelectorAll(".tablink");
    tabLinks.forEach(link => link.classList.remove("text-blue-600", "border-b-2", "border-blue-600", "dark:text-blue-400"));

    document.getElementById(tabId).classList.remove("hidden");
    evt.currentTarget.classList.add("text-blue-600", "border-b-2", "border-blue-600", "dark:text-blue-400");
  }
</script>