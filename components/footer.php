<?php
$social = [
    [
        "title" => "Linkedin",
        "icon" => "../assets/linkedin-logo.png",
        "url" => "https://www.linkedin.com/"
    ],
    [
        "title" => "Instagram",
        "icon" => "../assets/instagram-logo.png",
        "url" => "https://www.instagram.com/"
    ],
    [
        "title" => "Github",
        "icon" => "../assets/github-logo.png",
        "url" => "https://www.github.com/"
    ],
    [
        "title" => "Email",
        "icon" => "../assets/envelope-simple.png",
        "url" => "mailto:shareware156@gmail.com"
    ],
];
?>

<footer class="mt-40">
    <div class="relative w-full h-[100px] flex flex-col justify-center items-center bg-cover bg-center bg-[#16181d] space-y-2">
        <span class="text-[#BB72E9] font-semibold">Contato</span>

        <h1 class="font-bold text-2xl px-4 py-2 rounded-md text-white">
            Gostou do meu Trabalho?
        </h1>

        <p class="text-slate-400 font-semibold pb-15">Entre em contato ou acompanhe as minhas redes sociais!</p>
    </div>

    <!-- Full-width background wrapper -->
    <div class="w-full bg-cover bg-center object-contain" style="background-image: url('../assets/Background_Contacts.png');">
        <!-- Centered container for social icons with maximum width -->
        <div class="w-full max-w-lg mx-auto my-8 p-4 space-y-4">
            <?php foreach ($social as $card) : ?>
                <!-- Social Icons Card -->
                <a href="<?= $card['url'] ?>" target="_blank" rel="noopener noreferrer" class="relative w-full h-[100px] flex justify-between items-center bg-grey-300 px-4 border-2 border-transparent hover:border-blue-500 hover:rounded-lg transition-all duration-200 rounded-lg">
                    <div class="flex items-center">
                        <img src="<?= $card['icon'] ?>" alt="<?= $card['title'] ?>" class="h-7 object-cover filter brightness-0 invert">
                        <p class="ml-2 mb-1 font-semibold text-slate-400"><?= $card['title'] ?></p>
                    </div>
                    <img src="../assets/arrow-up-right.svg" alt="Link" class="h-5">
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</footer>
