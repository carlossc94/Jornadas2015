<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\helpers\Security;
use yii\web\IdentityInterface;
use app\models\Usuario;


/**
 * This is the model class for table "usuario".
 *
 * @property integer $id_usuario
 * @property string $email
 * @property string $matricula
 * @property string $password
 * @property string $tipo
 * @property string $status
 * @property string $inscripcion
 *
 * @property Alumno[] $alumnos
 */
class Usuario extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'password'], 'required'],
            [['email'],'unique'],
            [['email'], 'string', 'max' => 50],
            #[['matricula'], 'string', 'max' => 8],
            [['password'], 'string', 'max' => 42],
            [['tipo', 'status', 'inscripcion'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_usuario' => 'Id Usuario',
            'email' => 'Email',
            #'matricula' => 'Matricula',
            'password' => 'Password',
            'tipo' => 'Tipo',
            'status' => 'Status',
            'inscripcion' => 'Inscripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnos()
    {
        return $this->hasMany(Alumno::className(), ['id_usuario' => 'id_usuario']);
    }



    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['email'=>$username]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
      return $this->password === sha1($password);
    }


public $role;

public static function isUserAdmin($id)
{
   if (Usuario::findOne(['id' => $id, 'activate' => '1', 'tipo' => "m"])){
    return true;
   } else {
    return false;
   }
}

public static function isUserSimple($id)
{
   if (Usuario::findOne(['id' => $id, 'activate' => '1', 'role' => "a"])){
   return true;
   } else {
   return false;
   }
}
/*Para el manejo de roles Acceso restringido a ciertos controladores sin bd*/
public static function roleInArray($arrayRole)
{

  return in_array(Yii::$app->user->identity->tipo,$arrayRole);
}
public static function isActive()
{
  return Yii::$app->user->identity->status=='A';
}

}
