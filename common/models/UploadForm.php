<?php
namespace common\models;

use yii\base\Model;
use yii\web\UploadedFile;


/*
 * 文件上传类
 */
class UploadForm extends Model
{
    /**
     * @var UploadedFile[]
     */
    public $imageFiles;

    public function rules()
    {
        return [
            [['imageFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 4],
        ];
    }
    
    public function upload($path)
    {
        if ($this->validate()) { 
            foreach ($this->imageFiles as $file) {
                $file->saveAs('uploads/' . $path . $file->baseName . '.' . $file->extension);
            }
            return true;
        } else {
            return false;
        }
    }
    
    private function createPath($path){
    	
    }
}