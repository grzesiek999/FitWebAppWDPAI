const dd1 = document.querySelector('#dd1');
const d1 = document.querySelector('#d1');
const dd2 = document.querySelector('#dd2');
const d2 = document.querySelector('#d2');
const dd3 = document.querySelector('#dd3');
const d3 = document.querySelector('#d3');

d1.addEventListener('click', () => {
    if (dd1.style.display == "flex") dd1.style.display = "none";
    else {
        dd2.style.display = "none";
        dd3.style.display = "none";
        dd1.style.display = "flex";
    }
})

d2.addEventListener('click', () => {
    if (dd2.style.display == "flex") dd2.style.display = "none";
    else {
        dd1.style.display = "none";
        dd3.style.display = "none";
        dd2.style.display = "flex";
    }
})

d3.addEventListener('click', () => {
    if (dd3.style.display == "flex") dd3.style.display = "none";
    else {
        dd2.style.display = "none";
        dd1.style.display = "none";
        dd3.style.display = "flex";
    }
})