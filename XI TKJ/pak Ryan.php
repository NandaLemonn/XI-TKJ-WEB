<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            
        }
        header {
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            color: aliceblue;
            padding: 1px 1px;
            text-align: center;
            opacity: 0; 
            transform: translateY(-20px); 
            animation: fadeInDown 0.5s forwards;
            animation-delay: 0.3s; 
        }
        nav {
            margin: 20px 0;
        }
        nav a {
            color: #ffffff;
            margin: 0 20px;
            text-decoration: none;
        }
        section {
            padding: 20px;
            margin: 20px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: justify;
            opacity: 0; 
            transform: translateY(20px); 
            animation: fadeInUp 0.5s forwards; 
            animation-delay: 0.5s; 
        }
        h2 {
            color: #35424a;
            transition: color 0.3s ease;
        }
       
      
        footer {
            text-align: center;
            padding: 5px 5px;
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            position: relative;
            bottom: 0;
            width: 100%;
            opacity: 0; 
            transform: translateY(20px); 
            animation: fadeInUp 0.5s forwards;
            animation-delay: 0.7s;
        }
        footer a {
            color: #ffffff;
            text-decoration: none;
            font-size: 18px;
            padding: 10px 20px;
            display: inline-block;
            transition: all 0.3s ease-in-out;
            border-radius: 5px;
        }
        footer a:hover {
            background: #1a8acb;
            transform: scale(1.1);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        footer a:active {
            transform: scale(1.2); 
            text-shadow: 2px 2px 10px rgba(255, 255, 255, 0.8);
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>KEJURUAN 2</h1>
    </header>

    <section id="PROFILE">
        <h2>Filipus Ryan Prasetya A.S, S.Kom.</h2>
        <p>Pak Ryan (Kejuruan 2): Mengajar tentang Pemrograman, khususnya membuat website. Materi yang diajarkan termasuk bahasa pemrograman seperti HTML, CSS, JavaScript, dan lain-lain.</p>
        
        <p style="text-align: center;"><b></b></p>


    </section>
        
    <footer>
        <a href="Guru.php"><b>BACK</b></a>
    </footer>
</body>
</html>