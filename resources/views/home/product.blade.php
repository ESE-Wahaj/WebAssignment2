<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
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
            flex-direction: column;
            
            margin: 20px;
            
            
        }
        img{
            /* margin-left: 80px; */
            /* width: 250px;
            height: 250px; */
            margin-bottom: 10px;
            /* margin-top: 10px; */
            /* margin-right: 80px; */
        }
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 3px;
            margin-top: -15px;
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
        <div style="display: flex; justify-content: space-evenly; width: 100%;">
            <img src="https://picsum.photos/id/12/400/280" alt="">
            <img src="https://picsum.photos/id/10/400/280" alt="">
            <img src="https://picsum.photos/id/11/400/280" alt="">
            
            
        </div>
        <div style="display: flex; justify-content: space-evenly; width: 100%;">
            <img src="https://picsum.photos/id/13/400/280" alt="">
            <img src="https://picsum.photos/id/14/400/280" alt="">
            <img src="https://picsum.photos/id/15/400/280" alt="">
            
            
        </div>
        
    </div>
    <footer>
        <p>Wahaj &copy; 2025</p>
    </footer>
</body>
</html>