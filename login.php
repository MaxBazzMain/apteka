<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="BaranovaPolina 1isp_21" content="width=device-width, initial-scale=1.0">
    <title>Аптека<3</title>
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
        <a href="./index.php" class="shop-head"><img class="image-head-shop" src="./assets/images/icon/main-drag-icon.png"/>Лекарства</a>
       </div>

       <div class="drag-text-head-block">
        <img class="image-head-shop" src="./assets/images/icon/shop-icon.png"/>
        <a class="shop-head">Прочее</a>
       </div>

       
       <div class="drag-text-head-block">
        <a href="./login.php" class="shop-head"><img class="image-head-shop current" src="./assets/images/icon/account-icon.png"/>Аккаунт</a>
       </div>
       
      </div>
    </div>

<div class="all-body">

     <!-- <div class="body-content">
                <div class="main-block">
                  <a class="body-main-text">Лекарства</a>
                </div>
                <div class="search-block">
                  <img class="search-icon" src="./assets/images/icon/3-icon.png"/>
                  <a class="search-text">Поиск</a>
                  <img class="search-icon-1" src="./assets/images/icon/search-icon.png"/>
                </div>
            </div> -->
      
    <div class="full-container">
        <form class="login-container" action="login_script.php" method="post">
          <input class="title-text-container" type="text" placeholder="login" name="login">
          <input class="title-text-container" type="password" placeholder="password"name="pass">
          <button type="submit">Войти</button>
        </form>

       <form class="login-container" action="./php/register.php" method="post">
          <input class="title-text-container" type="text" placeholder="login" name="login">
          <input class="title-text-container" type="text" placeholder="password" name="pass">
          <input class="title-text-container" type="text" placeholder="repeat pass" name="repeatpass">
          <input class="title-text-container" type="text" placeholder="email" name="email">
          <button type="submit">Зарегистрироваться</button>
        </form>
  
    </div>

   

  
  </div>



  <div class="footer">
    <a class="footer-text">Баранова Полина 2024 1ИСП-21</a>
  </div>

    

  </body>
</html>