<?php require_once("header.php") ?>
<div class="conteiner mx-auto" style="width: 600px">
    <h1 class="text-center">Форма запроса</h1>
    <div class="col-md-5 mx-auto">
        <form action=" sendMail.php  " method="POST">
            <div>
                <input id="form" type="text" placeholder="Имя" required name="name">
            </div>
            <div>
                <input type="text" placeholder="Контактный телефон" required name="tel">
            </div>

            <div>
                <input type="text" placeholder="Пункт отправления" required name="depart">
            </div>
            <div>
                <input type="text" placeholder="Пункт назначения " required name="arrive">
            </div>
            <div>
                <input type="text" placeholder="Размер контейнера" required name="cntr">
            </div>
            <div>
                <input type="text" placeholder="Вес брутто" required name="gross">
            </div>
            <div>
                <input type="text" placeholder="Комментарий" name="coment">
            </div>
            <div>
                <input class="button button-header" type="submit">
            </div>
        </form>
    </div>
</div>
</div>


<?php require_once("footer.php") ?>