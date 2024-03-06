<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            .gradient-custom-2 {
                /* fallback for old browsers */
                background: #7e40f6;

                /* Chrome 10-25, Safari 5.1-6 */
                background: -webkit-linear-gradient(
                    to right,
                    rgba(126, 64, 246, 1),
                    rgba(80, 139, 252, 1)
                );

                /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                background: linear-gradient(
                    to right,
                    rgba(126, 64, 246, 1),
                    rgba(80, 139, 252, 1)
                );
            }

            .mask-custom {
                background: rgba(24, 24, 16, 0.2);
                border-radius: 2em;
                backdrop-filter: blur(25px);
                border: 2px solid rgba(255, 255, 255, 0.05);
                background-clip: padding-box;
                box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
            }
        </style>
    </head>
    <body class="antialiased">
        <livewire:todo-list />
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    </body>
</html>
