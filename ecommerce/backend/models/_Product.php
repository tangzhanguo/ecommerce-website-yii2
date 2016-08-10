<?php
	namespace backend\models;
	use yii\base\Model;

	class Product extends Model
	{
		public $status;
		public $name;
		public $product_id;
		public $category_id;
		public $price;
		public $discount;
		public $descripton;
		public $short_description;
		public $stock;
		public $meta_title;
		public $meta_keywords;
		public $meta_description;
		public function rules()
		{
			return [
				[['name', 'category_id','descripton','price','status'], ’required’]
			];
		}
}
?>