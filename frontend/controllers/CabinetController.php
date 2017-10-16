<?php
namespace frontend\controllers;



use common\models\CustomerPayment;
use common\models\SearchCustomerPaymentHistory;
use artweb\artbox\ecommerce\helpers\ProductHelper;
use artweb\artbox\ecommerce\models\Order;
use artweb\artbox\models\Customer;
use Yii;
use yii\data\ActiveDataProvider;
use yii\data\ArrayDataProvider;
use yii\helpers\Url;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class CabinetController extends Controller
{

    public $layout = 'cabinet';

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout',
                            'main',
                            'create',
                            'update',
                            'view',
                            'delete',
                            'my-orders',
                            'my-basket',
                            'history',
                            'bookmarks',
                            'print',
                            'payment',
                            'discount'
                        ],
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
     * @return $this|string
     */
    public function actionMain(){
        /**
         *@var Customer $model
         */
        $model = Yii::$app->user->identity;
        if(Yii::$app->request->post()){
            $model->scenario = Customer::SCENARIO_CHANGE;
            $model->load(Yii::$app->request->post());

            if($model->validate()){
                if(!empty($model->password)){
                    $model->setPassword($model->password);
                }
                $model->save();
                return Yii::$app->getResponse()->redirect(Url::to(["cabinet/main"]));
            }
        }

        return $this->render('main',[
            "model" => $model
        ]);
    }



    public function actionBookmarks(){
        return $this->render('bookmarks',[

        ]);
    }

    public function actionMyOrders(){
        $orders = Order::find()->where(['user_id' =>Yii::$app->user->identity->id ])
                    ->joinWith(["products","products.productVariant"]);

        $dataProvider = new ActiveDataProvider([
            'query' => $orders
        ]);

        return $this->render('my-orders',[
            "dataProvider" => $dataProvider
        ]);
    }


    public function actionDiscount(){
        /**
         * @var $user Customer
         */
        $user = Yii::$app->user->identity;
        $data = $user->getCategoryDiscount()->joinWith(['category','category.lang'])->all();
        return $this->render('discount',[
            'categories' => $data
        ]);
    }

    public function actionPayment(){

        $searchModel = new SearchCustomerPaymentHistory();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $payment = CustomerPayment::find()->where(['customer_id' => Yii::$app->user->identity->id ])->one();
        return $this->render('payment', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'payment' => $payment instanceof  CustomerPayment ? $payment : new CustomerPayment()
        ]);
    }

    public function actionPrint(){
        $orderId = Yii::$app->request->get("order_id");
        $order = Order::find()->where(['user_id' =>Yii::$app->user->identity->id, Order::tableName().'.id'=>$orderId ])
            ->joinWith(["products","products.productVariant"])->one();

        return $this->renderPartial('order_print',[
            'order' => $order
        ]);
    }


    public function actionHistory(){

        $dataProvider = new ArrayDataProvider(
            [
                'allModels' => ProductHelper::getLastProducts(true),
            ]
        );
        return $this->render('history',[
            'dataProvider' => $dataProvider
        ]);
    }


}