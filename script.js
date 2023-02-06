let inputBtn = document.querySelector('#sub');
let errordisplay = document.querySelector('.errors');
inputBtn.addEventListener('click', function (e) {
    let userName = document.querySelector('#username').value;
    let password = document.querySelector('#password').value;
    let Name = document.querySelector('#Name').value;
    if (userName == "" && password == "" && Name == "") {
        errordisplay.innerHTML = "<span style='color: red;'>Name , Username And Password Cannot Be Empty</span>";
        e.preventDefault();
    } else if (userName == "") {
        errordisplay.innerHTML = "<span style='color: red;'>Username Cannot Be Empty</span>";
        e.preventDefault();
    } else if (password == "") {
        errordisplay.innerHTML = "<span style='color: red;'>Password Cannot Be Empty</span>";
        e.preventDefault();
    } else if(Name == ""){
     errordisplay.innerHTML = "<span style='color: red;'>Name Cannot Be Empty</span>";
    }else {
     console.log('welcome');
    }

});



