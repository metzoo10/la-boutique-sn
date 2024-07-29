// Fonction JavaScript pour augmenter/diminuer la quantité sur la page de détail de produit
$(document).ready(function () {
    var quantity = 0;
    $(".quantity-right-plus").click(function (e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($("#quantity").val());

        // If is not undefined

        $("#quantity").val(quantity + 1);

        // Increment
    });

    $(".quantity-left-minus").click(function (e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($("#quantity").val());

        // If is not undefined

        // Increment
        if (quantity > 0) {
            $("#quantity").val(quantity - 1);
        }
    });
});

// JS anime
let cards = document.querySelectorAll(".cards");
let layer = document.querySelector(".layer");
let classses =
    "fas fa-close fs-5 bg-white text-black d-flex items-center justify-content-center align-items-center fs-5 rounded".split(
        " "
    );
document.querySelectorAll(".fa-eye").forEach((eye, index) => {
    eye.addEventListener("click", () => {
        document.body.classList.add("focused");
        layer.classList.add("active");
        layer.innerHTML = cards[index].innerHTML;

        document.querySelector(".layer .card").classList.add("ajustedCard");

        let close = document.querySelector(".layer span.fa-eye");
        close.removeAttribute("class", "fas fa-eye");
        close.classList.add(...classses);

        close.addEventListener("click", () => {
            layer.classList.toggle("active");
            document.body.classList.remove("focused");
        });
    });
});
