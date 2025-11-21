<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Wise - Plataforma de Livros</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-zinc-950 text-zinc-200 font-sans antialiased">

  <div class="flex h-screen overflow-hidden">

    <aside id="sidebar" class="fixed md:relative inset-y-0 left-0 z-50 w-72 bg-zinc-900 border-r border-zinc-800 flex flex-col transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out">

      <div class="flex items-center justify-between px-6 py-5 border-b border-zinc-800">
        <div class="flex items-center gap-3">
          <svg class="w-7 h-7 text-emerald-400" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 3a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V3zM4 3v10h12V3H4zM16 3h2a2 2 0 012 2v14a2 2 0 01-2 2h-2V3zm-2 18h2a2 2 0 012-2V5a2 2 0 01-2-2h-2v18z"></path>
          </svg>
          <span class="font-bold text-xl text-zinc-100 tracking-wide">Book Wise</span>
        </div>
        <button id="closeSidebar" class="md:hidden text-zinc-400 hover:text-emerald-400 transition-colors duration-200">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>

      <nav class="flex-1 px-4 py-8 space-y-2 text-sm">
        <a href="/" class="flex items-center gap-4 px-4 py-3 rounded-lg hover:bg-zinc-800 hover:text-emerald-400 transition-colors duration-200">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
          </svg>
          <span>Explorar</span>
        </a>

        <?php if (!empty($_SESSION['user_id'])): ?>
          <a href="/meuslivros" class="flex items-center gap-4 px-4 py-3 rounded-lg hover:bg-zinc-800 hover:text-emerald-400 transition-colors duration-200">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13.003m0-13.003a2.99 2.99 0 00-2.062-2.903m2.062 2.903a2.99 2.99 0 012.062-2.903m-2.062 2.903a3.002 3.002 0 00-2.223 5.378m2.223-5.378c.346.046.685.126 1.018.232m-1.018-.232a3.002 3.002 0 01-2.062 2.903m2.062-2.903c.346.046.685.126 1.018.232m-1.018-.232c-.933 0-1.785.485-2.41 1.25M9.857 14.5a3.002 3.002 0 002.223 5.378m-2.223-5.378c-.933 0-1.785.485-2.41 1.25M12 6.253V19.256M12 6.253a3.002 3.002 0 00-2.223-5.378M12 6.253a3.002 3.002 0 012.062 2.903m-2.062-2.903a3.002 3.002 0 002.223 5.378m-2.223-5.378c.346.046.685.126 1.018.232" fill="none"></path>
            </svg>
            <span>Meus livros</span>
          </a>
          <a href="/create_book" class="flex items-center gap-4 px-4 py-3 rounded-lg hover:bg-zinc-800 hover:text-emerald-400 transition-colors duration-200">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            <span>Adicionar livro</span>
          </a>
          <a href="/logout" class="flex items-center gap-4 px-4 py-3 rounded-lg hover:bg-zinc-800 hover:text-emerald-400 transition-colors duration-200">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
            </svg>
            <span>Sair</span>
          </a>
        <?php else: ?>
          <a href="/login" class="flex items-center gap-4 px-4 py-3 rounded-lg hover:bg-zinc-800 hover:text-emerald-400 transition-colors duration-200">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"></path>
              <path d="M12 9V7a3 3 0 00-3-3H9a3 3 0 00-3 3v2"></path>
            </svg>
            <span>Login</span>
          </a>
          <a href="/register" class="flex items-center gap-4 px-4 py-3 rounded-lg hover:bg-zinc-800 hover:text-emerald-400 transition-colors duration-200">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zm-4 6a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>
            <span>Cadastro</span>
          </a>
        <?php endif; ?>
      </nav>
    </aside>

    <div id="overlay" class="fixed inset-0 bg-black/60 hidden md:hidden z-40"></div>

    <div class="flex-1 flex flex-col">
      <header class="flex items-center justify-between bg-zinc-900 border-b border-zinc-800 px-6 py-4 md:hidden">
        <button id="openSidebar" class="text-zinc-400 hover:text-emerald-400 transition-colors duration-200">
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 6a2 2 0 100-4 2 2 0 000 4zM10 12a2 2 0 100-4 2 2 0 000 4zM10 18a2 2 0 100-4 2 2 0 000 4z"></path>
          </svg>
        </button>
        <h1 class="font-bold text-lg text-zinc-100">Book Wise</h1>
        <div></div>
      </header>

 <main class="flex-1 px-8 pb-8 pt-0 overflow-y-auto" >
    <?php require __DIR__ . "/../{$view}.view.php"; ?>      </main>
    </div>
  </div>

  <script>
    const sidebar = document.getElementById("sidebar");
    const overlay = document.getElementById("overlay");
    const openBtn = document.getElementById("openSidebar");
    const closeBtn = document.getElementById("closeSidebar");

    openBtn?.addEventListener("click", () => {
      sidebar.classList.remove("-translate-x-full");
      overlay.classList.remove("hidden");
    });

    closeBtn?.addEventListener("click", () => {
      sidebar.classList.add("-translate-x-full");
      overlay.classList.add("hidden");
    });

    overlay?.addEventListener("click", () => {
      sidebar.classList.add("-translate-x-full");
      overlay.classList.add("hidden");
    });
  </script>

</body>
</html>
