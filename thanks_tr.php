<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teşekkür Sayfası</title>

    <!-- Ek stilleriniz buraya gelecek -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:#rgb(240, 227, 156);
            color: #004715;
            text-align: center;
            padding: 50px;
        }

        h1 {
            color: #033a0331;
        }

        p {
            font-size: 2rem;
        }

        a {
            color: #9b2b1e;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .back-to-home {
            margin-top: 20px;
        }

        /* Resim için eklenen stil */
        .thank-you-image {
            margin-top: 3px;
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>

    <div>
        <h1>Siparişiniz İçin Teşekkür Ederiz!</h1>
        
        <p>Eğer herhangi bir sorunuz veya endişeniz varsa, lütfen bizimle <a href="contact_tr.php">iletişime geçin</a>.</p>
        <p>Bizi <a href="https://www.facebook.com/solo.restorant/about">Facebook</a> üzerinden takip edebilirsiniz.</p>
    </div>

    <!-- Anasayfaya dön linki -->
    <div class="back-to-home">
        <a href="home_tr.php">Ana Sayfa'ya Dön</a>
    </div>

    <div class="image">
        <img src="images/Pizza maker-pana.svg" alt="Teşekkür Ederiz Resmi" class="thank-you-image">
    </div>

</body>

</html>
