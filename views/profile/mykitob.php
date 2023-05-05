<?
use yii\helpers\Url;

use yii\widgets\ActiveForm;

$action = Yii::$app->controller->action->id;
?>
<br>
<br>
<div class="container">
    <div class="row">

        <div class="col-md-4">

            <?=Yii::$app->controller->renderPartial('/blocks/frontend/profileleft',['action' => $action]);?>
        </div>

        <div class="col-md-8">
            <!-- <div class="ms-hero-bg-primary ms-hero-img-mountain">
                <h2 class="text-center no-m pt-4 pb-4 color-white index-1">Psixologik metodika yuborish</h2>
            </div> -->
            <div class="card card-primary animated fadeInUp animation-delay-7">
                <div class="bs-example">
                    <table class="table table-striped">
                        <thead class="pricing-table-head">
                        <tr>
                            <td>#</td>
                            <td>Kitob nomi</td>
                            <td>Sotib olingan sana</td>
                            <td>Narx</td>
                            <td>Fayl</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?if(count($kitoblar) == 0):?>
                        <tr>
                            <td colspan="5">Bu yerda siz sotib olgan kitoblar turadi</td>
                        </tr>
                        <?else:?>
                        <? $i = 0; foreach ($kitoblar as $m) {?>
                            <tr>
                                <td><?=++$i?></td>
                                <td><?=$m->kitob->nomi?></td>
                                <td><?=$m->created_at?></td>
                                <td >
                                    <span class="ms-tag ms-tag-success"> <?=$m->kitob->narx?></span>
                                </td>
                                <td>
                                    <a href="<?=Url::to('/kitoblar/download/'.$m->kitob->id)?>" class="btn-circle btn-circle-xs btn-circle-primary">
                                        <i class="zmdi zmdi-download"></i>
                                    </a>
                                </td>
                            </tr>
                        <? }?>

                        <?endif;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>