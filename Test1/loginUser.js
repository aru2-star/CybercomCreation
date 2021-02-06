var array_user = [];
session_array = [];
logout_session_array = [];
var flag1 = false;
var flag2 = false;
var temp;
var logoutTime = 0;
var logoutdatetime;

function user_logout() {
    logoutTime++;

    if (logoutTime == 1) {
        logoutdatetime = Date();
        console.log(logoutdatetime);
    }

    var logout_session_array1 = {
        name: sessionStorage.name,
        logoutdatetime: logoutdatetime,
    }

    if (localStorage.getItem('logout_session_array')) {
        logout_session_array = JSON.parse(localStorage.getItem('logout_session_array'));
    }
    logout_session_array.push(logout_session_array1);
    localStorage.setItem("logout_session_array", JSON.stringify(logout_session_array));

    sessionStorage.clear();
    window.location.href = "user_login.html";

}


function loginUser() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    if (localStorage.getItem('array_user')) {
        array_user = JSON.parse(localStorage.getItem('array_user'));
    }

    for (var index1 = 0; index1 < array_user.length; index1++) {
        if (localStorage.getItem('array_user')) {
            array_user = JSON.parse(localStorage.getItem('array_user'));
        }

        if (array_user[index1].email == email && array_user[index1].password == password) {
            flag2 = true;
            break;
        }
    }

}

function login() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    if (localStorage.getItem('array_user')) {
        array_user = JSON.parse(localStorage.getItem('array_user'));
    }

    function register() {
        for (var index = 0; index < array_user.length; index++) {

            temp = array_user[index];

            if (array_user[index].email == email && array_user[index].password == password) {
                flag1 = true;
                break;
            }
        }

    }
    register();

    if (flag1 == false) {
        flag1 = false;
        alert("Invalid email and password!");
    }
    else {

        window.location.href = "subUser.html";
        sessionStorage.setItem("name", temp.name);

        var sessionManagement =
        {
            name: sessionStorage.name,
            loginDateTime: Date(),
        }

        if (localStorage.getItem('session_array')) {
            session_array = JSON.parse(localStorage.getItem('session_array'));
        }

        session_array.push(sessionManagement);
        console.log(session_array);
        localStorage.setItem("session_array", JSON.stringify(session_array));
        window.location.href = "subUser.html";
    }



};
