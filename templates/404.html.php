<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="/<?=ASSETS_PATH?>/images/icon1.png">
    <title>404</title>
    <link rel="stylesheet" href="/<?=ASSETS_PATH?>/css/styles.css">
</head>
<body>
<div class=" mx-[30px] min-h-[calc(100vh-195px)] mb-[30px] ssm:mt-[30px] mt-[15px]">

    <div class="grid grid-cols-12 gap-5">
        <div class="col-span-12">

            <!-- Error 404 Page -->
            <div class="flex justify-center items-center flex-col min-h-screen pb-36 px-[15px] text-center mb-[30px]">
                <!-- 404 Image -->
                <figure>
                    <img class="mx-auto mb-20 text-white" src="/<?=ASSETS_PATH?>/images/svg/404.svg" alt="404">
                    <figcaption>
                        <!-- Error Title -->
                        <h1 class="mb-5 text-6xl font-semibold text-light-extra dark:text-title-dark max-ssm:text-5xl max-xs:text-4xl">404</h1>
                        <!-- Error Message -->
                        <p class="mb-6 text-lg font-medium text-body dark:text-subtitle-dark max-xs:text-base">Désolé ! La page que vous recherchez n'existe pas.</p>
                        <!-- Return Home Button -->
                        <a href="#" class="active">
                            <button type="button" class="bg-primary border-primary hover:bg-primary-hbr rounded-6 px-[20px] capitalize text-[15px] h-11 inline-flex items-center justify-center text-white transition duration-300">
                                <span>Retour</span>
                            </button>
                        </a>
                    </figcaption>
                </figure>
            </div>

        </div>
    </div>

</div>
</body>
</html>