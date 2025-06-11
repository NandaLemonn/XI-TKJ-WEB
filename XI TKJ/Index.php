<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBSITE TKJ</title>
    <style>
        html {
            scroll-behavior: auto;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: url('foto/bg.webp') no-repeat center center fixed;
            background-size: cover; 
            animation: fadeIn 1.5s ease-in-out; 
            overflow: hidden; /* Mencegah scrollbar */
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        header {
            background: linear-gradient(135deg, #4e54c8, #8f94fb); /* Gradasi Ungu ke Biru Muda */
            color: #ffffff;
            padding: 5px;
            display: flex; 
            flex-direction: column;
            align-items: center; 
            justify-content: center; 
            position: relative;
            overflow: hidden;
            animation: slideIn 1s ease-out; /* Animasi slide-in */
        }

        @keyframes slideIn {
            from { transform: translateY(-100%); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .header-content {
            display: flex; 
            align-items: center; 
            justify-content: space-between;
            width: 100%; 
            max-width: 2000px; 
            padding: 0 30px; 
        }

        .logo-container {
            display: flex; 
            align-items: center; 
            margin-bottom: 10px;
            margin-top: 30px;
        }

        .logo-container img {
            width: 110px; 
            height: auto; 
            margin: 0 50px; 
            transition: transform 0.3s, filter 0.3s; 
        }

        .logo-container img:hover {
            transform: scale(1.1); 
            filter: brightness(1.3); /* Efek kecerahan saat hover */
        }

        header h1 {
            position: justify ;
            margin: 30px 50px; 
            font-size: 50px; 
            z-index: 1; 
            flex-grow: 1;
            text-align: center;
            animation: fadeInText 1s ease-in-out; /* Animasi teks */
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7); /* Bayangan teks untuk kontras */
        }

        @keyframes fadeInText {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        header::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 100%;
            height: 20px;
            background: radial-gradient(circle, rgba(255,255,255,0.3) 10%, rgba(255,255,255,0) 70%);
            animation: wave 2s infinite alternate;
        }

        @keyframes wave {
            from { transform: translateY(5px); }
            to { transform: translateY(-5px); }
        }

        nav {
            margin: 20px 0;
            text-align: center; 
        }

        nav a {
            color: #ffffff;
            margin: 0 15px;
            text-decoration: none;
            font-size: 20px;
            padding: 10px 15px;
            border-radius: 8px;
            transition: all 0.3s ease-in-out;
            display: inline-block;
            position: relative;
            overflow: hidden; /* Untuk efek ripple */
        }

        nav a::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: 0;
            width: 100%;
            height: 2px;
            background: rgba(255, 255, 255, 0.8);
            transform: translateX(-50%) scaleX(0);
            transition: transform 0.3s ease-in-out;
        }

        nav a:hover::after {
            transform: translateX(-50%) scaleX(1); /* Efek garis bawah saat hover */
        }

        nav a:hover {
            background: rgba(255, 255, 255, 0.2); /* Warna latar belakang saat hover */
            box-shadow: 0 4px 15px rgba(255, 255, 255, 0.5);
            transform: translateY(-2px);
        }

        nav a:active {
            transform: scale(1.1);
            text-shadow: 2px 2px 10px rgba(255, 255, 255, 0.8);
        }

        section {
            padding: 20px;
            margin: 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #35424a;
        }

        html {
            scroll-behavior: smooth;
        }

        footer {
            text-align: center;
            padding: 10px 0;
            background: #35424a;
            color: #ffffff;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        /* CSS untuk efek hujan */
        .rain {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none; /* Agar tidak mengganggu interaksi dengan elemen lain */
            overflow: hidden; /* Mencegah scrollbar */
        }

        .drop {
            position: absolute;
            bottom: 100%;
            width: 2px;
            height: 10px;
            background: rgba(255, 255, 255, 0.8);
            animation: fall linear infinite;
            opacity: 0.7; /* Opacity untuk efek transparan */
        }

        @keyframes fall {
            to {
                transform: translateY(100vh);
            }
        }
    </style>
</head>
<body>
    <div class="rain" id="rain"></div> <!-- Elemen hujan -->
    
    <header>
        <div class="header-content">
            <div class="logo-container">
                <img src="foto/logo.png" alt="Logo 1">
                <img src="foto/tkjlogo2.jpg" alt="Logo 2">
            </div>
            <div class="logo-container">
                <img src="foto/telkom.webp" alt="Logo 3"> 
                <img src="foto/terabit.png" alt="Logo 4">
            </div>
        </div>
        <h1>SELAMAT DATANG DI WEBSITE KAMI</h1>
        
        <nav>
            <a href="Profile.php"><b>Profile</b></a>
            <a href="Guru.php"><b>Guru Kejuruan</b></a>
            <a href="Kelompok.php"><b>Anggota Kelompok</b></a>
            <a href="visimisi.php"><b>Visi Misi</b></a>
            <a href="Kejuruan.php"><b>Kejuruan</b></a>
        </nav>
    </header>

    
</body>
</html>