const typeTextSpan = document.querySelector(".typingText");
const cursorSpan = document.querySelector(".cursor");
console.log(cursorSpan);
const textarray = ["Home-like Food", "Free Delivary", "Exclusive offers", "Tasty food"];
const typingDelay = 100;
const newTextDelay = 2000;
const erasingDelay = 50;

let charIndex = 0;
let textArrayIndex = 0;

type = () => {

    if (charIndex < textarray[textArrayIndex].length) {
        if (!cursorSpan.classList.contains("Animation")) {
            cursorSpan.classList.add("Animation");
        }
        typeTextSpan.textContent += textarray[textArrayIndex].charAt(charIndex);
        charIndex++;
        setTimeout(type, typingDelay);

    } else {
        cursorSpan.classList.remove("Animation");
        setTimeout(erase, typingDelay + 2000);
    }
}

function erase() {
    if (charIndex > 0) {
        if (!cursorSpan.classList.contains("Animation")) {
            cursorSpan.classList.add("Animation");
        }
        typeTextSpan.textContent = textarray[textArrayIndex].substring(0, charIndex - 1);
        charIndex--;
        setTimeout(erase, erasingDelay);


    } else {
        cursorSpan.classList.remove("typing");
        textArrayIndex++;
        if (textArrayIndex >= textarray.length) {
            textArrayIndex = 0;
        }
        setTimeout(type, typingDelay + 500);

    }
}

document.addEventListener("DOMContentLoaded", function() {
    setTimeout(type, newTextDelay + 250);
});