const td1 = document.querySelector('#td1');
const t1 = document.querySelector('#t1');
const td2 = document.querySelector('#td2');
const t2 = document.querySelector('#t2');
const td3 = document.querySelector('#td3');
const t3 = document.querySelector('#t3');

t1.addEventListener('click', () => {
    if (td1.style.display == "flex") td1.style.display = "none";
    else {
        td2.style.display = "none";
        td3.style.display = "none";
        td1.style.display = "flex";
    }
})

t2.addEventListener('click', () => {
    if (td2.style.display == "flex") td2.style.display = "none";
    else {
        td1.style.display = "none";
        td3.style.display = "none";
        td2.style.display = "flex";
    }
})

t3.addEventListener('click', () => {
    if (td3.style.display == "flex") td3.style.display = "none";
    else {
        td2.style.display = "none";
        td1.style.display = "none";
        td3.style.display = "flex";
    }
})
