<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Medical Technologies & Solutions</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <x-layout.header />
    <div
        class="w-full border-b-2 bg-japonica-100 shadow-lg border-japonica-300 mb-10 px-10 lg:px-20 py-10 flex justify-between items-center">
        <div class="w-full lg:w-1/2">
            <h1 class="text-3xl text-japonica-500 font-bold mb-1">Medical Technologies & Solutions</h1>
            <h2 class="text-xl font-semibold mb-5">
                Scanners médicaux, composants matériels et logiciels
            </h2>
            <p class="indent-8">
                Medical Technologies & Solutions une entreprise spécialisée dans l'importation de scanners médicaux, à
                la fois les composants matériels et logiciels. Notre entreprise envisage de se créer prochainement, et
                nous sollicitons votre approbation pour cette initiative prometteuse.
            </p>
            <p class="indent-8">
                Nous sommes convaincus de l'importance d'une technologie de numérisation de pointe dans le domaine
                médical, et notre objectif est de créer une entreprise qui révolutionne l'industrie des équipements
                médicaux en fournissant des scanners de qualité supérieure aux hôpitaux et aux établissements de santé.
                Nous comprenons l'importance de diagnostics efficaces et précis, et notre ambition est de fournir des
                scanners de dernière génération qui permettent aux professionnels de la santé de prodiguer des soins
                exceptionnels aux patients
            </p>
        </div>
        <div class="w-1/2 hidden lg:block">
            <img src="/images/doctors.png" alt="" />
        </div>
    </div>
    <x-sections.carousel />
    <x-sections.services />
    <x-sections.advantages />
    <x-layout.footer />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>
