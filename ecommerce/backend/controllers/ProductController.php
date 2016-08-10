<?php

namespace backend\controllers;

use Yii;
use common\models\Products;
use common\models\Category;
use common\models\Status;
use common\models\Image;
use common\models\CategoryList;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\common\models;

/**
 * ProductController implements the CRUD actions for Products model.
 */
class ProductController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Products models.
     * @return mixed
     */
    public function actionIndex()
    {
    	$query = Products::find()->joinWith(['status','category']);
    	$qitems = $query->select(['product.PRODUCTID','CATEGORYID','category.CATEGORYNAME','STATUSID' => 'product.STATUS' ,'status.STATUS','TITLE','CREATEDATE','PRICE','STOCK'])->groupBy('product.PRODUCTID')->all();
        return $this->render('index', [
            'model' => $qitems, 
        ]);
    }

    /**
     * Displays a single Products model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Products model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Products();
    	$cat = new CategoryList();
    	$cat->makeTree();
    	$sta = Status::find()->all();

        $model->CREATEBY = 0;
        $model->PUBLISHBY = 0;

        if($model->load(Yii::$app->request->post()) && $model->validate()) {
	        if ($model->save()) {
	            return $this->redirect(['index']);
	        }  else {
	            return $this->render('create', [
	                'model' => $model, 'categorylist' => $cat->CTree, 'statuslist' => $sta
	            ]);
        	}
        } else {
            return $this->render('create', [
                'model' => $model, 'categorylist' => $cat->CTree, 'statuslist' => $sta
            ]);
        }
    }

    /**
     * Updates an existing Products model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionEdit($id)
    {
        $model = $this->findModel($id);
        $img = $model->getImages();
    	$cat = new CategoryList();
    	$cat->makeTree();
    	$sta = Status::find()->all();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('edit', [
                'model' => $model, 'categorylist' => $cat->CTree, 'statuslist' => $sta, 'images' => $img
            ]);
        }
    }

    /**
     * Deletes an existing Products model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Products model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Products::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


    /* CATEGORY */

    /**
     * Lists all Category models.
     * @return mixed
     */
    public function actionCategory($parent=null)
    {
        if($parent === 0 || $parent == null) {
            $query = Category::find()->where('ID != 1 && PARENTID=0')->all();
            
            return $this->render('category', [
            		'model' => $query,
            ]);
        } else {
        	$q = new CategoryList();
        	$q->traverseBackToRoot($parent);
            $query = Category::find()->where('ID != 1 && PARENTID='.$parent)->all();

	        return $this->render('category', [
	            'model' => $query, 'cattraverse' => $q->CList,
	        ]);
        }
    }

    /**
     * Creates a new Category model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCategoryCreate($parent=null)
    {
        $model = new Category();
    	$cat = Category::find()->where('ID != 1')->all();

        if($model->load(Yii::$app->request->post()) && $model->validate()) {
	        if ($model->save()) {
	            return $this->redirect(['category']);
	        }  else {
	            return $this->render('category-create', [
	                'model' => $model, 'catlist' => $cat
	            ]);
        	}
        } else {
            return $this->render('category-create', [
                'model' => $model, 'catlist' => $cat
            ]);
        }
    }

    /**
     * Updates an existing Category model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionCategoryEdit($id)
    {
        $model = $this->findModel_category($id);
    	$cat = Category::find()->where('ID != 1')->all();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['category']);
        } else {
            return $this->render('category-edit', [
                'model' => $model, 'catlist' => $cat
            ]);
        }
    }

    /**
     * Deletes an existing Category model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    
    
    //DFS delete category
    private function delCategory($idx) {
    	$query = Category::find()->where('ID != 1 && PARENTID='.$idx)->all();
    	foreach($query as $items) {
    		$this->delCategory($items['ID']);
    	}

    	$Postmodel = Products::findAll(['CATEGORYID'=>$idx]);
    	foreach($Postmodel as $items) {
    		$items->CATEGORYID = 0;
    		$items->save();
    	}
    	$this->findModel_category($idx)->delete();
    }
    
    public function actionCategoryDelete($id)
    {
    	$this->delCategory($id);
        return $this->redirect(['category']);
        
    	/*
        $this->findModel_category($id)->delete();
        $queue = new SplQueue();
        //BFS delete category
        $queue->push($id);
        while($queue->isEmpty == FALSE) {
        	$queue->pop();
        	$query = Category::find()->where('ID != 1 && PARENTID='.$queue)->all();

        	foreach($query as $items) {
        		$queue->push($items['ID']);
        	}
        	Category::model()->deleteAll("day !='" . date('Y-m-d') . "'");
        }
        
        Category::model()->deleteAll("day !='" . date('Y-m-d') . "'");
        return $this->redirect(['category']);
        */
    }

    /**
     * Finds the Category model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Category the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel_category($id)
    {
        if (($model = Category::findOne($id)) !== null && $id != 1) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
