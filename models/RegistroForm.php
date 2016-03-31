<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class RegistroForm extends Model
{
    public $email;
    public $password;
    public $nombre;
    public $apellidos;
    public $semestre;
    #public $verifyCode;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['nombre', 'email', 'apellidos', 'nombre','semestre','password'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            //Comprueba si existe el email
            ['email', 'email_existe']
            // verifyCode needs to be entered correctly

        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'nombre'=>'Nombre',
            'apellidos'=>'Apellidos',
            'semestre'=>'Semestre',

        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param  string  $email the target email address
     * @return boolean whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([$this->email => $this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }


    public function email_existe($attribute, $params)
    {
  
  //Buscar el email en la tabla
         $table = Usuario::find()->where("email=:email", [":email" => $this->email]);
  
  //Si el email existe mostrar el error
        if ($table->count() == 1)
            {
                   $this->addError($attribute, "El email seleccionado existe");
            }
            }
}
