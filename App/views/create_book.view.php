<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="max-w-md mx-auto p-8 rounded-xl border border-zinc-800 bg-zinc-900 shadow-lg">
        <h2 class="text-3xl font-bold text-center text-emerald-400 mb-6">Adicionar Novo Livro</h2>

        <?php if ($error): ?>
            <div class="bg-red-600 p-3 rounded-lg text-white text-center mb-4">
                <?php echo $error ?>
            </div>
        <?php endif; ?>

        <form method="POST" enctype="multipart/form-data" class="space-y-4">
            <div>
                <label for="title" class="block mb-1 text-zinc-300">Título</label>
                <input type="text" name="title" id="title" required
                    class="w-full p-3 rounded-lg border-2 border-zinc-700 bg-zinc-800 text-zinc-200 placeholder-zinc-500 focus:outline-none focus:border-emerald-400 transition-colors duration-200">
            </div>

            <div>
                <label for="author" class="block mb-1 text-zinc-300">Autor</label>
                <input type="text" name="author" id="author" required
                    class="w-full p-3 rounded-lg border-2 border-zinc-700 bg-zinc-800 text-zinc-200 placeholder-zinc-500 focus:outline-none focus:border-emerald-400 transition-colors duration-200">
            </div>

            <div>
                <label for="description" class="block mb-1 text-zinc-300">Descrição</label>
                <textarea name="description" id="description" required rows="4"
                    class="w-full p-3 rounded-lg border-2 border-zinc-700 bg-zinc-800 text-zinc-200 placeholder-zinc-500 focus:outline-none focus:border-emerald-400 transition-colors duration-200"></textarea>
            </div>

            <div>
                <label for="image" class="block mb-1 text-zinc-300">Imagem (opcional)</label>
                <input type="file" name="image" id="image" class="w-full text-sm text-zinc-200 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100 transition-colors duration-200 cursor-pointer">
            </div>

            <div>
                <label for="stars" class="block mb-1 text-zinc-300">Avaliação (estrelas)</label>
                <select name="stars" id="stars" class="w-full p-3 rounded-lg border-2 border-zinc-700 bg-zinc-800 text-zinc-200 focus:outline-none focus:border-emerald-400 transition-colors duration-200">
                    <option value="0">0</option>
                    <option value="1">⭐</option>
                    <option value="2">⭐⭐</option>
                    <option value="3">⭐⭐⭐</option>
                    <option value="4">⭐⭐⭐⭐</option>
                    <option value="5">⭐⭐⭐⭐⭐</option>
                </select>
            </div>

            <button type="submit" class="w-full bg-emerald-600 text-white p-3 rounded-lg font-semibold hover:bg-emerald-500 transition-colors duration-200">
                Adicionar Livro
            </button>
        </form>
    </div>
</div>
