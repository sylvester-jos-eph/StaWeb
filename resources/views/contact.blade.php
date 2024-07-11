<x-layout>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us - Pathways</title>
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
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="email"],
input[type="tel"],
textarea {
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


#responseMessage {
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


.contact-info {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.contact-info h2 {
    margin-bottom: 10px;
    font-size: 24px;
    color: #333;
}

.contact-info p {
    margin-bottom: 5px;
    font-size: 16px;
    color: #666;
}

footer {
    background-color: purple;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}

    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Contact Us</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <form id="contactForm">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
                
                <label for="comments">Comments:</label>
                <textarea id="comments" name="comments" rows="5" required></textarea>
                
                <button type="submit" id="submitBtn">Submit</button>
            </form>

            <div id="responseMessage"></div>

            <div class="contact-info">
                <h2>Contact Information</h2>
                <p><strong>Email:</strong> sylvesterstallon068@gmail.com</p>
                <p><strong>Phone:</strong> 0759926920</p>
                <p><strong>LinkedIn:</strong>stallon@linkdin</p>
                <p><strong>Facebook:</strong>stallon@facebook</p>
                <p><strong>WhatsApp:</strong>0759926920</p>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 StaWeb. All rights reserved.</p>
        </div>
    </footer>

    <script src="scripts.js">
        document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const responseMessage = document.getElementById('responseMessage');

    contactForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const email = contactForm.email.value.trim();
        const phone = contactForm.phone.value.trim();
        const comments = contactForm.comments.value.trim();

        if (!isValidEmail(email)) {
            showMessage('Please enter a valid email address.', 'error');
            return;
        }

        if (!isValidPhone(phone)) {
            showMessage('Please enter a valid phone number.', 'error');
            return;
        }

        setTimeout(function() {
            showMessage('Thank you for your message. We will get back to you soon!', 'success');
            contactForm.reset();
        }, 1500);
    });

 
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    function isValidPhone(phone) {
        const phoneRegex = /^\d{10}$/;
        return phoneRegex.test(phone);
    }
    function showMessage(message, type) {
        responseMessage.textContent = message;
        responseMessage.className = type;
    }
});

    </script>
</body>
</html>

</x-layout>