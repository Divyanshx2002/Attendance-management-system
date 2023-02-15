let displayNone = document.querySelector("#records2");
displayNone.style.display = "none";

let ourAtt = document.querySelector(".attendance");
let showAtt = document.querySelector('#playop');
showAtt.addEventListener('click', function () {
    ourAtt.style.display = "none";
    displayNone.style.display = "block";
});

let displayNone2 = document.querySelector("#editprofile");
displayNone2.style.display = "none";

let showAtt2 = document.querySelector('#playop2');
showAtt2.addEventListener('click', function () {
    ourAtt.style.display = "none";
    displayNone2.style.display = "block";
});

let newUsername = document.querySelector('#userName');
let btn200 = document.querySelector('#subBtn');
let tochange = document.querySelector('#tochange')
tochange.innerHTML = newUsername.value;
console.log(newUsername.value);
