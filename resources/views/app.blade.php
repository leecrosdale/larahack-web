<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

    <link href="{{ mix('/css/main.css') }}" rel="stylesheet"/>
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <title>LaraHack - The Laravel Hackathon</title>
    <style>
        .gradient {
            background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
        }
        .iframe-container {
            position: relative;
            overflow: hidden;
            padding-top: 1%;
        }
    </style>
    @routes
</head>
<body class="leading-normal tracking-normal text-black" style="font-family: 'Source Sans Pro', sans-serif;">
    @inertia
</body>
</html>
