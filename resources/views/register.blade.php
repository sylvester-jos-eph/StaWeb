<x-layout>
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   </head>
   <body>
   <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register - Pathways</title>
<link rel="stylesheet" href="styles.css">
    <style>
        
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f0f0f0;
    color: #333;
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
input[type="email"],
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
    background-color: blue;
}


#registerMessage {
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
    background-color: #f8d7da;
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
    <header>
        <div class="container">
            <h1>Register to StaWeb</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <form id="registerForm">
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="fullName" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>

                <button type="submit">Register</button>
            </form>

            <div id="registerMessage"></div>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 StaWeb. All rights reserved.</p>
        </div>
    </footer>

    <script src=>
        document.addEventListener('DOMContentLoaded', function() {
    const registerForm = document.getElementById('registerForm');
    const registerMessage = document.getElementById('registerMessage');

    registerForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const fullName = registerForm.fullName.value.trim();
        const email = registerForm.email.value.trim();
        const username = registerForm.username.value.trim();
        const password = registerForm.password.value.trim();
        const confirmPassword = registerForm.confirmPassword.value.trim();

        if (password !== confirmPassword) {
            showMessage('Passwords do not match.', 'error');
            return;
        }

        setTimeout(function() {
            showMessage('Registration successful! Redirecting...', 'success');
            registerForm.reset();
            setTimeout(function() {
                window.location.href = "login.html";
            }, 1500);
        }, 1500);
    });

    function showMessage(message, type) {
        registerMessage.textContent = message;
        registerMessage.className = type;
    }
});

    </script>
</body>
</html>

   </body>
   </html>
</x-layout>