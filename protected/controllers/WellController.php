<?php

class WellController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('admin'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('create','update','delete'),
				'users'=>Yii::app()->getModule('user')->getAdmins(),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$model2=new AtributWell('search');
		$model2->unsetAttributes();  // clear any default values
		if(isset($_GET['AtributWell']))
			$model2->attributes=$_GET['AtributWell'];

		$this->render('view',array(
			'model'=>$this->loadModel($id),'model2'=>$model2,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Well;
		$active = new Active;
		$active2 = new Active;
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Well']))
		{
			$model->attributes=$_POST['Well'];
			$model->last_update = date("Y-m-d");			
			if($model->save()){
				$active->id_well = $model->id;
				$active->active = $model->active;
				$active->change_date = $model->last_update;
				$active->note = $model->note;
				$active->production = $model->production;
				$active2->id_well = $model->id;
				$active2->active = $model->active;
				$active2->change_date = $model->last_update;
				$active2->note = $model->note;
				$active2->production = $model->production;
				if($active->save() && $active2->save())
					$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$active = new Active;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Well']))
		{
			$model->attributes=$_POST['Well'];
			$model->last_update = date("Y-m-d");			
			$active->id_well = $model->id;
			$active->active = $model->active;
			$active->change_date = $model->last_update;
			$active->note = $model->note;
			$active->production = $model->production;			
			if($model->save() && $active->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$model2=new AtributWell('search');
		$model2->unsetAttributes();  // clear any default values
		if(isset($_GET['AtributWell']))
			$model2->attributes=$_GET['AtributWell'];

		$this->render('update',array(
			'model'=>$model,'model2'=>$model2,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Well');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
	
		$model=new Well('search');
		$model->unsetAttributes();  // clear any default values
		
		if(isset($_POST['pilihanlease'])) {
			$pilihanlease = $_POST['pilihanlease'];		
			Yii::app()->user->setState('pillease', $_POST['pilihanlease']);			
		}else{				
			$pilihanlease = "";			
			$searchParams = Yii::app()->user->getState('pillease');
                if ( isset($searchParams) )
                {
                        $pilihanlease = $searchParams;
                }
		}
			
		if(isset($_GET['Well'])){
			$model->attributes=$_GET['Well'];
		}

		$this->render('admin',array(
			'model'=>$model,'pilihanlease'=>$pilihanlease,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Well the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Well::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Well $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='well-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
