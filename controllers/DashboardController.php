<?php

namespace app\controllers;

use app\models\AlumnoSearch;
use yii\web\Controller;
use Yii;
use app\models\Alumno;
use app\models\Inscripciones;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\Usuario;
use app\models\Taller;

/**
 * AlumnoController implements the CRUD actions for Alumno model.
 */
class DashboardController extends Controller
{

	public $layout="public";
  public function behaviors()
     {
         return [
             'access' => [
              'class'=>AccessControl::className(),
              'only'=>['index'],
              'rules'=>[
              [
               'allow'=>true,
               'actions'=>['index'],
               'roles'=>['@'],
               'matchCallback'=>function ($rule,$action)
               {
                 $rolvalido = ['A','C'];
                 return Usuario::roleInArray($rolvalido) && Usuario::isActive();
               }
              ]
              ]
             ]
            ];
      }
    /**
     * Lists all Alumno models.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('bienvenido');

    }

public function actionInscripcion()
{
  //1. Yii::$app->user->getId(); el id del usuario
  //2. Buscar ese usuario
  //usuario->inscripcion =='S' --Muestrar el form, revidsar, buscar el alumno y si e id del alyumno esta en la tabla de insccoopne
  //muestra el formulario

  //3. si no tiene permiso de inscirocon mandas un mensaje. o si esta inscrito le muestras el mesnaja de que esta inscript.
	$model = new Inscripciones();
  $talleres = Taller::find()->all();
  $alumno = Alumno::findOne(['id_usuario'=>Yii::$app->user->getId()]);

   $model->id_alumno = $alumno->id_alumno;
   $model->id_usuario = Yii::$app->user->getId();

  if($alumno->inscripcion=='N')
  {
  	$texto="Aun No Tiene Autorizacion, Contactese Con La Maestra Lucia";

  	return $this->render('mensaje',['texto'=>$texto]);
  }
  else
  {
  	$estainscrito=Inscripciones::findOne(['id_alumno'=>$alumno->id_alumno]);

  	if(empty($estainscrito))
  	{
  		if ($model->load(Yii::$app->request->post()))
  		{
  			$model->save();
  			$taller=Taller::findOne(['id_taller', $model->id_taller]);
  			$taller->ocupados=$taller->ocupados+1;
  			$taller->save();

  			if ($taller->ocupados==$taller->cupo) {
  				$taller->estado='C';
  				$taller->save();
  			}

  			$texto="Gracias por inscribirse al taller De: ". $taller->nombre.'<br>Horario del primer día:'.$taller->hora_inicial.'<br>Lugar: '.$taller->imagen;

  			return $this->render('mensaje',['texto'=>$texto]);
  			/*if($taller->estado=='C'){
  				$texto="Este Taller Esta Lleno, Favor Escoja Uno Diferente";

  				return $this->render('mensaje',['texto'=>$texto]);
  			}*/

  			//print_r($model->attributes);
  		}
  		return $this->render('create',['model'=>$model,'talleres'=>$talleres,'alumno'=>$alumno]);
  	}
  	else
  	{
  		$taller = Taller::findOne(['id_taller', $estainscrito->id_taller]);
  		$texto="Usted ya se ha inscrito a un taller De: ". $taller->nombre.'<br>Horario del primer día:'.$taller->hora_inicial.'<br>Lugar: '.$taller->imagen; ;

  	return $this->render('mensaje',['texto'=>$texto]);
  	}
  }
  #return $this->render('create',['model'=>$model,'talleres'=>$talleres]);

}

<<<<<<< HEAD
=======

>>>>>>> origin
public function actionLogout()
{

    Yii::$app->user->logout();

        return $this->goHome();
}
}


?>
