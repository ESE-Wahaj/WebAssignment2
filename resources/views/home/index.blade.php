<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        .container{
            display: flex;
            flex-direction: column;
           
            justify-content: center;
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
       
        .hero{
            display: flex;
            max-width: 100%;
            padding: 10px;
            margin-left: 80px;
            
        }
        .Box1{ 
            margin: 30px;
            background-color: #333;
            color: white;
            padding: 90px;
            width: 400px;
            height: 40px;
        }
        .Box2{
            background-color: #444;
            color: white;
            padding: 100px;
            width: 400px;
            height: 80px;
            margin: 40px;
        }
        .Box3{
            margin: 20px;
            background-color: #000;
            color: white;
            padding: 100px;
            width: 300px;height: 140px;

        }
        .Box4{
            background-color: #333;
            color: white;
            padding: 100px;
            padding-top: 60px;
            padding-bottom: 130px;
            width: 350px;
            height: 70px;
        }
        footer {
            background: #111;
            color: #fff;
            text-align: center;
            padding: 2px;
            margin-top: 0px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <a href="{{route('home.index')}}">Home</a>
            <a href="{{route('home.product')}}">Products</a>
            <a href="{{route('home.blog')}}">Blogs</a>
            <a href="{{route('home.contact')}}">Contact Us</a>
            <a href="{{route('home.feedback')}}">Feedback</a>
            <a href="{{route('home.about')}}">About Us</a>
            
        </div>
        <div class="hero">
            
            <div style="max-width: 50%; margin-left: 30px;">
                <div class="Box1">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea facilis officia assumenda cumque iure exercitationem? Inventore blanditiis dolores, iste soluta, sed sit quae est ipsa quasi ea porro odit praesentium!
                </div>
                <div class="Box2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error minima sapiente ipsum amet. Facere, culpa nostrum ea mollitia esse ipsum explicabo doloremque voluptatibus voluptatem voluptate quae debitis. Asperiores, quisquam sed.
                </div>
            </div>
            <br>
            <div>
                <div class="Box3">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas accusamus optio atque, libero amet dolorum maxime dolores laborum, et facere quibusdam corrupti aliquid sapiente rem eligendi quam! Voluptatem, illo architecto.
                </div>
                <div class="Box4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium suscipit ipsam quas pariatur quos ex esse natus obcaecati, odit, magni alias nostrum earum illum voluptatem voluptate reprehenderit voluptatum itaque molestiae!
                </div>
            </div>
        </div>
    </div>
    <!-- <footer>
        <p>Wahaj &copy; 2025</p>
    </footer> -->
    
</body>
</html>