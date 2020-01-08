<?php 
// pengulangan 
for ($i = 1 ; $i <= 10 ; $i++ ){
   echo "hello world $i <br>";
} 

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
  <table border="1" cellspacing="0" cellpadding= "10" >
      <?php for ($a =1 ; $a <= 3; $a++):?>
        <tr>
            <?php for ($b=1;$b<=5 ; $b++): ?>
                <td>
                    <?php echo $a.", ".$b?>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
</body>
</html>

<?php echo "<br>" ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <style type="text/css">
       .warna{
        background-color:red;
    }
    .warna2{
        background-color: blue;
    }
</style>
</head>
<body>
  <table border="1" cellspacing="0" cellpadding= "10" >
      <?php for ($a =1 ; $a <= 5; $a++):?>

        <?php if($a%2==1): ?>
            <tr class="warna">
        <?php else :?>
            <tr class="warna2">
        <?php endif ?>
            <?php for ($b=1;$b<=5 ; $b++): ?>
                <td>
                    <?php echo $a.", ".$b?>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
</body>
</html>






