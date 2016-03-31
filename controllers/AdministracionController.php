<?php /*Templete Administracion*/
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Usuario;
class AdministracionController extends Controller
{
  public $layout="administrador";

  public function actionIndex()
  {
    return $this->render('bienvenido');
  }

  /*Para el control de acceso*/
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
 								 $rolvalido = ['P','M'];
 								 return Usuario::roleInArray($rolvalido) && Usuario::isActive();
 							 }
             	]
             	]
             ]
            ];
      }

      public function actionLogout()
      {
          Yii::$app->user->logout();

          return $this->goHome();
      }
}
?>
