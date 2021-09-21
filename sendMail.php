<?php
$name=$_POST['name'];
$tel=$_POST['tel'];
$depart= $_POST['depart'];
$arrive= $_POST['arrive'];
$cntr= $_POST['cntr'];
$gross= $_POST['gross'];
$coment= $_POST['coment'];


mail('nat_mail@mail.ru', 'Запрос ставки', "Имя: $name \n Телефон: $tel \n Пункт отправления:  $depart  \n Пункт назначения: $arrive \n Размер контейнера : $cntr \n Вес брутто: $gross \n  Комментарий: $coment ");
?>

<script>
    alert ("запрос отправлен, перенаправляем на главную страницу")
    location.href = "index.php";
// setTimeout(() => {
//     location.href = "index.php";
// }, 3000);
</script>



