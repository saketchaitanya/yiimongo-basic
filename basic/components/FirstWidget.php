<?php
namespace app\components;
use yii\base\Widget;

class FirstWidget extends Widget{

	public $mes; 
    public function init() 
    { 
           parent::init(); 
           ob_start();
         /*if ($this->mes === null) { 
            $this->mes = 'First Widget'; 
        }*/ 

    }  
    public function run() 
    { 
         //return "<h1>$this->mes</h1>"; 
    	 $content= ob_get_clean();
    	return "<h1>$content</h1>";
	} 
} 

