let displayNone = document.querySelector("#records2");
displayNone.style.display = "none";

let ourAtt = document.querySelector(".attendance");
let showAtt = document.querySelector('#playop');
showAtt.addEventListener('click', function () {
    ourAtt.style.display = "none";
    displayNone.style.display = "block";
});

// let btnop = document.querySelector('#opopop');
// btnop.addEventListener('click', function () {
//     displayNone.style.display = "none";
//     ourAtt.style.display = "block";
// });