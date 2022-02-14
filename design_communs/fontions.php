<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>exercice1</title>
</head>

<body>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100%;
             background-image: url(/EXERCICES_PHP/Exercice_1/Orca.jpg); 
        }
        
        .header {
            display: grid;
            background-color: rgb(255, 196, 0);
            justify-content: center;
            align-items: center;
            height: 5vh;
        }
        
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            /* background-color: green; */
            overflow: hidden;
        }
        
        nav ul {
            float: right;
            margin-right: 20px;
            margin-left:20px;
        }
        
        nav ul li {
            display: inline-block;
            line-height: 30px;
            margin: 0 5px;
        }
        
        nav ul li a {
            color: white;
            font-size: 17px;
            text-transform: uppercase;
            padding: 7px 13px;
            border-radius: 3px;
        }
        
        a.active,
        a:hover {
            background-color: rgb(255, 196, 0);
            transition: .5s;
        }
        
        nav {
            background-color: black;
            ;
            height: 70px;
            width: 100%;
        }
        li a {
            text-decoration:none;
            padding:0;
            margin:0;
        }
        
        .header p {
            font-size: 1.5em;
            font-weight: bolder;
            color: black;
        }
        
        .exercice1 {
            display: grid;
            height: 8vh;
            width: 25vw;
            border-radius: 30px;
            position: absolute;
            left: 12%;
            top: 36%;
            background-color: rgb(255, 196, 0);
            border: 1px white;
            justify-content: center;
            align-items: center;
        }
        
        .ouverture {
            display: grid;
            height: 30vh;
            width: 25vw;
            border-radius: 30px;
            position: absolute;
            left: 12%;
            top: 50%;
            background-color: white;
            border: 1px white;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
        /* .ouverture:hover {
            background-color: rgb(255, 196, 0);
        }
         */
        
        .exercice1 p {
            font-size: 1.5em;
        }
        
        .exercice1:hover {
            background-color: rgb(255, 196, 0);
            border: 1px white;
        }
        
        img {
            height: 60vh;
            width: 40vw;
            position: absolute;
            right: 15%;
            top: 30%;
        }
        
        .suivant:hover {
            background-color: rgb(255, 196, 0);
            ;
        }
        
        .suivant {
            background: rgba(7, 150, 150, 0.534);
            display: flex;
            position: absolute;
            top: 90%;
            left: 50.5%;
            height: 5vh;
            width: 3vw;
            clip-path: polygon(0% 20%, 60% 20%, 60% 0%, 100% 50%, 60% 100%, 60% 80%, 0% 80%);
            cursor: pointer;
        }
        
        .precedent:hover {
            background-color: rgb(255, 196, 0);
        }
        
        .precedent {
            background: rgba(7, 150, 150, 0.534);
            display: flex;
            position: absolute;
            top: 90%;
            left: 45.5%;
            height: 5vh;
            width: 3vw;
            clip-path: polygon(40% 0%, 40% 20%, 100% 20%, 100% 80%, 40% 80%, 40% 100%, 0% 50%);
            cursor: pointer;
        }
        
        #corp {
            display: grid;
            width: 40%;
            height: 90%;
            border: 1px;
            background-color: black;
        }
    </style>

    <div class="header">
        <nav>
            <ul>
                <li><a href="/index1.html.php">exercice 1</a></li>
                <li><a href="/EXERCICES_PHP/Exercice_2/index2.html.php">exercice 2</a></li>
                <li><a href="#">exercice 3</a></li>
                <li><a href="#">exercice 4</a></li>
                <li><a href="#">exercice 5</a></li>
                <li><a href="#">exercice 6</a></li>
                <li><a href="#">exercice 7</a></li>
                <li><a href="#">exercice 8</a></li>
                <li><a href="#">exercice 9</a></li>
                <li><a href="#">exercice 10</a></li>
                <li><a href="#">exercice 11</a></li>
                <li><a href="#">exercice 12</a></li>
                <li><a href="#">exercice 12</a></li>
                <li><a href="#">exercice 13</a></li>
                <li><a href="#">exercice 14</a></li>
                <li><a href="#">exercice 15</a></li>
                <li><a href="#">exercice 16</a></li>
                <li><a href="#">exercice 17</a></li>

            </ul>
        </nav>
    </div>

    <div class="exercice1">
        <P>Exercice 1</P>
    </div>


    <div class="ouverture">
        <?php
        include_once("index.php");


        ?>


        <!-- <P>Veuillez cliquer ici pour l'ouvrir</P> -->
    </div>

    <div class="suivant">
        <a href="/Exercice_2/index2.html"></a>

    </div>
    <div class="precedent">

    </div>



    <img src="/EXERCICES_PHP/Exercice_1/php.png" alt="">

    <div id="corp">

    </div>


