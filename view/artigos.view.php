<main id="destinos" class="max-w-6xl mx-auto px-6 py-16">
    <h2 class="font-display text-center mb-12 text-gray-900 font-extrabold text-[24px]">Pontos Turísticos</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        <?php foreach ($pontosTuristicos as $pt): ?>
            <a href="ponto?id=<?= $pt['id'] ?>" class="block">
                <article class="rounded-2xl overflow-hidden bg-white shadow-md transition-transform transform hover:-translate-y-2 hover:shadow-2xl">
                    <img class="w-full h-56 object-cover" loading="lazy" src="<?= $pt['url_imagem'] ?>" alt="<?= $pt['nome'] ?>">
                    <div class="p-5">
                        <h3 class="font-semibold text-[19px] text-gray-900"><?= $pt['nome'] ?></h3>
                        <p class="mt-2 text-sm leading-relaxed text-gray-600"><?= $pt['descricao'] ?></p>
                    </div>
                </article>
            </a>
        <?php endforeach; ?>

    </div>
</main>
