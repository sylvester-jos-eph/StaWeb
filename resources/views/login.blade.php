<x-layout>
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <style>
     
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html, body {
    height: 100%;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f0f0f0;
    color: #333;
    display: flex;
    flex-direction: column;
}

.wrapper {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

.container {
    background-color: purple;
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

header {
    background-color: purple;
    color: #fff;
    padding: 15px 0;
    text-align: center;
}

header h1 {
    margin: 0;
    font-size: 28px;
}


main {
    flex: 1;
    padding: 20px;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 16px;
}

button {
    background-color: purple;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 25px;
}

button:hover {
    background-color: #0056b3;
}

#loginMessage {
    margin-top: 10px;
    padding: 10px;
    text-align: center;
    font-size: 16px;
    border-radius: 25px;
}

.success {
    background-color: #d4edda;
    border-color: #c3e6cb;
    color: #155724;
}

.error {
    background-color: red;
    border-color: #f5c6cb;
    color: #721c24;
}


footer {
    background-color: purple;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}

footer p {
    margin: 0;
    font-size: 14px;
}

        </style>
   </head>
   <body>
   <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - Pathways</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="container">
                <h1>Login to StaWeb</h1>
            </div>
        </header>

        <main>
            <div class="container">
                <form id="loginForm">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>

                    <button type="submit">Login</button>
                </form>

                <div id="loginMessage"></div>
            </div>
        </main>

        <footer>
            <div class="container">
                <p>&copy; 2024 StaWeb. All rights reserved.</p>
            </div>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    const loginMessage = document.getElementById('loginMessage');

    loginForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const username = loginForm.username.value.trim();
        const password = loginForm.password.value.trim();

        if (username === "" || password === "") {
            showMessage('Please enter both username and password.', 'error');
            return;
        }

        if (username === "admin" && password === "admin123") {
            showMessage('Login successful! Redirecting...', 'success');
            setTimeout(function() {
                window.location.href = "index.html";
            }, 1500);
        } else {
            showMessage('Invalid username or password.', 'error');
        }
    });

    function showMessage(message, type) {
        loginMessage.textContent = message;
        loginMessage.className = type;
    }
});

    </script>
</body>
</html>

   </body>
   </html>
</x-layout>