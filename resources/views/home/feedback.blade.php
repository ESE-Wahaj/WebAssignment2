<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contactUS</title>
    <style>
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
        .container{
            display: flex;
            flex-direction: row;
            justify-content: center;    
            margin: 30px;
        }
        footer {
            background: #111;
            color: #fff;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="navbar">
    <a href="{{route('home.index')}}">Home</a>
            <a href="{{route('home.product')}}">Products</a>
            <a href="{{route('home.blog')}}">Blogs</a>
            <a href="{{route('home.contact')}}">Contact Us</a>
            <a href="{{route('home.feedback')}}">Feedback</a>
            <a href="{{route('home.about')}}">About Us</a>
        
    </div>
    <div class="container">
        <div style="flex: 1; margin: 20px;">
            <h2>Contact Us</h2>
            <textarea name="" id="" placeholder="Your message" style="width: 100%; height: 200px; padding: 10px; border-radius: 5px; border: 1px solid #ccc;"></textarea>
        </div>
        <div style="flex: 1; display: flex; flex-direction: column; margin: 20px; margin-top: 90px;">
            <input type="text" placeholder="Name" style="margin-bottom: 10px; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
            <input type="email" name="" id="" placeholder="Email" style="margin-bottom: 10px; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
            <button type="submit" style="padding: 10px; border-radius: 5px; background-color: #111; color: white; border: none; cursor: pointer;">Submit</button>
        </div>
    </div>
    <footer>
        <p>Wahaj &copy; 2025</p>
    </footer>
</body>
</html>