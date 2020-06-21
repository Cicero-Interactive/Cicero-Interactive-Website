---
---

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Amazing Example Website</title>
    </head>
    <body>
        <script>
            var lang = navigator.language || navigator.userLanguage;
            {% for lang in site.languages %}
                {% if lang != site.defaultLang %}
                    if (lang.indexOf('{{ lang }}') == 0)
                        window.location = '/{{ lang }}/';
                    else
                {% endif %}
            {% endfor %}
                window.location = '/{{ site.defaultLang }}/';
        </script>
    </body>
</html>