<?php
  echo "Тестовое задание";
?>

<html> 
 <p>Ошибка! Исправьте!</p><br>
 <form action="test.php">
  <label>Строка: <input type="text" name="string" value="<?php echo (isset($_GET['string']))?$_GET['string']:'';?>"></label><br><br>
  <label>Число_1: <input type="text" name="numb_1" value="<?php echo (isset($_GET['numb_1']))?$_GET['numb_1']:'';?>"></label><br><br>
  <label>Число_2: <input type="text" name="numb_2" value="<?php echo (isset($_GET['numb_2']))?$_GET['numb_2']:'';?>"></label><br><br>

  <input type="submit" value="Посчитать" name="myAction">
 </form> 
</html>

<style> p {color:red; opacity:0;} </style>


  <?php
if (isset($_GET['myAction'])) {
if (!(empty($_GET['string'])) && preg_match("/^[0-9]+$/", ($_GET['numb_1'])) && preg_match("/^[0-9]+$/", ($_GET['numb_2']))) {
  $summa=$_GET['numb_1']+$_GET['numb_2'];
  echo $_GET['string']," ", $summa;
?>
<style>
  form {display:none;}
</style>
<?php
   }
 else { ?>
  <style> p {opacity:1;} </style> <?php
 }
}
?>

