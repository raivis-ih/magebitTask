//Function which slides the login box to left side, and then shows the signup box.

function mySignup() {
    var login = document.getElementById("login");
    var signup = document.getElementById("sign-up");
    var rectangle = document.getElementById("rectangle");
    var pos = -40;
    var id = setInterval(frame);

    function frame() {
        if (pos == -400) {
            clearInterval(id);
            login.style.visibility = "hidden";
            signup.style.position = -400;
            signup.style.visibility = "visible";
        } else {
            pos--;
            rectangle.style.visibility = "visible";
            signup.style.visibility = "hidden";
            signup.style.left = pos + 'px';
            login.style.left = pos + 'px';
        }
    }
}

//Function which slides the signup box to the right side, and then shows the login box.

function myLogin() {
    var login = document.getElementById("login");
    var signup = document.getElementById("sign-up");
    var pos = -400;
    var id = setInterval(frame);

    function frame() {
        if (pos == -40) {
            clearInterval(id);
            login.style.visibility = "visible";
            signup.style.visibility = "hidden";
        } else {
            pos++;
            signup.style.visibility = "visible";
            signup.style.left = pos + 'px';
            login.style.left = pos + 'px';
        }
    }
}