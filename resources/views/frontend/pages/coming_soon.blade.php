<!DOCTYPE html>
<html>
<head>
<title>Comming Soon</title>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    a{
        text-decoration: none;
    }
    ul{
        list-style-type:none;
    }
    img{
        max-width: 100%;
        object-fit: cover;
    }
    .container{
        width: 100vw;
        height: 100vh;
        background: url({{asset('storage/images/background.png')}});
        background-size: coverl;
        padding: 0 8%;
        position: relative;
    }
    .content{
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        color: #fff;
    }
    .content p{
        font-size: 17px;
        padding-bottom: 10px;
    }
    .content h1{
        font-size: 64px;
        font-weight: 600;
    }
    .content span{
        color: #ff3753;
    }
    .rocket{
        width: 250px;
        position: absolute;
        right: 10%;
        bottom: 0;
        animation: rocket 4s linear infinite;
    }
    @keyframes rocket{
        0%{
            bottom: 0;
            opacity: 0;
        }
        100%{
            bottom: 105%;
            opacity: 1;
        }
    }
    
</style>
</head>
<body>
    <div class="container">
        <div class="content">
            <p>Website is Under Maintenance</p>
            <h1>We're <span>Launching</span> Soon...</h1>
        </div>
        <img src="{{asset('storage/images/rocket.png')}}" class="rocket" /> 
    </div>


</body>
</html>