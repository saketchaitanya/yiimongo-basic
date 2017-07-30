<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;
    const SCENARIO_EMAIL_FROM_GUEST = 'EMAIL_FROM_GUEST';
    const SCENARIO_EMAIL_FROM_USER = 'EMAIL_FROM_USER';

 public function scenarios()
    {
        
        return[  self::SCENARIO_EMAIL_FROM_GUEST =>['name','email','subject','verifyCode'],
                 self::SCENARIO_EMAIL_FROM_USER => ['email','subject','verifyCode']
        ];
    }

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['email', 'subject', 'body'], 'required', 'on'=>self::SCENARIO_EMAIL_FROM_USER],
            [['name','email', 'subject', 'body'],'required','on'=>self::SCENARIO_EMAIL_FROM_GUEST],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
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

   
}
