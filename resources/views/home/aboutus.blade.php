<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        
        .content {
            padding: 20px;
            background: #fff;
            margin-top: 110px;
            margin-bottom: 115px;
        }
        .content h2 {
            color: #333;
        }
        .content p {
            line-height: 1.6em;
        }
        footer {
            background: #111;
            color: #fff;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }
        .navbar{
            display: flex;
            justify-content: right;
            background-color: #111;
            color: white;
            padding: 10px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px;
        }
    </style>
</head>
<body>

    <header>
        
            <div class="navbar">
            <a href="{{route('home.index')}}">Home</a>
            <a href="{{route('home.product')}}">Products</a>
            <a href="{{route('home.blog')}}">Blogs</a>
            <a href="{{route('home.contact')}}">Contact Us</a>
            <a href="{{route('home.feedback')}}">Feedback</a>
            <a href="{{route('home.about')}}">About Us</a>
            </div>
       
    </header>
    <div class="container">
        <div class="content">
            <h2>Our Mission</h2>
            <p>Our mission is to provide the best services to our customers. We strive to achieve excellence in every aspect of our business and ensure customer satisfaction.</p>
            <h2>Our Team</h2>
            <p>We have a dedicated team of professionals who are experts in their respective fields. Our team works tirelessly to meet the needs of our customers and deliver outstanding results.</p>
            <h2>Our Values</h2>
            <p>We believe in integrity, innovation, and customer focus. These values guide us in everything we do and help us build long-lasting relationships with our customers.</p>
        </div>
    </div>
    <footer>
        <p>Wahaj &copy; 2025</p>
    </footer>
</body>
</html>