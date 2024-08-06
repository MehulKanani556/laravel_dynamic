<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
       .header {
        background-color: #333;
            color: #fff;
            padding: 10px;
        }
       .header ul {
        list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
       .header ul li {
        float: left;
        display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
       .header ul li:hover {
        background-color: #555;
        }
       .footer {
        background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        a{
            color: #fff;
            text-decoration: none;
            
        }
       /* Dark mode styles */
        @media (prefers-color-scheme: dark) {
            body {
                background-color: #333;
                color: #fff;
            }
           .header {
                background-color: #333;
            }
           .header ul {
                background-color: #333;
            }
           .header ul li {
                color: white;
            }
           .footer {
                background-color: #333;
            }
        }
        /* Responsive layout */
        @media screen and (max-width: 600px) {
           .header ul li {
                float: none;
                width: 100%;
            }
        }
        /* Custom styles */
        h1, h3 {
            text-align: center;
        }
        p {
            margin: 0 auto;
            width: 50%;
        }
        /* Dark mode styles */
        @media (prefers-color-scheme:
        dark) {
            body {
                background-color: #333;
                color: #fff;
            }
            h1, h3 {
                color: white;
            }
            p {
                color: #fff;
            }
            div {
                background-color: #333;
                color: #fff;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <ul>
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href="">About</a>
            </li>
            <li>
                <a href="">Login</a>
            </li>
            <li>
                <a href="">Contact</a>
            </li>
        </ul>
    </div>
   {{ $main }}
    <div class="footer">
        <p>Footer page</p>
    </div>
</body>
</html>

