<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Amazing Example Website</title>
    </head>
    <body>
        <script>
            var lang = navigator.language || navigator.userLanguage;
            if (lang.indexOf('de') == 0)
                window.location = '/de/';
            else
                window.location = '/en/';
        </script>
    </body>
</html>