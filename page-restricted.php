<?php
/**
* Theme: Hestia Child
*
* Template Name: Page - Restricted
*
* This template is a static html page to warn users that you have to login to view this site.
*
* @package hestia-child
*/
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Amina Technologies Partners Area</title>
  <meta name="description" content="An Amina Restricted Site">
  <meta name="author" content="Amina Technologies">
  <link rel="icon" href="https://aminasound.com/content/favicon.png">
  <style>
  .amina-restricted{
    height: 100vh;
    max-width: 400px;
    margin: auto;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack:center;
    -ms-flex-pack:center;
    justify-content:center;
    -webkit-box-orient:vertical;
    -webkit-box-direction:normal;
    -ms-flex-direction:column;
    flex-direction:column;
  }
  .amina-restricted__container{
    margin-bottom: 30px;
  }
  .amina-restricted__image{
    height: 200px;
  }
  .amina-restricted__icon{
    height: 50px;
  }
  .amina-restricted__logo{
    margin-bottom: 25px;
  }

  </style>

</head>


<body>
  <div class="amina-restricted">
    <div class="amina-restricted__container">
      <a  href="javascript:history.back()">
        <img class="amina-restricted__icon" src="https://aminasound.com/content/return-arrow.png" alt="Amina Logo">
      </a>
    </div>
    <div class="amina-restricted__container">
      <img class="amina-restricted__image" src="https://aminasound.com/content/padlock.png" alt="Padlock icon">
    </div>
    <div class="amina-restricted__container">
      <a href="https://uk.aminasound.com/">
        <img class="amina-restricted__logo" src="https://aminasound.com/content/Amina-Logo-200px.png" alt="Amina Logo">
      </a>
    </div>
    <div class="amina-restricted__container">
      <?php if( is_user_logged_in() ): ?>
        <p> Welcome </p>
      <?php else:
        // wp_login_form();
        ?>
        <p> This content is only viewable for registered partners of Amina Technologies </p>
      <?php endif ?>
    </div>
    <div class="amina-restricted__container">
      <a href="<?php  echo site_url(); ?>">
        <img class="amina-restricted__icon" src="https://aminasound.com/content/key.png" alt="Amina Logo">
      </a>
    </div>
  </div>
</body>
</html>
