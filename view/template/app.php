<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TramandaAí — Guia Turístico de Tramandaí, RS</title>
  <meta name="description"
    content="Guia turístico de Tramandaí, RS: praia, plataforma marítima, Ponta da Barra, Parque Histórico Marechal Osório e as melhores dicas para sua viagem ao litoral norte gaúcho.">

  <link rel="stylesheet" href="/view/css/style.css">

  <script src="https://cdn.tailwindcss.com/3.4.17"></script>
  <script src="https://cdn.jsdelivr.net/npm/lucide@0.263.0/dist/umd/lucide.min.js"></script>
</head>

<body data-template-id="__page-root" class="w-full min-h-screen bg-[rgb(250,250,248)]">

  <nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 border-b border-gray-100 shadow-sm backdrop-blur-md">
    <div class="max-w-6xl mx-auto px-6 py-3 flex items-center justify-between">
      <span class="font-display text-[16px] text-gray-900 font-extrabold">TramandaAí</span>
      <div class="flex gap-2 md:gap-6 text-sm font-medium">
        <a href="#destinos" class="text-gray-700 hover:text-emerald-700 transition-colors mx-2 md:mx-4">Pontos
          Turísticos</a>
        <a href="#dicas" class="text-gray-700 hover:text-emerald-700 transition-colors mx-2 md:mx-4">Dicas</a>
      </div>
    </div>
  </nav>

  <?php if ($view === 'index'): ?>
    <!-- O vídeo hero só aparece na home; páginas internas (ex: detalhe de um ponto turístico) não repetem ele -->
    <header class="relative overflow-hidden w-full md:h-[80vh]">
      <video id="hero-video" class="absolute inset-0 w-full h-full object-cover"
        src="/view/videos/HOME ATUALIZADA.mp4" autoplay muted loop playsinline>
      </video>
      <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/30 to-black/10"></div>

      <div class="relative z-10 flex flex-col justify-center h-full mb-6 px-6 md:px-0 mt-28">
        <div class="relative w-64 sm:w-80 md:w-[28rem] lg:w-[34rem] mx-auto md:mx-0 md:ml-24">
          <img class="w-full h-auto" src="/view/images/tramanda_logo.png" alt="TramandaAí">
        </div>
      </div>
    </header>
  <?php endif; ?>

  <?php require "view/{$view}.view.php"; ?>

  <footer class="text-center py-10 bg-[rgb(26,26,26)]">
    <p class="text-sm text-gray-400">© 2026 TramandaAí — Explore, descubra, viva.</p>
  </footer>

  <script src="/view/js/icons.js"></script>
  <script src="/view/js/galeria.js"></script>
</body>

</html>
