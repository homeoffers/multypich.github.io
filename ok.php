
<!DOCTYPE html>
<html lang="uk">
<head>
    <!-- Розроблено @kyivtim -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Дякуємо за заявку</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,500,600,900&display=swap">

    <!-- Facebook Pixel Code -->
    <script>
  var url = new URL(window.location.href);
    var id = url.searchParams.get("p");
    console.log(id);
    var pixel = document.createElement("img");
    pixel.src = "https://www.facebook.com/tr?id=_&amp;ev=Lead&amp;noscript=1".replace("_", id);
    pixel.height = 1;
    pixel.width = 1;
    pixel.style.display="none"; 
</script>
<!-- ----------------------------------------------------------------------- -->

    <!-- <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1049862702715595');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1049862702715595&ev=PageView&noscript=1"
    /></noscript> -->
    <!-- End Facebook Pixel Code -->

</head>
<body>

<script>
    fbq('track', 'Lead'); // Подія Lead для Facebook Pixel
</script>

<div class="container">
    <div class="title">Дякуємо за заявку!</div>
    <div class="message">
        Ми зателефонуємо вам найближчим часом, <br>щоб дізнатися деталі замовлення.
    </div>

    <div class="info">
        Перевірте правильність введеної Вами інформації.
        <br>
        Ім'я: Vitaliy        <br>
        Телефон: +38(068)762-39-08    </div>

    <a class="button" onclick="window.location.href = window.location.origin + window.location.pathname.substring(0, window.location.pathname.lastIndexOf('/')) + '/';">Повернутися</a>
</div>

<style>
        body {
            background-color: #f0f0f0;
            font-family: 'Nunito', sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            background: linear-gradient(135deg, #007BFF, #00BFFF);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
            margin-top: 50px;
        }

        .title {
            font-size: 28px;
            color: #fff;
            margin-bottom: 20px;
            font-weight: 900;
        }

        .message {
            font-size: 20px;
            color: #fff;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .info {
            font-size: 16px;
            color: #fff;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .button {
            padding: 12px 24px;
            background-color: #fff;
            color: #029fff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 25px;
            transition: background-color 0.3s ease, color 0.3s ease, transform 0.2s ease;
        }

        .button:hover {
            background-color: #000;
            color: #fff;
            transform: scale(1.05);
        }

        /* Адаптивність для різних розмірів екрану */
        @media (max-width: 576px) {
            .container {
                max-width: 75%;
            }
        }

        @media (min-width: 577px) and (max-width: 1024px) {
            .container {
                max-width: 75%;
            }
        }

        @media (min-width: 1025px) {
            .container {
                max-width: 600px;
            }
        }
    </style>
    <!-- Розроблено @kyivtim -->
</body>
</html>