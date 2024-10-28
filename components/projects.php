<?php
$projects = [
    [
        "title" => "Tavelgram",
        "img" => "../assets/image.png",
        'description' => "Rede Social onde as pessoas monstram os registros de suas viagens pelo Mundo",
        "stack" => ["PHP", "CSS", "HTML", "Javascript"]
    ],
    [
        "title" => "Pagina de Receitas",
        "img" => "../assets/image-1.png",
        'description' => "Pagina com o passo a passo de uma receita para cupcakes",
        "stack" => ["PHP", "CSS", "HTML", "Javascript"]
    ],
    [
        "title" => "Tech News",
        "img" => "../assets/image-2.png",
        'description' => "Homepage de um portal de noticias sobre a area de tecnologia",
        "stack" => ["PHP", "CSS", "HTML", "Javascript"]
    ],
    [
        "title" => "Refund",
        "img" => "../assets/Thumbnail_Project-04.png",
        'description' => "Um sistema de pedido e acompanhamento de reembolso",
        "stack" => ["PHP", "CSS", "HTML", "Javascript"]
    ],
    [
        "title" => "Pagina de Turismo",
        "img" => "../assets/Thumbnail_Project-05.png",
        'description' => "Pagina com as principais informacoes para quem quer viajar para Busan",
        "stack" => ["PHP", "CSS", "HTML", "Javascript"]
    ],
    [
        "title" => "Zingen",
        "img" => "../assets/Thumbnail_Project-06.png",
        'description' => "Landing Page completa e responsiva de um aplicativo de Karaoke",
        "stack" => ["PHP", "CSS", "HTML", "Javascript"]
    ]] ?>

<section class="text-center w-full mx-auto py-10 bg-[#16181d] bg mt-20">
    <!-- Section Title -->
    <div class="mb-10">
        <p class="text-red-600 font-semibold">Meu Trabalho</p>
        <h2 class="text-3xl font-bold text-white">Veja os projetos em Destaque</h2>
    </div>

    <!-- Project Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 px-5">
        <?php foreach ($projects as $project) : ?>
            <div class="bg-[#292C39] rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300 border-2 border-transparent hover:border-white hover:rounded-lg">
                <!-- Project Image -->
                <img src="<?= $project['img'] ?>" alt="<?= $project['title'] ?>" class="w-full h-48 object-contain pt-4 rounded-full">

                <!-- Project Content -->
                <div class="p-5">
                    <!-- Title -->
                    <h3 class="text-xl font-bold text-slate-200 mb-2"><?= $project['title'] ?></h3>

                    <!-- Description -->
                    <p class="text-slate-400 mb-4 font-semibold"><?= $project['description'] ?></p>

                    <!-- Stack (Technologies Used) -->
                    <div class="flex flex-wrap gap-2 ml-40">
                        <?php foreach ($project['stack'] as $tech) : ?>
                            <?php
                            // Define the background color based on the technology
                            $bgColor = '';
                            switch ($tech) {
                                case 'PHP':
                                    $bgColor = 'bg-purple-500';
                                    break;
                                case 'CSS':
                                    $bgColor = 'bg-blue-400';
                                    break;
                                case 'HTML':
                                    $bgColor = 'bg-red-400';
                                    break;
                                case 'Javascript':
                                    $bgColor = 'bg-yellow-400';
                                    break;
                                default:
                                    $bgColor = 'bg-gray-500'; // Default color if no match
                            }
                            ?>
                            <!-- Apply the dynamic background color -->
                            <span class="<?= $bgColor ?> text-black rounded-full px-3 py-1 text-xs font-semibold"><?= $tech ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>