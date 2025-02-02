<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="BaranovaPolina 1isp_21" content="width=device-width, initial-scale=1.0">
    <title>Аптека<3</title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/style.css">

    <link rel="apple-touch-icon"  sizes="180x180" href="/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png"  sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png"  sizes="16x16" href="/assets/images/favicon/favicon-16x16.png">
    <!-- <link rel="manifest" href="/style/site.webmanifest">  -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
  </head>
  <body>

  
        <div class="head-body">

          <div class="head-content">

            <div class="drag-text-head-block">
              <a href="./registered.php" class="shop-head"><img class="current image-head-shop" src="./assets/images/icon/main-drag-icon.png"/>Лекарства</a>
            </div>
      
            <div class="drag-text-head-block">
              <img class="image-head-shop" src="./assets/images/icon/shop-icon.png"/>
              <a class="shop-head">Прочее</a>
            </div>
      
            
            <div class="drag-text-head-block">
              <a href="./logout.php" class="shop-head"><img class="image-head-shop" src="./assets/images/icon/account-icon.png"/>Выход</a>
            </div>
      
            <div class="drag-text-head-block">
              <a href="./basket.php" class="shop-head"><img class="image-head-shop" src="./assets/images/icon/korzina-icon.png"/>Корзина</a>
            </div>
          </div>
          
        </div>


        <div class="all-body">
          
            <div class="body-content">
                <div class="main-block">
                  <a class="body-main-text">Лекарства</a>
                </div>
                <div class="search-block">
                  <img class="search-icon" src="./assets/images/icon/3-icon.png"/>
                  <a class="search-text">Поиск</a>
                  <img class="search-icon-1" src="./assets/images/icon/search-icon.png"/>
                </div>
            </div>
            <? session_start();
              $user = $_SESSION['login'];
            ?>


            <a class="body-main-text">Добро пожаловать, <? echo "$user";?>!</a>

            <div class="container-body">   
              
            
            
            <?require_once('./php/medicine_main_page.php');?>
            <?foreach ($midicinItems as $midicinItem):?>

              <div class="medicine_container" data-id="<?=$midicinItem['id']?>">
                <img class="image-container" src="<?=$midicinItem['medicine_photo']?>"/>
                <a class="title-text-container"><?=$midicinItem['medicine_name']?></a>
                <a class="text-container"><?=$midicinItem['medicine_dose']?> мг, <?=$midicinItem['medicine_quantity']?> шт</a>
                <a class="text-summa"><?=$midicinItem['medicine_price']?> ₽</a>
                 
                <form action="./php/buy.php" method="post">
                <button onclick="sendData()">Купить</button>
                </form>

                <script>
                  function sendData() {
                    fetch('./php/buy.php', {
                    method: 'POST',
                    body: 'midicinItem=' + $midicinItem['id']
                  }
                    )
                  }
                </script>

              </div>  

            <?endforeach?>
           
            </div>

        </div>

        <div class="footer">
          <a class="footer-text">Баранова Полина 2024 1ИСП-21</a>
        </div>
  
  </body>



</html>