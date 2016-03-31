<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Usuario;
use app\models\Alumno;
use app\models\RegistroForm;

class SiteController extends Controller
{
    public $layout="publico";
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {

        return $this->render('index');
    }

    public function actionLogin()
    {
        /*if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }*/

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login())
          {

            if( Yii::$app->user->identity->tipo=='A')
                $this->redirect(array('dashboard/index'));
            else {
              $this->redirect(array('administracion/index'));
            }


          }


        return $this->render('login', [
            'model' => $model,
        ]);
    }


    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }






    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionRegistro()
    {
        //Registro
        $model = new RegistroForm();
        //print_r(Yii::$app->request->post());


        if ($model->load(Yii::$app->request->post()))
        {
          #print_r(Yii::$app->request->post());
          #print_r($model->attributes);
          #exit;

            if($model->validate())
            {
              $modelUsuario= new Usuario;
              $modelUsuario->email= $model->email;
              $modelUsuario->password = sha1($model->password);
                if($modelUsuario->validate() && $modelUsuario->save())
                {
                    $modelAlumno = new Alumno();
                    $modelAlumno->id_usuario = $modelUsuario->id_usuario;
                    $modelAlumno->nombre = $model->nombre;
                    $modelAlumno->apellidos = $model->apellidos;
                    $modelAlumno->semestre = $model->semestre;
                    $modelAlumno->matricula='';


                    if ($modelAlumno->save()) {
                        /*if (!\Yii::$app->user->isGuest) {
                        return $this->goHome();*/
                         }

                }

                $modelLogin = new LoginForm();
                $modelLogin ->username = $model->email;
                $modelLogin ->password = $model->password;
                if($modelLogin->login())
                {
                  if( Yii::$app->user->identity->tipo=='A')
                    $this->redirect(array('dashboard/index'));
                else {
                  $this->redirect(array('administracion/index'));
                }
              }


            }

        }
       return $this->render('formRegistro', [
            'model' => $model,
        ]);
    }
}
