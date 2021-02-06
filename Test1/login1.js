var local_array = [];
var local;
var flag = false;


function logging() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    if (localStorage.getItem('local_array')) {
        local_array = JSON.parse(localStorage.getItem('local_array'));
    }

    function register() {
        for (var i = 0; i < local_array.length; i++) {

            local = local_array[i];

            if (local_array[i].email == email && local_array[i].password == password) {
                flag = true;

                break;
            }
        }
    }
    register();

    if (flag == false) {
        flag = false;
        alert("Invalid email and password!");
    }
    else {
        sessionStorage.setItem("name", local.name);
        window.location.href = "dashboard.html";
    }
};
