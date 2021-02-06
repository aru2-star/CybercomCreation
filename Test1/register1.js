var local_array = [];
var flag = false;

function addUser() {
    var name1 = document.getElementById('name').value;
    var email1 = document.getElementById('email').value;
    var pwd1 = document.getElementById('password').value;
    var cpwd1 = document.getElementById('confirm_password').value;
    var city1 = document.getElementById('city').value;
    var state1 = document.getElementById('state').value;


    var admin = {
        name: name1,
        email: email1,
        password: pwd1,
        city: city1,
        state: state1
    };

    if (localStorage.getItem('local_array')) {
        local_array = JSON.parse(localStorage.getItem('local_array'));
    }

    function register() {
        for (var i = 0; i < local_array.length; ++i) {
            var local = local_array[i];

            if (local.email == email1) {
                flag = true;
                alert("Admin already registered");
                break;
            }
        }
    }
    register();
    
    if (flag === false) {
        local_array.push(admin);
        console.log(local_array);
        localStorage.setItem("local_array", JSON.stringify(local_array));
        var display = window.confirm("Registration Done");
        if (display) {
            window.location.href = "login.html";
        }
    }

};
