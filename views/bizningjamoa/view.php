<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BizningJamoa */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bizning Jamoa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>




<div class="header">
     <p>
        <?= Html::a(Yii::t('app', 'Ro\'yhatga qaytish'), ['index', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Tahrirlash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], ['class' => 'btn btn-danger', 'data' => [
         'confirm' => 'Are you sure you want to delete this item?', 'method' => 'post',
             ],
         ]) ?>
    </p>
</div>

 <div class="container">
        <div class="row">
          
          <div class="col-md-12">
            <div class="card animated zoomInDown animation-delay-5">
              <div class="card-block">
                
               <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'fish',
            'ish_joy',
            [
                'attribute' => 'rasm',
                'format' => 'html',
                'label' => 'Rasm',
                'value' => function ($data) {
                    return Html::img('/' . $data['rasm'],
                        ['width' => '60px']);
                },
            ],
            'telegram',
            'facebook',
            'instagram',
        ],
    ]) ?>
                


               
              </div>
            </div>
            
          </div>
        </div>
      
        
      </div>