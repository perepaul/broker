<script>
    window.dataLayer = window.dataLayer || [], dataLayer.push({
        event: "owox_pageview",
        path: window.location.pathname,
        title: document.title,
        hostname: window.location.hostname,
        userAuth: 0
    });
</script><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WVT65V5" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>
<script>
    function fadePreloader() {
        var e = document.getElementById("preloader");
        e && fadeOut(e)
    }

    function fadeOut(e) {
        e.style.opacity = 1,
            function n() {
                (e.style.opacity -= .09) < 0 ? e.style.display = "none" : requestAnimationFrame(n)
            }()
    }
    document.addEventListener ? document.addEventListener("DOMContentLoaded", fadePreloader) : document
        .attachEvent ? document.attachEvent("DOMContentLoaded", fadePreloader) : fadePreloader(),
        function () {
            for (var e = 0, n = ["ms", "moz", "webkit", "o"], t = 0; t < n.length && !window
                .requestAnimationFrame; ++t) window.requestAnimationFrame = window[n[t] + "RequestAnimationFrame"],
                window.cancelAnimationFrame = window[n[t] + "CancelAnimationFrame"] || window[n[t] +
                    "CancelRequestAnimationFrame"];
            window.requestAnimationFrame || (window.requestAnimationFrame = function (n, t) {
                var a = (new Date).getTime(),
                    o = Math.max(0, 16 - (a - e)),
                    i = window.setTimeout(function () {
                        n(a + o)
                    }, o);
                return e = a + o, i
            }), window.cancelAnimationFrame || (window.cancelAnimationFrame = function (e) {
                clearTimeout(e)
            })
        }();
</script>