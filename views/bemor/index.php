<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\BemorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bemors';
$this->params['breadcrumbs'][] = $this->title;
?>

<!--/////////////////////////////////////////////////////////////////////////////-->

<div class="header">
    <h1  style="float: left;"><?= Html::encode($this->title) ?></h1>
    <p style="margin-left: 70%;">
        <?= Html::a('Bemor qo\'shish', ['create'], ['class' => 'btn btn-info btn-min-width mr-1 mb-1 btn-block']) ?>
    </p>
</div>
<br>

<style>
    .table td, .table th {
        padding: .75rem 1rem !important;
    }
</style>
<!-- <div class="user1-index">  -->
<div class="content-body">

    <div class="users-list-table">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="table-responsive">
                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                'id',
                                [
                                    'attribute' => 'avatar',
                                    'format' => 'html',
                                    'label' => 'Rasm',
                                    'value' => function ($data) {
                                        return Html::img('/' . $data['avatar'],
                                            ['width' => '50px']);
                                    },
                                ],

                                'last_name',
                                'first_name',
                                'middle_name',

                                'birth_day',
                                'telefon',
                                'email:email',
                                'jinsi',
                                'created_at',
                                'updated_at',
                                'olingan_signal',
                                'signal_1',
                                'signal_2',
                                'signal_3',
                                'signal_4',
                                'tashxis',
                                'tashxis_file',
                                'manzili',


                                ['class' => 'yii\grid\ActionColumn'],
                            ],
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>