<x-layout>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Our Services - StaWeb</title>
<link rel="stylesheet" href="styles.css">
    <style>
        
.service {
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 25px;
    margin-bottom: 20px;
}

header {
    background-color: purple;
    color: #fff;
    padding: 15px 0;
    text-align: center;
}
.select-btn {
    background-color: purple;
    color: #fff;
    border: none;
    padding: 5px 10px;
    font-size: 14px;
    cursor: pointer;
    border-radius: 3px;
    margin-top: 10px;
}

.select-btn:hover {
    background-color: blue;
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
            <h1>Our Services</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <section id="service1" class="service">
                <h2>Pay Bills</h2>
                <p>At StaWeb, we offer a seamless and efficient pay bill service designed to simplify financial transactions for both businesses and their customers.
                     Our system ensures quick and secure payment processing, enabling your business to accept payments from clients effortlessly. Whether it's for utilities, 
                     services, or products, our pay bill service integrates easily with your existing infrastructure, providing a reliable solution for your billing needs</p>
                <button class="select-btn">Select</button>
            </section>

            <section id="service2" class="service">
                <h2>Data Analysis</h2>
                <p>Unlock the full potential of your data with StaWeb's data analysis services. Our team of experienced data analysts uses advanced analytical tools and techniques
                     to turn raw data into valuable insights. We help businesses make informed decisions by providing comprehensive data analysis, identifying trends, patterns,
                      and opportunities. With our data-driven approach, you can optimize your operations, improve customer satisfaction, and drive growth.</p>
                <button class="select-btn">Select</button>
            </section>

            <section id="service3" class="service">
                <h2>Consultancy</h2>
                <p>StaWeb offers expert consultancy services to help your business navigate the complexities of the modern market. Our consultants bring a wealth of knowledge and 
                    experience across various industries, providing tailored advice and strategies to meet your specific needs. From business development and process optimization 
                    to technology integration and strategic planning, our consultancy services are designed to help you achieve your business goals and stay ahead of the competition.</p>
                <button class="select-btn">Select</button>
            </section>

            <section id="service4" class="service">
                <h2>Customer Desk Support</h2>
                <p>Exceptional customer service is at the heart of StaWeb's customer desk support. We provide dedicated support services to ensure your customers receive the assistance
                     they need promptly and effectively. Our trained support team is equipped to handle inquiries, troubleshoot issues, and provide solutions across multiple channels,
                      including phone, email, and live chat. With our customer desk support, you can enhance customer satisfaction and loyalty, building a strong foundation for your business.</p>
                <button class="select-btn">Select</button>
            </section>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 StaWeb. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const toggleButtons = document.querySelectorAll('.select-btn');

    toggleButtons.forEach(button => {
        button.addEventListener('click', function() {
            const serviceSection = this.parentElement;
            const serviceDescription = serviceSection.querySelector('p');

            
            serviceDescription.classList.select('show');
            
            
            if (serviceDescription.classList.contains('show')) {
                this.textContent = 'Hide Description';
            } else {
                this.textContent = 'Select Description';
            }
        });
    });
});

    </script>
</body>

</html>

</x-layout>