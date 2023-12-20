<?php

namespace app\controllers;

use Yii;
use app\models\Tasks;
use app\models\TasksSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use yii\filters\AccessControl;

/**
 * TasksController implements the CRUD actions for Tasks model.
 */
class TasksController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                // Ваш существующий VerbFilter
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],

                // Добавление AccessControl
                'access' => [
                    'class' => AccessControl::className(),
                    'rules' => [
                        [
                            'actions' => ['index'], // перечислите здесь действия, для которых требуется аутентификация
                            'allow' => false,
                            'roles' => ['?'], // символ ? означает "гостей сайта"
                        ],
                        [
                            'actions' => ['index'], // перечислите здесь действия, для которых требуется аутентификация
                            'allow' => true,
                            'roles' => ['@'], // символ @ означает "аутентифицированных пользователей"
                        ],
                    ],
                    'denyCallback' => function ($rule, $action) {
                        return $action->controller->redirect('/site/login');
                    },
                ],
            ]
        );
    }

    /**
     * Lists all Tasks models.
     *
     * @return string
     */
    // public function actionIndex()
    // {
    //     // if (Yii::$app->user->isGuest || Yii::$app->user->identity->is_admin == 0) {
    //     //     return $this->redirect('/site');
    //     // }


    //     $searchModel = new TasksSearch();

    //     // Получаем ID текущего пользователя
    //     $user_id = Yii::$app->user->id;
    //     // Определяем, является ли пользователь администратором
    //     $isAdmin = Yii::$app->user->identity->is_admin;

    //     // Если пользователь не админ, ограничиваем поиск его собственными записями
    //     if ($isAdmin == 0) {
    //         $searchModel->user_id = $user_id;
    //     }

    //     //$searchModel = new TasksSearch();
    //     $dataProvider = $searchModel->search($this->request->queryParams);

    //     return $this->render('index', [
    //         'searchModel' => $searchModel,
    //         'dataProvider' => $dataProvider,
    //     ]);
    // }

    public function actionIndex()
    {
        $searchModel = new TasksSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        // Если текущий пользователь не админ, фильтруем заказы так, чтобы показать только его заказы
        if (!Yii::$app->user->identity->is_admin) {
            $dataProvider->query->andWhere(['user_id' => Yii::$app->user->id]);
        }

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tasks model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        // if (Yii::$app->user->isGuest || Yii::$app->user->identity->is_admin == 0) {
        //     return $this->redirect('/site/login');
        // }

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Tasks model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {

        // if (Yii::$app->user->isGuest || Yii::$app->user->identity->is_admin == 0) {
        //     return $this->redirect('/site/login');
        // }

        $model = new Tasks();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tasks model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {

        // if (Yii::$app->user->isGuest || Yii::$app->user->identity->is_admin == 0) {
        //     return $this->redirect('/site/login');
        // }

        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tasks model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {

        // if (Yii::$app->user->isGuest || Yii::$app->user->identity->is_admin == 0) {
        //     return $this->redirect('/site/login');
        // }

        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tasks model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Tasks the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {

        // if (Yii::$app->user->isGuest || Yii::$app->user->identity->is_admin == 0) {
        //     return $this->redirect('/site/login');
        // }

        if (($model = Tasks::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
