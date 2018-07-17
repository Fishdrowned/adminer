!function (w, d) {
    w.addEventListener("load", function () {
        let logo = d.getElementById("h1");
        logo.href = "./";
        logo.removeAttribute("target");
        logo.removeAttribute("rel");
    });
}(window, document);
