

// ------------------------------
// Shannon Easter Egg Fade
// ------------------------------

const shannonImages = document.querySelectorAll(".shannon-image");

if (shannonImages.length === 2) {

    let current = 0;

    setInterval(() => {

        shannonImages[current].classList.remove("active");

        current = (current + 1) % 2;

        shannonImages[current].classList.add("active");

    }, 3000);

}