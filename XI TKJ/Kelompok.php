<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota Kelompok</title>
   <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
        }
        header {
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px 0;
            text-align: center;
        }
        h4 {
            color: #343a40; 
            margin-bottom: 10px;
            font-size: 1.5em;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }
        h2 {
            color: #343a40; 
            margin-bottom: 10px;
            font-size: 2.5em; 
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }
        h3 {
            color: #d7dde2;
            margin: 5px 0;
            transition: transform 0.3s ease, color 0.3s ease; 
        }
        h3:hover {
            transform: scale(1.1);
            color: #00c6ff; 
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
        }
        .team {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-top: 20px;
            position: center;
            justify-content: center;
          
        }
        .group-photo {
            display: flex;
            height: auto;
            width: 250px;
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
            margin-inline: 10px;
            
        }
        .group-photo img {
            width: 100%;
            height: auto;
            border-radius: 15px;
            transition: transform 0.3s ease;
        }
        .group-photo:hover img {
            transform: scale(1.05);
            filter: brightness(90%); 
        }
        .member-names {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            font-size: 1.5em;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .group-photo:hover .member-names {
            opacity: 1;
        }
        .member-names a {
            text-decoration: none;
            color: white; 
            display: center;
        }
        footer {
            text-align: center;
            padding: 10px 0;
             background: linear-gradient(135deg, #4e54c8, #8f94fb);
            color: #ffffff;
            position: relative;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.3);
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
            background: #00c6ff; 
            transform: scale(1.1);
        }
        footer a:active {
            transform: scale(1.2);
            text-shadow: 2px 2px 10px rgba(255, 255, 255, 0.8);
        }
    </style>
</head>
<body>
     <header>
        <h1>ANGGOTA KELOMPOK</h1>
    </header>

    <div class="container">
        <h2>DAFTAR ANGGOTA</h2>
        <h4>FOLLOW IG KITA</h4>
        <h4>KLIK NAMA KITA DIBAWAH INI</h4>
        <div class="team">
            <div class="group-photo">
                <img src="foto/nandalemon.jpg" alt="Foto Kelompok">
                <div class="member-names">
                    <a href="https://www.instagram.com/nad_kiyomasaaa?igsh=NjNoOTNvcnNobHI1"><h3>NANDA</h3></a>
                </div>
            </div>
            <div class="group-photo">
                <img src="foto/brian.jpg" alt="Foto Kelompok">
                <div class="member-names">
                    <a href="https://www.instagram.com/briann.216?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><h3>BRIAN</h3></a>
                </div>
            </div>
            <div class="group-photo">
                <img src="foto/2.jpg" alt="Foto Kelompok">
                <div class="member-names">
                    <a href="https://www.instagram.com/_ddiifa/?utm_source=ig_web_button_share_sheet"><h3>DIFA</h3></a>
                </div>
            </div>
            <div class="group-photo">
                <img src="foto/1.jpg" alt="Foto Kelompok">
                <div class="member-names">
                    <a href="https://www.instagram.com/_keyzza?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><h3>KEYZA</h3></a>
                </div>
            </div>
            <div class="group-photo">
                <img src="foto/3.jpg" alt="Foto Kelompok">
                <div class="member-names">
                    <a href="https://www.instagram.com/stefhychrstna?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><h3>STEFHY</h3></a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <a href="index.php"><b>BACK</b></a>
    </footer>
</body>
</html>