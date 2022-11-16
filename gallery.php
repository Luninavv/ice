<!DOCTYPE html>
<html lang="ru">
 <head> 
  <meta charset="UTF-8">
  <title>Ледовая арена "Кот на льду"</title>
  </head>
<?php
  require("php/header.php");
?>
<body>
      <div class="inf">
          <section>
          <?php foreach ($posts as $post) {
          ?>
          <div class="inf1">
            <img src="<?php echo $post['imgurl']?>" width="80%" alt="Картинки нет">
            <div>
              <p><?=$post['text']?></p>
            </div>
          </div>
          <?php } ?>
          </section>
      </div>
    </main>
<?php
  require("php/footer.php");
?>
  <div class="imdiz-overlay"></div>
	<div class="imdiz-modal1">
                <span class="imdiz-close"></span>
                <p>Директор:<br>
                   Кузнецов Семен Семенович<br>
                   Администратор:<br>Иванов Петр Петрович<br>
                   Адрес: г.Санкт-Петербург,<br>улица 3-я Строителей, 25<br>
                   Телефон (812) 3-233-322<br>
                   e-mail: snowcat@mail.ru<br>
                 </p>   
	</div>
<script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>