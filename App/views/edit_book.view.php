<div class="max-w-xl mx-auto px-4 py-8">
    <div class="p-6 rounded-xl border border-zinc-800 bg-zinc-900 shadow-lg">
        <h1 class="text-2xl font-bold text-emerald-400 mb-4">Editar Livro</h1>

        <?php if ($error): ?>
            <div class="bg-red-500 p-2 text-white rounded-lg mb-4"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <form method="POST" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="title" class="block text-zinc-400">Título</label>
                <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($book->title); ?>"
                       class="w-full px-4 py-2 mt-1 rounded-lg bg-zinc-800 border-2 border-zinc-700 text-zinc-200 focus:outline-none focus:border-emerald-400">
            </div>

            <div class="mb-4">
                <label for="author" class="block text-zinc-400">Autor</label>
                <input type="text" id="author" name="author" value="<?php echo htmlspecialchars($book->author); ?>"
                       class="w-full px-4 py-2 mt-1 rounded-lg bg-zinc-800 border-2 border-zinc-700 text-zinc-200 focus:outline-none focus:border-emerald-400">
            </div>

            <div class="mb-4">
                <label for="description" class="block text-zinc-400">Descrição</label>
                <textarea id="description" name="description" rows="5"
                          class="w-full px-4 py-2 mt-1 rounded-lg bg-zinc-800 border-2 border-zinc-700 text-zinc-200 focus:outline-none focus:border-emerald-400"><?php echo htmlspecialchars($book->description); ?></textarea>
            </div>

            <div class="mb-4">
                <label for="stars" class="block text-zinc-400">Avaliação (estrelas)</label>
                <select name="stars" id="stars" class="w-full p-3 rounded-lg border-2 border-zinc-700 bg-zinc-800 text-zinc-200 focus:outline-none focus:border-emerald-400 transition-colors duration-200">
                    <?php for ($i = 0; $i <= 5; $i++): ?>
                        <option value="<?php echo $i ?>"<?php echo $book->stars == $i ? 'selected' : ''; ?>>
                            <?php echo $i > 0 ? str_repeat('⭐', $i) : '0'; ?>
                        </option>
                    <?php endfor; ?>
                </select>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-zinc-400">Imagem da Capa</label>
                <input type="file" id="image" name="image"
                       class="w-full px-4 py-2 mt-1 rounded-lg bg-zinc-800 border-2 border-zinc-700 text-zinc-200 focus:outline-none focus:border-emerald-400">
                <?php if ($book->image): ?>
                    <p class="text-zinc-400 text-sm mt-2">Imagem atual:</p>
                    <img src="/uploads/<?php echo htmlspecialchars($book->image); ?>" alt="Capa atual" class="mt-2 rounded-lg max-h-40">
                <?php endif; ?>
            </div>

            <div class="flex justify-end space-x-4">
                <a href="/meuslivros" class="inline-block bg-zinc-700 text-zinc-200 px-6 py-3 rounded-lg font-semibold hover:bg-zinc-600 transition-colors duration-200">
                    Cancelar
                </a>
                <button type="submit" class="bg-emerald-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-emerald-500 transition-colors duration-200">
                    Salvar Alterações
                </button>
            </div>
        </form>
    </div>
</div>
