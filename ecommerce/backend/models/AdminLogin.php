<?php
namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class AdminLogin extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;

    private $_admin = false;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $admin = $this->getUser();
            if (!$admin || !$admin->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }

    /**
     * Logs in a admin using the provided username and password.
     *
     * @return boolean whether the admin is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
        } else {
            return false;
        }
    }

    /**
     * Finds admin by [[username]]
     *
     * @return Admin|null
     */
    public function getUser()
    {
        if ($this->_admin === false) {
            $this->_admin = Admin::findByUsername($this->username);
        }

        return $this->_admin;
    }
}
