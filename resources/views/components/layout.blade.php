<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <style>

        .playfair-display{
        font-family: "Playfair Display", serif;
        font-optical-sizing: auto;
        font-weight: 200px;
        font-style: normal;
        }
        .login{
            margin-left: 20px;
            margin-bottom: -30px;
            justify-content: space-between;
        }
        .main-container {
            margin-top: 20px;
        }

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
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    width: 100%;
}

header {
    background-color: #232f3e;
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
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 3px;
    width: 100%;
    max-width: 300px;
    margin: 0 auto;
    display: block;
}

button:hover {
    background-color: #0056b3;
}

#loginMessage,
#registerMessage {
    margin-top: 10px;
    padding: 10px;
    text-align: center;
    font-size: 16px;
    border-radius: 5px;
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

/* Footer styles */
footer {
    background-color: #232f3e;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}

footer p {
    margin: 0;
    font-size: 14px;
}

/* Responsive styles */
@media (max-width: 1200px) {
    .container {
        max-width: 1000px;
    }
}

@media (max-width: 1000px) {
    .container {
        max-width: 800px;
    }

    header h1 {
        font-size: 24px;
    }

    button {
        font-size: 14px;
    }
}

@media (max-width: 768px) {
    .container {
        max-width: 600px;
    }

    header h1 {
        font-size: 20px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        font-size: 14px;
    }

    button {
        font-size: 14px;
    }
}

@media (max-width: 480px) {
    .container {
        max-width: 100%;
        padding: 10px;
    }

    header h1 {
        font-size: 18px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        font-size: 12px;
    }

    button {
        font-size: 12px;
    }
}



    </style>
</head>
<body>

<div class="main-container">
    
    <div class="login">
    <x-nav-link style="text-decoration: none;" href="/login">Login</x-nav-link>
    <x-nav-link style="text-decoration: none; margin-left: 20px;" href="/register">Register</x-nav-link>
    </div>

<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/about">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/contact">Contact</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/services">Services</a>
  </li>

</ul>
</div>

   {{$slot}}
</body>
</html>