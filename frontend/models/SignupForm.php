<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $phone;
    public $occupation;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            ['phone', 'required'],
            ['phone', 'integer'],
            ['occupation', 'required'],
            ['occupation', 'string', 'max' => 60],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        // if (!$this->validate()) {
        //     return null;
        // }
        
        // $user = new User();
        // $user->username = $this->username;
        // $user->email = $this->email;
        // $user->setPassword($this->password);
        // $user->generateAuthKey();
        
        // return $user->save() ? $user : null;
        if ($this->validate()) {
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->phone= $this->phone;
        $user->occupation= $this->occupation;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->status = 10; 
        if ($user->save()) {
            return $user;
        }
    }
 
    return null;
    }
}
