<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
  <form method="GET" class="w-full flex items-center gap-2 ">
    <div class="relative flex-grow">
      <input
        type="text"
        name="pesquisar"
        class="w-full px-4 py-3 pl-10 text-base rounded-lg bg-zinc-800 border-2 border-zinc-700 text-zinc-200 placeholder-zinc-500 focus:outline-none focus:border-emerald-400 transition-colors duration-200"
        placeholder="Pesquisar livros..."
        value="<?php echo htmlspecialchars($_GET['pesquisar'] ?? ''); ?>"
      />
      <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-zinc-400" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
      </svg>
    </div>
    <button type="submit" class="p-3 rounded-lg bg-zinc-800 border-2 border-zinc-700 text-zinc-400 hover:text-emerald-400 hover:border-emerald-400 transition-colors duration-200">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
      </svg>
    </button>
  </form>

  <section class="grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-8">
    <?php foreach ($books as $book): ?>
      <div class="p-4 rounded-xl border border-zinc-800 bg-zinc-900 shadow-lg hover:shadow-2xl transition-shadow duration-300">
        <div class="flex flex-col sm:flex-row sm:space-x-4">
          <div class="w-full sm:w-1/3 flex-shrink-0 mb-4 sm:mb-0">
            <?php if ($book->image): ?>
              <img src="/uploads/<?php echo $book->image ?>" alt="Capa do livro<?php echo htmlspecialchars($book->title); ?>" class="rounded-lg object-cover w-full h-48 sm:h-auto">
            <?php endif; ?>
          </div>
          <div class="flex-1 flex flex-col justify-between space-y-2">
            <div>
              <a href="/book?id=<?php echo $book->id ?>" class="font-semibold text-lg hover:text-emerald-400 transition-colors duration-200">
                <?php echo htmlspecialchars($book->title); ?>
              </a>
              <div class="text-xs text-zinc-400">
                por <span class="text-zinc-200"><?php echo htmlspecialchars($book->user_name); ?></span>
              </div>
              <div class="text-xs text-zinc-400">
                Autor: <span class="text-zinc-200"><?php echo htmlspecialchars($book->author); ?></span>
              </div>
            </div>
            <div class="flex items-center space-x-1 text-yellow-400 text-sm">
              <?php for ($i = 0; $i < 5; $i++): ?>
                <?php if ($i < $book->stars): ?>
                  <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69L9.049 2.927z"></path>
                  </svg>
                <?php else: ?>
                  <svg class="w-4 h-4 text-zinc-500" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69L9.049 2.927z"></path>
                  </svg>
                <?php endif; ?>
              <?php endfor; ?>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </section>
</div>
