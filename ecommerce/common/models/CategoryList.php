<?php
namespace common\models;

use Yii;
use yii\base\Model;

/**
 * CategoryList
 */
class CategoryList extends Model
{
    public $CList=array();
    private $Cat=array();
    public $CTree="";

    public function traverseBackToRoot($categoryid)
    {
    	$k = $categoryid;
    	while($k != 0) {
    		$traverse = Category::find()->where(['ID' => $k])->one();
    		$this->CList[] = ['ID'=>$traverse->ID, 'PARENTID'=>$traverse->PARENTID, 'CATEGORYNAME'=>$traverse->CATEGORYNAME];
    		$k = $traverse->PARENTID;
    	}
    }
    
    public function makeTree() {
    	$this->Cat = Category::find()->where('ID != 1')->all();

    	$this->CTree = $this->tree();
    }
    
    private function tree($parent=0) {
    	$result = "<ul>";
    	foreach($this->Cat as $item) {
    		if($item['PARENTID'] == $parent) {
    			$result .= "<li class=\"jstree-open\">".$item['CATEGORYNAME'];
    			if($this->hasChildren($item['ID'])) {
    				$result .= $this->tree($item['ID']);
    			}
    			$result .= "</li>";
    		}
    	}
    	$result .= "</ul>";
    	
    	return $result;
    }
    
    private function hasChildren($node) {
    	foreach($this->Cat as $item)
    		if($item['PARENTID'] == $node)
    			return true;
    	return false;
    }
}
