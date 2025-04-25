 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>pixel-position</title>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
         rel="stylesheet">
     @vite(['resources/css/app.css', 'resources/js/app.js'])
 </head>

 <body class="dark:bg-black dark:text-white px-10 font-hanken-grotesk">
     <x-navbar />
     <main class="max-w-[986px] m-auto">
         {{ $slot }}
     </main>
 </body>

 </html>
