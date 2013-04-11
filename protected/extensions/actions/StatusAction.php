<?php

	class StatusAction extends CAction{
	
		public $model=null;
		public $redirect='index';
		public $field='status';

		/*function run(){

			if(empty($_GET['id']))
				throw new CHttpException(404);

//			$model= Posts::model()->findByPk($_GET['id']);
			$data= CActiveRecord::model($this->model)->findByPk($_GET['id']);

			if($data===null)
				throw new CHttpException(404);
			$data->{$this->field}=$data->{$this->field}==1?0:1; 

			//$model->status=0;
			if($data->update())
				$this->controller->redirect(array($this->redirect));

			throw new CHttpException(500);
			
		}*/

		function run(){

			/*AJAX**/
			if (Yii::app()->request->isAjaxRequest)
				{
				/*	echo CJSON::encode($_GET);*/
					//echo CJSON::encode($_POST);
					$data = array();
			        $data["myValue"] = "Content updated in AJAX";
			 
			        $this->renderPartial('_ajaxContent', $data, false, true);
					//Yii::app()->end();
				}
			/* END AJAX*/
			
		}


}
?>