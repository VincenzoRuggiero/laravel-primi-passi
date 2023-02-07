<?php 
$menuList = ['html', 'css', 'javascript', 'vue', 'php', 'laravel'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

    <style>
        header{
            margin: 1rem auto;
        }

        .menu{
            list-style-type: none;
            font-size: 1.1rem;
        }

        .menu li{
            padding: .5rem .8rem
        }
        .menu li:hover{
            background-color: salmon;
           
        }
        .menu .item{
            display: inline-block;
            margin-right: 30px;
        }

        .menu .item a{
            text-decoration: none;
            color: orangered;
        }
        .menu .item a:hover{
            color: white;
        }
    </style>

    <title>Homepage</title>
</head>
<body>
    <header>
        <h1>Web Dev Languages 🧑🏻‍💻</h1>
            <nav>
                <ul class="menu">
                    @foreach ($menuList as $item)
                        <li class="item"><a href={{"/$item"}}>{{$item}}</a></li>
                    @endforeach    
                </ul>
            </nav>
    </header>
    
</body>
</html>