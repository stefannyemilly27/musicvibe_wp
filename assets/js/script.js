document.addEventListener("DOMContentLoaded", function () {

    const discs = document.querySelectorAll(".music-disc");

    discs.forEach(function (disc) {

        disc.addEventListener("click", function () {

            disc.classList.toggle("playing");

        });

    });

});