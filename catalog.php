<?php

include_once("config.php");

$error = $name = $phone = $email = $comment = '';

if (isset($_POST['save'])) {
	$name = mysqli_real_escape_string($conn, $_POST['user-name']);
	$phone = mysqli_real_escape_string($conn, $_POST['user-phone']);
	$email = mysqli_real_escape_string($conn, $_POST['user-email']);
	$comment = mysqli_real_escape_string($conn, $_POST['user-comment']);

	$sql = "INSERT INTO orders(Name, Phone, Email, Comment) VALUES('$name', '$phone', '$email', '$comment')";

	if (mysqli_query($conn, $sql)) {
		
	} else {
		$error = 'Помилка реєстрації!';
	}
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/modern-normalize@1.1.0/modern-normalize.min.css"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <title>PCLegend</title>
  </head>
  <body>
    <header class="header-border">
      <div class="container header-container">
        <nav class="navigation">
          <ul class="menu">
            <li class="links-header">
              <a href="./index.html" class="link-header"> Студія</a>
            </li>
            <li class="links-header">
              <a href="./portfolio.html" class="link-header current">Каталог</a>
            </li>
            <li class="links-header">
              <a href="#footer" class="link-header">Контакти</a>
            </li>
          </ul>
        </nav>
        <div class="logo-wrapper">
          <a href="/index.html">
            <img src="./img/logo.png" alt="logo" class="logo" />
          </a>
        </div>

        <ul class="contacts-header">
          <li class="mail">
            <a href="mailto:info@pclegend.com" class="contact-header">
              <svg
                aria-label="Електронна пошта"
                class="contact-header icon-mail"
              >
                <use href="./images/sprite.svg#icon-mail"></use>
              </svg>
              pclegend@gmail.com
            </a>
          </li>
          <li>
            <a href="tel:+380961111111" class="contact-header">
              <svg
                aria-label="Номер телефону"
                class="contact-header icon-smartphone"
              >
                <use href="./images/sprite.svg#icon-smartphone"></use>
              </svg>
              +38 096 111 11 11
            </a>
          </li>
        </ul>
      </div>
    </header>

    <main>
      <section class="section">
        <div class="container hero2">
          <h2 class="section3-title">НАШІ ПОСЛУГИ</h2>
          <div>
            <ul class="poslugy">
              <li class="poslugy-item">
                <img src="./img/catalog1.jpg" alt="" class="catalog-photo" />
                <p class="posluga-text">Консультація</p>
              </li>
              <li class="poslugy-item">
                <img src="./img/catalog2.jpg" alt="" class="catalog-photo" />
                <p class="posluga-text">Збір ПК</p>
              </li>
              <li class="poslugy-item">
                <img src="./img/catalog3.jpg" alt="" class="catalog-photo" />
                <p class="posluga-text">Технічне обслуговування</p>
              </li>
              <li class="poslugy-item">
                <img src="./img/catalog4.jpg" alt="" class="catalog-photo" />
                <p class="posluga-text">Готові рішення</p>
              </li>
              <li class="poslugy-item">
                <img src="./img/catalog5.jpg" alt="" class="catalog-photo" />
                <p class="posluga-text">Кастомізація</p>
              </li>
              <li class="poslugy-item">
                <img src="./img/catalog6.jpg" alt="" class="catalog-photo" />
                <p class="posluga-text">Модернізація</p>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="container order">
          <button type="button" class="order-button" data-modal-open>
            Замовити послугу
          </button>
        </div>
      </section>

      <section class="section">
          
          <div class="ant-carousel">
            <div class="works"><h2 class="section3-title">НАШІ РОБОТИ</h2></div>
            
            <div class="ant-carousel-hider">
              <ul class="ant-carousel-list">
                <li class="ant-carousel-element">
                  <img src="./img/0.webp" alt="0" class="photo-carus" />
                </li>
                <li class="ant-carousel-element">
                  <img src="./img/1.jfif" alt="1" class="photo-carus" />
                </li>
                <li class="ant-carousel-element">
                  <img src="./img/2.webp" alt="2" class="photo-carus" />
                </li>
                <li class="ant-carousel-element">
                  <img src="./img/3.png" alt="3" class="photo-carus" />
                </li>
                <li class="ant-carousel-element">
                  <img src="./img/4.png" alt="4" class="photo-carus" />
                </li>
                <li class="ant-carousel-element">
                  <img src="./img/5.png" alt="5" class="photo-carus" />
                </li>
                <li class="ant-carousel-element">
                  <img src="./img/6.webp" alt="6" class="photo-carus" />
                </li>
                <li class="ant-carousel-element">
                  <img src="./img/7.png" alt="7" class="photo-carus" />
                </li>
                <li class="ant-carousel-element">
                  <img src="./img/8.jpg" alt="8" class="photo-carus" />
                </li>
                <li class="ant-carousel-element">
                  <img src="./img/9.jpg" alt="9" class="photo-carus" />
                </li>
              </ul>
            </div>
            <div class="ant-carousel-arrow-left"></div>
            <div class="ant-carousel-arrow-right"></div>
            <div class="ant-carousel-dots"></div>
          </div>
        </div>
      </section>
    </main>

    <footer class="footer-background" id="footer">
      <div class="container section-footer">
        <div class="footer-contacts-flex">
          <a href="./index.html" lang="en" class="logo footer-logo">
            <img src="./img/logo.png" alt="logo" class="logo" />
          </a>
          <address>
            <ul>
              <li class="footer-address">
                <a
                  href="https://www.google.com/maps/d/embed?mid=10uSM3H-mIU3GznYo2szRIEphczw&hl=en_US&ehbc=2E312F"
                  target="_blank"
                  class="footer-link"
                >
                  м. Київ, пр-т Лесі Українки, 26
                </a>
              </li>
              <li class="footer-address">
                <a
                  href="mailto:pclegend@gmail.com"
                  class="footer-link contact-footer"
                  >pclegend@gmail.com</a
                >
              </li>
              <li class="footer-address">
                <a href="tel:+380961111111" class="footer-link contact-footer"
                  >+38 096 111 11 11</a
                >
              </li>
            </ul>
          </address>
        </div>

        <div>
          <form>
            <p class="footer-form-title">Підпишіться на розсилку</p>
            <div class="footer-input-flex">
              <label class="footer-form-label">
                <span class="input-wrapper">
                  <input
                    type="email"
                    class="footer-input"
                    required
                    name="user-email-send-list"
                    placeholder="E-mail"
                  />
                </span>
              </label>
              <button type="submit" class="footer-submit-button">
                Підписатися
              </button>
            </div>
          </form>
        </div>
      </div>
    </footer>

    <div class="backdrop is-hidden" data-modal>
      <div class="modal">
        <button type="button" class="modal-close-button" data-modal-close>
          <p>Exit</p>
        </button>
        <div class="modal-wrapper">
          <p class="modal-title">Залиште свої дані, ми вам передзвонимо</p>
          <form class="modal-form" action="catalog.php" method="POST">
            <label class="form-label">
              <span class="form-input-text">Ім'я</span>
              <span class="input-wrapper">
                <input
                  type="text"
                  class="form-input"
                  required
                  pattern="[a-zA-Zа-яА-яіІїЇ]+"
                  name="user-name"
                />
                <svg aria-label="Персона" class="form-icon">
                  <use href="./images/sprite.svg#icon-person"></use>
                </svg>
              </span>
            </label>
            <label class="form-label">
              <span class="form-input-text">Телефон</span>
              <span class="input-wrapper">
                <input
                  type="tel"
                  class="form-input"
                  required
                  pattern="[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}"
                  title="xxx-xxx-xx-xx"
                  name="user-phone"
                />
                <svg aria-label="Телефон" class="form-icon">
                  <use href="./images/sprite.svg#icon-input-phone"></use>
                </svg>
              </span>
            </label>
            <label class="form-label">
              <span class="form-input-text">Пошта</span>
              <span class="input-wrapper">
                <input
                  type="email"
                  class="form-input"
                  required
                  name="user-email"
                />
                <svg aria-label="Лист" class="form-icon">
                  <use href="./images/sprite.svg#icon-input-mail"></use>
                </svg>
              </span>
            </label>
            <label class="form-label">
              <span class="form-input-text">Коментар</span>
              <textarea
                name="user-comment"
                class="form-area"
                placeholder="Введіть текст"
              ></textarea>
            </label>
            <label class="form-label check-box-label">
              <input
                type="checkbox"
                class="form-check"
                required
                name="user-policy"
              />
              <svg class="custom-check-box">
                <use
                  class="check-box-icon"
                  href="./images/sprite.svg#icon-submit"
                ></use>
              </svg>
              Погоджуюся з розсилкою та приймаю&nbsp;
              <a href="#" class="policy-link">Умови договору </a>
            </label>
            <button type="submit" class="modal-submit-button" name="save">
              Відправити
            </button>
          </form>
			 <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
        </div>
      </div>
    </div>
    <script src="./js/modal.js"></script>
    <script src="./js/carus.js"></script>
  </body>
</html>
