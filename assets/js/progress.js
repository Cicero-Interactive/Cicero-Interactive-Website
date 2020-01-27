if (document.readyState == 'loading' || document.readyState == 'interactive') {
    document.onreadystatechange = function () {
        if (document.readyState == "complete") {
            document.getElementById("Progressbar").style.display = "none";
        }
    }
}