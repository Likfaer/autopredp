<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Автомобилестроительное предприятие</h1>
    </div>

    <div class="body-content">
<div class="row">
    <h2> Запросы </h2>
  </div>
  <div class="col-sm p-1 d-flex justify-content">
    <?php
    echo '<a type="button"  href="http://localhost/autopredp/web/index.php?r=admin/work%2Fquery1" class="btn btn-primary">1. Список авто опр.цеха и опр. категории</a>'
    ?>
  </div>
  <div class="col-sm p-1 d-flex justify-content">
    <?php
    echo '<a type="button"  href="http://localhost/autopredp/web/index.php?r=admin/work%2Fquery2" class="btn btn-primary">2. Список авто опр. цеха за период времени (+кол-во)</a>'
    ?>
  </div>
  <div class="col-sm p-1 d-flex justify-content">
    <?php
    echo '<a type="button"  href="http://localhost/autopredp/web/index.php?r=admin/engeneer%2Fquery31" class="btn btn-primary">3.1 Вывод инженеров по определенной профессии</a>'
    ?>
  </div>
	<div class="col-sm p-1 d-flex justify-content">
    <?php
    echo '<a type="button"  href="http://localhost/autopredp/web/index.php?r=admin/worker%2Fquery32" class="btn btn-primary">3.2 Вывод рабочих по определенной профессии</a>'
    ?>
  </div>
  <div class="col-sm p-1 d-flex justify-content">
    <?php
    echo '<a type="button"  href="http://localhost/autopredp/web/index.php?r=admin/workshop%2Fquery4" class="btn btn-primary">4. Цех + начальник + их участки (+кол-во)</a>'
    ?>
  </div>
  <div class="col-sm p-1 d-flex justify-content">
    <?php
    echo '<a type="button"  href="http://localhost/autopredp/web/index.php?r=admin/work%2Fquery5" class="btn btn-primary">5. Производящиеся / исследующиеся авто</a>'
    ?>
  </div>
  <div class="col-sm p-1 d-flex justify-content">
    <?php
    echo '<a type="button"  href="http://localhost/autopredp/web/index.php?r=admin/brigade%2Fquery6" class="btn btn-primary">6. Бригада опр. участка->состав бригады</a>'
    ?>
  </div>
  <div class="col-sm p-1 d-flex justify-content">
    <?php
    echo '<a type="button"  href="http://localhost/autopredp/web/index.php?r=admin/plot%2Fquery7" class="btn btn-primary">7. Инженеры опр. участка/цеха</a>'
    ?>
  </div>
  <div class="col-sm p-1 d-flex justify-content">
    <?php
    echo '<a type="button"  href="http://localhost/autopredp/web/index.php?r=admin/work%2Fquery8" class="btn btn-primary">8. Производящихся авто по опр. участку/цеху</a>'
    ?>
  </div>
  <div class="col-sm p-1 d-flex justify-content">
    <?php
    echo '<a type="button"  href="http://localhost/autopredp/web/index.php?r=admin/brigade%2Fquery9" class="btn btn-primary">9. Состав бригады, производящей опр. авто</a>'
    ?>
  </div>
  <div class="col-sm p-1 d-flex justify-content">
    <?php
    echo '<a type="button"  href="http://localhost/autopredp/web/index.php?r=admin/work%2Fquery10" class="btn btn-primary">10. Лаборатории по опр. авто</a>'
    ?>
  </div>
  <div class="col-sm p-1 d-flex justify-content">
    <?php
    echo '<a type="button"  href="http://localhost/autopredp/web/index.php?r=admin/work%2Fquery11" class="btn btn-primary">11. Авто опр. категории. опр. лаборатории за опр. период</a>'
    ?>
  </div>
  <div class="col-sm p-1 d-flex justify-content">
    <?php
    echo '<a type="button"  href="http://localhost/autopredp/web/index.php?r=admin/work%2Fquery12" class="btn btn-primary">12 Лаборанты опр. авто, категории и лаборатории</a>'
    ?>
  </div>
  <div class="col-sm p-1 d-flex justify-content">
    <?php
    echo '<a type="button"  href="http://localhost/autopredp/web/index.php?r=admin/work%2Fquery13" class="btn btn-primary">13 Оборудование по опр. изделию </a>'
    ?>
  </div>
  <div class="col-sm p-1 d-flex justify-content">
    <?php
    echo '<a type="button"  href="http://localhost/autopredp/web/index.php?r=admin/work%2Fquery14" class="btn btn-primary">14. Производящееся авто опр. категории опр. участка, цеха </a>'
    ?>
  </div>
            
       

    </div>
</div>
