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
            color: #ffffff;
            padding: 10px 0;
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
        }
        h3 {
            color: #1a8acb;
        }
        footer {
            text-align: center;
            padding: 10px 0;
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            color: #ffffff;
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
        }
        footer a:active {
            transform: scale(1.2); 
            text-shadow: 2px 2px 10px rgba(255, 255, 255, 0.8);
        }
        .mission, .vision {
            margin: 20px 0;
            padding: 15px;
            border-left: 5px solid #1a8acb;
            background: #e9f5ff;
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
        <h1>VISI DAN MISI</h1>
    </header>

    <section id="VISION">
        <h2>Visi</h2>
        <div class="vision">
            <h3>VISI SMK KRISTEN 5 KLATEN</h3>
            <p>Mewujudkan tamatan yang beriman dan bertakwa kepada Tuhan Yang Maha Esa, memiliki kemampuan untuk berkompetisi di dunia usaha atau dunia industri, serta mampu berwira usaha sesuai dengan bidang keahlihan di era globlal.</p>
        </div>
    </section>

    <section id="MISSION">
        <h2>Misi</h2>
        <div class="mission">
            <h3>MISI SMK KRISTEN 5 KLATEN</h3>
            <ol type="1">
                
          
                <li>Memberikan pelayanan yang optimal melalui SDM yang unggul dengan peralatan yang berstandar dan sarana yang respresentatif.</li>
                <li>Meningkatkan sistem manajemen.</li>
                <li>Menjadikan sekolah sebagai sumber informasi dan pusat kebudayaan.</li>
                <li>Mengembangkan pendidikan berbasis Kompetensi yang berorientasi pada dunia kerja dan mandiri.</li>
                <li>Mengembangkan Unit produksi dengan mengoptimalkan potensi yang ada.</li>
                <li>Menjalin dan memperluas jaringan kerja sama dengan Dunia Usaha dan Dunia Industri.</li>
                <li>Menciptakan lingkungan pendidikan yang aman dan nyaman.</li>
            </ol>
            
       
    </section>

    <footer>
        <a href="index.php"><b>BACK</b></a>
    </footer>
</body>
</html>