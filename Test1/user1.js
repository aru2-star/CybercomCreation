var array_user = [];
var flag = false;

function logout() {
    sessionStorage.clear();
    window.location.href = "login.html";
}


function age() {

    var array = localStorage.getItem('array_user');
    var items = JSON.parse(array);
    array = items;
    var count = 0,
        count1 = 0,
        count2 = 0;


    for (var k = 0; k < array.length; k++) {
        var age = getAge(array[k].userbirthDate);

        if (age < 18) {
            console.log("into the function")
            count++;
        }
        localStorage.setItem("age_under_18", count);
        if (age > 50) {
            console.log("into the function")
            count1++;
        }
        localStorage.setItem("age_a_50", count1);
        if (age > 18 && age < 50) {

            count2++;
        }
        localStorage.setItem("age_u_18_a_50", count2);

    }
}

function getAge(dateString) {
    var today = new Date();
    var birthDate = new Date(dateString);
    var age = today.getFullYear() - birthDate.getFullYear();
    var mon = today.getMonth() - birthDate.getMonth();
    if (mon < 0 || (mon === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    return age;
}



function addUser1() {
    if (document.getElementById("addUser").value == "Update") {

        var array_user1 = localStorage.getItem('array_user');
        var items = JSON.parse(array_user1);


        let link = document.querySelector("#aTag");
        let target1 = link.getAttribute('value');
        console.log(target1);

        for (var x = 0; x < items.length; x++) {

            if (target1 == items[h].index) {
                items[x].name = document.getElementById('name1').value;
                items[x].email = document.getElementById('email').value;
                items[x].password = document.getElementById('password').value;
                items[x].userbirthDate = document.getElementById('birthDate').value;
                console.log(items);
                localStorage.setItem("array_user", JSON.stringify(items));
                alert("Table Updated Successfully");
                location.reload();
            }
        }
    }

    if (document.getElementById("addUser").value == "Add User") {

        var index = 0;
        if (localStorage.getItem('array_user')) {
            array_user = JSON.parse(localStorage.getItem('array_user'));
        }

        for (var t = 0; t < array_user.length; t++) {
            index = array_user.indexOf(array_user[t]) + 1;
        }
        index;
        var name = document.getElementById('name1').value;
        var uemail = document.getElementById('email').value;
        var upwd = document.getElementById('password').value;
        var userbirthDate = document.getElementById('birthDate').value;

        var user = {
            index: index,
            name: name,
            email: uemail,
            password: upwd,
            userbirthDate: userbirthDate
        };


        function register() {
            for (var index1 = 0; index1 < array_user.length; ++index1) {

                var temp = array_user[index1];

                if (temp.email == uemail) {
                    flag = true;
                    alert("user already exist with same email");
                    break;
                }
            }
        }
        register();

        if (flag === false) {
            array_user.push(user);
            console.log(array_user);
            localStorage.setItem("array_user", JSON.stringify(array_user));
            alert("User is added");
            location.reload();
        }
    }
};
