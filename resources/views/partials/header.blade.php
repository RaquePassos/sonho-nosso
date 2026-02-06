<header class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md shadow-sm border-b border-orange-50/50 overflow-x-hidden">

    <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">

        {{-- Logo + Nome --}}
       <div class="flex items-center gap-3 min-w-0">

    <a href="{{ url('/') }}" class="shrink-0">
        <img
            src="{{ asset('images/logo.jpg') }}"
            alt="Logo Restaurante Sonho Nosso"
            class="h-14 md:h-20 w-auto object-contain"
        >
    </a>

    <!-- Nome do restaurante (somente mobile) -->
    <div class="flex flex-col md:hidden leading-tight min-w-0">
        <span class="text-xs font-bold text-slate-800 truncate">
            RESTAURANTE
        </span>
        <span class="text-sm font-black text-orange-600 truncate">
            SONHO NOSSO
        </span>
    </div>

</div>


        {{-- Menu Desktop --}}
        <nav class="hidden md:flex items-center flex-1 text-sm font-semibold text-slate-700">

            <div class="flex flex-1 justify-center gap-8">
                <a href="#" class="hover:text-orange-600">Início</a>
                <a href="#sobre" class="hover:text-orange-600">Sobre</a>
                <a href="#cardapio" class="hover:text-orange-600">Cardápio</a>
                <a href="#eventos" class="hover:text-orange-600">Eventos</a>
                <a href="#ondeestamos" class="hover:text-orange-600">Onde Estamos</a>
            </div>

            <a href="https://menu.anota.ai/loja/restaurante-sonho-meu-3"
               target="_blank"
               class="h-12 px-8 flex items-center justify-center bg-orange-600 text-white rounded-full font-semibold hover:bg-orange-700 transition shrink-0">
                Pedir Agora
            </a>
        </nav>

        {{-- Botão Mobile --}}
        <button id="mobile-menu-button" class="md:hidden text-slate-800 p-2 shrink-0">
            <i class="fas fa-bars text-2xl"></i>
        </button>

    </div>

    {{-- Menu Mobile --}}
    <div id="mobile-menu" class="hidden md:hidden w-full bg-white border-t border-orange-50 overflow-hidden">
        <nav class="flex flex-col p-6 space-y-4 text-slate-700 font-semibold">

            <a href="#" class="mobile-link">Início</a>
            <a href="#sobre" class="mobile-link">Sobre</a>
            <a href="#cardapio" class="mobile-link">Cardápio</a>
            <a href="#eventos" class="mobile-link">Eventos</a>
            <a href="#contato" class="mobile-link">Contato</a>

            <a href="https://menu.anota.ai/loja/restaurante-sonho-meu-3"
               target="_blank"
               class="mt-4 w-full h-12 flex items-center justify-center bg-orange-600 text-white rounded-full font-bold shadow-lg">
                Pedir Agora
            </a>

        </nav>
    </div>

</header>

<div class="h-20 md:h-24"></div>
