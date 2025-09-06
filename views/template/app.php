<?php
    if (isset($usuario)) {
        teste($usuario);
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Wise</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Fonte Fira Code -->
  <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600;700&display=swap" rel="stylesheet">

  <script>
    tailwind.config = {
      theme: {
        extend: {},
      },
    };
  </script>
</head>

<body class="bg-zinc-950 text-stone-200 font-medium min-h-screen flex flex-col">

  <!-- Header -->
  <header class="bg-zinc-900">
    <nav class="mx-auto max-w-screen-lg flex flex-wrap justify-between items-center py-4 px-4 md:px-0">

      <!-- Logo -->
      <div class="font-bold text-xl tracking-wide">Book Wise</div>

      <!-- Links principais -->

      <ul class="flex flex-wrap space-x-4 font-bold">
        <li><a href="/" class="text-sky-600 hover:text-sky-500 transition-colors">Explorar</a></li>
        <li><a href="/meuslivros" class="hover:underline hover:text-sky-600 transition duration-300 ease-out">Meus
            livros</a></li>
      </ul>

      <!-- Login -->
      <ul>
        <li><a href="/login.php" class="hover:underline hover:text-sky-600 transition">Fazer login</a></li>
      </ul>

    </nav>
  </header>

  <!-- Conteúdo principal -->
  <main class="flex-1 mx-auto max-w-screen-lg p-4 space-y-6">
<?php require "views/{$viewName}.view.php"; ?>
  </main>

</body>

</html>
