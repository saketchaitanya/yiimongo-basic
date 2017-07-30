<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\MongoUser;
use app\models\User;
use yii\data\Pagination;
use yii\mongodb\Query;
use yii\web\Cookie;
use yii\helpers\Url;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
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

    /**
     * @inheritdoc
     */
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex($action=null)
    {
        $this->layout='home';
        $model = new LoginForm();
        $session = Yii::$app->session;
        $cookies = Yii::$app->response->cookies;
        if ((Yii::$app->request->post('logout-button')=='logout')||(Yii::$app->request->get('action')=='logout'))
              {
                
                /*echo 'reached';
                die();*/
                $this->logout();
                
                 
                return $this->goHome();
                }
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            
            if ($model->login())
            {
                // open a session
                if(!$session->has('session'))
                {
                    $session->open();
                    $session->set('session','active');
                    $cookies->add(new Cookie([ 
                        'name' => 'username',
                        'value'=>$model->username
                        ]));
                }
            }
            else
            {

            }
            return $this->goBack();
        }

        return $this->render('index',  [
            'model' => $model,]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
             $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
         /*$this->goHome();
        Yii::$app->user->logout(false);
        $session->destroy();*/
     // destroys all data registered to a session
        
        $this->logout();
         
    }
    protected function logout()
    {
        $session = \Yii::$app->session;
        Yii::$app->user->logout(false);
        $session->destroy();
        
    }
    public function afterLogout(){
        $this->goHome();
    }
    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm;
        $model->Scenario = ContactForm::SCENARIO_EMAIL_FROM_USER ;
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionTestWidget() { 
   return $this->render('testwidget'); 
}

public function actionTestGet() {
   echo '<br/>the URL without the host:url <br/>';
   var_dump(Yii::$app->request->url);
   
    echo '<br/>the whole URL including the host path :absoluteUrl <br/>';
   var_dump(Yii::$app->request->absoluteUrl);
   
    echo '<br/>the host of the URL:hostInfo <br/>';
   var_dump(Yii::$app->request->hostInfo);
   
    echo '<br/>the part after the entry script and before the question mark:pathInfo <br/>';
   var_dump(Yii::$app->request->pathInfo);
   
    echo '<br/>the part after the question mark :queryString<br/>';
   var_dump(Yii::$app->request->queryString);
   
    echo '<br/>the part after the host and before the entry script:baseUrl <br/>';
   var_dump(Yii::$app->request->baseUrl);
   
    echo '<br/>the URL without path info and query string:scriptUrl <br/>';
   var_dump(Yii::$app->request->scriptUrl);
   
    echo '<br/>the host name in the URL <br/>';
   var_dump(Yii::$app->request->serverName);
   
    echo '<br/>the port used by the web server <br/>';
   var_dump(Yii::$app->request->serverPort);
    }
public function actionTestResponse() {
        //Yii::$app->response->headers->add('Pragma', 'no-cache');
         //Yii::$app->response->statusCode = 201;
     //throw new \yii\web\GoneHttpException;
      return \Yii::$app->response->sendFile('favicon.ico');
    }
    public function actionRoutes() {
        return $this->render('routes');
    }
    public function actionPagination(){
      // $query = MongoUser::find()->all();
        /*$collection = Yii::$app->mongodb->getCollection('mongoUser');
        $query=$collection->find();*/
       /*var_dump($query);
       die();*/
       $query= new Query();
       
       $query->from('mongoUser');
             $rows=$query->all();
             $count= sizeof($rows);

       $pagination = new Pagination
       (
            ['totalCount' => $count, 'defaultPageSize' => 5]);
        //limit the query using the pagination and retrieve the users
            $models = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
            return $this->render('pagination',
            [
              'models' => $models,
              'pagination' => $pagination,
            ]    
        );
    }

    public function actionRegistration() {
   $mRegistration = new \app\models\RegistrationForm();
   return $this->render('registration', ['model' => $mRegistration]);
}
}
