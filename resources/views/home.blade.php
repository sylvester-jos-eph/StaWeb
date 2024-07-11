<x-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>

* {
    background-image: url("testimage.jpg");
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
    background-color: purple;
    color: #fff;
    padding: 15px 0;
    text-align: center;
}

header h1 {
    margin: 0;
    font-size: 28px;
}

/* Main styles */
main {
    flex: 1;
    padding: 20px;
}

.row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 2px 20px;
    margin-left: -50px;
}

.product-container {
    background-color: #fff;
    padding: 15px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    width: calc(20% - 10px);
    margin-bottom: 20px;
}

.product-container img {
    max-width: 100%;
    border-radius: 5px;
}

.product-info {
    padding: 10px 0;
}

.product-info h2 {
    margin: 10px 0;
    font-size: 20px;
}

.product-info p {
    margin: 5px 0;
    font-size: 16px;
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
}

@media (max-width: 768px) {
    .container {
        max-width: 600px;
    }

    .product-container {
        width: calc(33.33% - 10px);
    }

    header h1 {
        font-size: 20px;
    }
}

@media (max-width: 480px) {
    .container {
        max-width: 100%;
        padding: 10px;
    }

    .product-container {
        width: calc(50% - 10px);
    }

    header h1 {
        font-size: 18px;
    }
}

        </style>
    </head>
    <body>
    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home - Pathways</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="container">
                <h1>Welcome to StaWeb</h1>
            </div>
        </header>

        <main>
            <div class="container">
                <div class="row">
                    <div class="product-container">
                        <img src="" alt="energy drink">
                        <div class="product-info">
                            <h2>Energy Drink</h2>
                            <p>Strong</p>
                            <p>Price: Ksh 5,000</p>
                            <p>Status: Available</p>
                        </div>
                    </div>
                    <div class="product-container">
                        <img src="" alt="cakes">
                        <div class="product-info">
                            <h2>cakes</h2>
                            <p>sweet</p>
                            <p>Price: Ksh 7,500</p>
                            <p>Status: Out of Stock</p>
                        </div>
                    </div>
                    <div class="product-container">
                        <img src="" alt="sugar">
                        <div class="product-info">
                            <h2>sugar</h2>
                            <p>High Quality</p>
                            <p>Price: Ksh 10,000</p>
                            <p>Status: Available</p>
                        </div>
                    </div>
                    <div class="product-container">
                        <img src="" alt="verse man">
                        <div class="product-info">
                            <h2>Verse Man</h2>
                            <p>Cold Touch</p>
                            <p>Price: Ksh 8,500</p>
                            <p>Status: Available</p>
                        </div>
                    </div>
                    <div class="product-container">
                        <img src="" alt="elliot">
                        <div class="product-info">
                            <h2>Elliot</h2>
                            <p>High Definition</p>
                            <p>Price: Ksh 6,200</p>
                            <p>Status: Out of Stock</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product-container">
                        <img src="" alt="biscuits">
                        <div class="product-info">
                            <h2>Biscuits</h2>
                            <p>Nuvita</p>
                            <p>Price: Ksh 9,800</p>
                            <p>Status: Available</p>
                        </div>
                    </div>
                    <div class="product-container">
                        <img src="" alt="microwave">
                        <div class="product-info">
                            <h2>Microwave</h2>
                            <p>Quick Steam</p>
                            <p>Price: Ksh 12,000</p>
                            <p>Status: Available</p>
                        </div>
                    </div>
                    <div class="product-container">
                        <img src="" alt="shoe rack">
                        <div class="product-info">
                            <h2>Shoe rack</h2>
                            <p>Portable and effecient</p>
                            <p>Price: Ksh 11,500</p>
                            <p>Status: Out of Stock</p>
                        </div>
                    </div>
                    <div class="product-container">
                        <img src="" alt="Tv">
                        <div class="product-info">
                            <h2>Tv</h2>
                            <p>Vitron 66"</p>
                            <p>Price: Ksh 14,500</p>
                            <p>Status: Available</p>
                        </div>
                    </div>
                    <div class="product-container">
                        <img src="" alt="clothes">
                        <div class="product-info">
                            <h2>Clothes</h2>
                            <p>Essentials and Authentic</p>
                            <p>Price: Ksh 13,200</p>
                            <p>Status: Available</p>
                        </div>
                    </div>
                </div>
        </main>

        <footer>
            <div class="container">
                <p>&copy; 2024 StaWeb. All rights reserved.</p>
            </div>
        </footer>
    </div>
</body>
</html>

    </body>
    </html>
</x-layout>