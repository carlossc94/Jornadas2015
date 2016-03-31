<?php 

use app\models\Alumno;

 $alumno = Alumno::findOne(['id_usuario'=>Yii::$app->user->getId()]);


 if($alumno->inscripcion=='S'){

	echo "<div class='alert alert-dismissable alert-success'>
<button type='button' class='close' data-dismiss='alert'></button>";
echo "<p>";
echo $texto;
echo "</p>";
echo "</div>";

}else{



	echo "<div class='alert alert-dismissable alert-warning'>
<button type='button' class='close' data-dismiss='alert'></button>";
echo "<p>";
echo $texto;
echo "</p>";
echo "</div>";

}





?>


    
    
   