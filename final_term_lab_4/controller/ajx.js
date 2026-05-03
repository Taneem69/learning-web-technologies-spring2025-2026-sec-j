function ajaxSignup() {
    const email = document.getElementById('email').value.trim();
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value;
    const confp = document.getElementById('confp').value;

    const data = {
        email: email,
        username: username,
        password: password,
        confp: confp
    };

    const xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/signUpCheck.php', true);
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            const response = JSON.parse(this.responseText);
            document.getElementById('message').innerHTML = response.message;

            if (response.status === 'success') {
                document.getElementById('message').style.color = 'green';
                setTimeout(() => {
                    window.location.href = 'login.php';
                }, 1500);
            } else {
                document.getElementById('message').style.color = 'red';
            }
        }
    };

    xhttp.send('user=' + encodeURIComponent(JSON.stringify(data)));
}

function ajaxLogin() {
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value;

    const data = {
        username: username,
        password: password
    };

    const xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/loginCheck.php', true);
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            const response = JSON.parse(this.responseText);
            document.getElementById('message').innerHTML = response.message;

            if (response.status === 'success') {
                document.getElementById('message').style.color = 'green';
                setTimeout(() => {
                    window.location.href = 'home.php';
                }, 1000);
            } else {
                document.getElementById('message').style.color = 'red';
            }
        }
    };

    xhttp.send('user=' + encodeURIComponent(JSON.stringify(data)));
}
