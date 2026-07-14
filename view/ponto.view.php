<div class="max-w-6xl mx-auto px-6 py-12 mt-20">

    <a href="/" class="inline-flex items-center gap-2 text-emerald-700 hover:text-emerald-900 text-sm font-medium mb-6">
        ← Voltar para os destinos
    </a>

    <!-- Galeria -->
    <div class="mb-10">
        <img id="foto-principal" src="<?= $ponto['galeria'][0] ?? '' ?>" alt="<?= $ponto['nome'] ?>"
            class="w-full h-72 md:h-[420px] object-cover rounded-2xl shadow-md">

        <?php if (!empty($ponto['galeria']) && count($ponto['galeria']) > 1): ?>
            <div class="flex gap-3 mt-3 overflow-x-auto pb-1">
                <?php foreach ($ponto['galeria'] as $foto): ?>
                    <img src="<?= $foto ?>" alt="Foto de <?= $ponto['nome'] ?>"
                        class="w-24 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-emerald-600 transition-colors flex-shrink-0"
                        data-galeria-thumb>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

        <!-- Descrição -->
        <div class="md:col-span-2">
            <h1 class="font-display text-3xl md:text-4xl font-extrabold text-gray-900 mb-4"><?= $ponto['nome'] ?></h1>
            <p class="text-gray-600 leading-relaxed text-[16px]"><?= $ponto['descricao'] ?></p>
        </div>

        <!-- Infos práticas -->
        <aside class="bg-white rounded-2xl shadow-md p-6 h-fit space-y-5">
            <div>
                <h3 class="text-xs font-bold uppercase tracking-wider text-emerald-700 mb-1">Endereço</h3>
                <p class="text-gray-700 text-sm"><?= $ponto['endereco'] ?? 'Não informado' ?></p>
            </div>
            <div>
                <h3 class="text-xs font-bold uppercase tracking-wider text-emerald-700 mb-1">Horário de Funcionamento</h3>
                <p class="text-gray-700 text-sm"><?= $ponto['horario'] ?? 'Aberto 24h / acesso livre' ?></p>
            </div>

            <?php if (!empty($ponto['endereco'])): ?>
                <div class="rounded-xl overflow-hidden border border-gray-100">
                    <iframe src="https://www.google.com/maps?q=<?= urlencode($ponto['endereco']) ?>&output=embed"
                        class="w-full h-40 border-0" loading="lazy"></iframe>
                </div>
            <?php endif; ?>
        </aside>
    </div>

    <!-- Comentários -->
    <div class="mt-16 max-w-4xl">
        <h2 class="font-display text-2xl font-extrabold text-gray-900 mb-6">Comentários</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <!-- Lista de comentários -->
            <div class="space-y-4">
                <?php if (empty($comentarios)): ?>
                    <p class="text-gray-500 text-sm italic bg-white border border-gray-100 p-4 rounded-xl">
                        Nenhum comentário ainda. Seja o primeiro a comentar sobre este lugar!
                    </p>
                <?php else: ?>
                    <?php foreach ($comentarios as $c): ?>
                        <div class="bg-white border border-gray-100 rounded-xl p-4 shadow-sm">
                            <div class="flex justify-between items-center mb-1">
                                <span class="text-emerald-700 font-semibold text-sm"><?= $c['nome'] ?></span>
                                <?php if (!empty($c['nota'])): ?>
                                    <div class="text-amber-500 text-xs">
                                        <?= str_repeat('★', (int) $c['nota']) ?><span class="text-gray-300"><?= str_repeat('★', 5 - (int) $c['nota']) ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <p class="text-gray-600 text-sm leading-relaxed"><?= $c['comentario'] ?></p>
                            <?php if (!empty($c['foto'])): ?>
                                <img src="<?= $c['foto'] ?>" alt="Foto enviada por <?= $c['nome'] ?>"
                                    class="mt-3 w-full max-w-xs h-40 object-cover rounded-lg">
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <!-- Formulário de novo comentário -->
            <div class="bg-white border border-gray-100 rounded-xl p-6 shadow-sm h-fit">
                <h3 class="font-semibold text-gray-900 mb-4">Deixe seu comentário</h3>

                <?php if ($validacoes = flash()->get('validacoes')): ?>
                    <div class="p-3 bg-red-50 border border-red-200 rounded-xl mb-4 space-y-0.5">
                        <?php foreach ($validacoes as $validacao): ?>
                            <p class="text-red-600 text-xs font-medium">⚠️ <?= $validacao ?></p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if ($mensagem = flash()->get('mensagem')): ?>
                    <div class="p-3 bg-emerald-50 border border-emerald-200 rounded-xl text-emerald-700 text-xs font-medium mb-4">
                        ✅ <?= $mensagem ?>
                    </div>
                <?php endif; ?>

                <form method="POST" action="/comentario-criar" enctype="multipart/form-data" class="space-y-4">
                    <input type="hidden" name="ponto_id" value="<?= $ponto['id'] ?>">

                    <div>
                        <label class="text-xs font-semibold text-gray-500 uppercase tracking-wider block mb-1">Seu nome</label>
                        <input type="text" name="nome" required
                            class="w-full p-2.5 rounded-lg border border-gray-200 text-sm outline-none focus:border-emerald-500 transition-colors">
                    </div>

                    <div>
                        <label class="text-xs font-semibold text-gray-500 uppercase tracking-wider block mb-1">Comentário</label>
                        <textarea name="comentario" required placeholder="Conte como foi sua visita..."
                            class="w-full h-24 p-2.5 rounded-lg border border-gray-200 text-sm outline-none focus:border-emerald-500 transition-colors resize-none"></textarea>
                    </div>

                    <div>
                        <label class="text-xs font-semibold text-gray-500 uppercase tracking-wider block mb-1">
                            Foto (opcional)
                        </label>
                        <input type="file" name="foto" accept="image/*"
                            class="w-full text-sm text-gray-600 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-emerald-50 file:text-emerald-700 file:text-sm file:font-semibold hover:file:bg-emerald-100 file:cursor-pointer cursor-pointer">
                    </div>

                    <div>
                        <label class="text-xs font-semibold text-gray-500 uppercase tracking-wider block mb-1">Nota</label>
                        <select name="nota"
                            class="w-full p-2.5 rounded-lg border border-gray-200 text-sm outline-none focus:border-emerald-500 transition-colors">
                            <option value="5">⭐⭐⭐⭐⭐ Excelente</option>
                            <option value="4">⭐⭐⭐⭐ Muito bom</option>
                            <option value="3">⭐⭐⭐ Mediano</option>
                            <option value="2">⭐⭐ Ruim</option>
                            <option value="1">⭐ Péssimo</option>
                        </select>
                    </div>

                    <button type="submit"
                        class="w-full bg-emerald-700 hover:bg-emerald-800 text-white font-bold py-2.5 rounded-lg transition-colors text-sm uppercase tracking-wider">
                        Publicar Comentário
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>