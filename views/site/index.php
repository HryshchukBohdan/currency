<?php
use yii\helpers\Html;
use yii\bootstrap\Modal;
use \yii\widgets\ActiveForm;
use \yii\helpers\Url;
$this->title = 'Currency Exchange';
?>
<div class="site-index">
    <div style="position: relative;right:15px;">
    <?= Html::img('@web/images/1001956-currency .jpg', ['alt' => 'main']) ?>
    </div>
    <div class="body-content">

        <div class="row" style="background-color:#fff; border-top:3px solid #8897b6">
            <div class="col-lg-3" style="border-right: 1px solid darkgray;background: #FCFCFD;">
                <h4 style="text-align: center;color:rgba(63, 68, 92, 1);">Menu</h4>
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <!-- Minfin.com.ua region informer 251x120 grey-->
                        <div id="minfin-informer-m1Fn-region">Загружаем <a href="http://minfin.com.ua/currency/" target="_blank">курсы валют</a> от minfin.com.ua</a></div><script type="text/javascript">var iframe = '<ifra'+'me width="251" height="120" fram'+'eborder="0" src="http://informer.minfin.com.ua/gen/region/57/?color=grey" vspace="0" scrolling="no" hspace="0" allowtransparency="true"style="width:251px;height:120px;ove'+'rflow:hidden;"></iframe>';var cl = 'minfin-informer-m1Fn-region';document.getElementById(cl).innerHTML = iframe; </script><noscript><img src="http://informer.minfin.com.ua/gen/img.png" width="1" height="1" alt="minfin.com.ua: курсы валют" title="Курс валют" border="0" /></noscript>
                        <!-- Minfin.com.ua region informer 251x120 grey-->
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>


                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>

            <div class="col-lg-9" >
                        <h4 style="color:rgba(63, 68, 92, 1);text-align: center">Currency Exchange</h4>

                <div>

                    <?php
                    if (Yii::$app->session->get('id')):
                  Modal::begin([
                    'header'=>'<h4 style="text-align: center">Add Offer</h4>',
                    'toggleButton'=>[
                    'label'=>'Add offer',
                    'class' => 'btn btn-primary',
                    'style'=>'float: right;',
                    ],

                    'class' => 'btn btn-default',
                    ]);?>
                    <div style="width: 70%;margin: 0 auto;">
                        <?php $form = ActiveForm::begin(['class'=>'form-horizontal']);
                        ?>
                        <?php echo $form->field($model,'type')->dropDownList([
                            'seller' => 'seller',
                            'buyer' => 'buyer',
                        ],[
                            'prompt' => 'Select type...'
                        ] )?>
                        <?php echo $form->field($model,'currency_from')->dropDownList([
                            'USD' => 'USD',
                            'EUR' => 'EUR',
                            'GBP' => 'GBP',
                            'UAH' => 'UAH',
                        ],[
                            'prompt' => 'Select from...'
                        ] )?>
                        <?php echo $form->field($model,'currency_to')->dropDownList([
                            'USD' => 'USD',
                            'EUR' => 'EUR',
                            'GBP' => 'GBP',
                            'UAH' => 'UAH',
                        ],[
                            'prompt' => 'Select to...'
                        ] )?>
                        <?php echo $form->field($model,'course')->textInput()?>
                        <?php echo $form->field($model,'sum')->textInput()?>
                        <?php echo $form->field($model,'description')->textarea()?>
                        <?php echo Html::submitButton('Submit',['class'=>'btn btn-primary','style'=>'margin:20px 0;'])?>
                        <?php
                        ActiveForm::end();

                        Modal::end();
                        else:?>
                        <a style="float: right" class="btn btn-primary" href="<?php echo Url::toRoute(['site/login']);?>">Add offer</a>
                        <?php endif;?>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Sell</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Buy</a></li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <table style="text-align: center" class="table table-hover">
                                    <tr>
                                        <th>Time</th>
                                        <th>Rate</th>
                                        <th>Sum</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th style="text-align: center">Description</th>
                                        <th>User</th>
                                    </tr>

                                <?php foreach ($propositions as $elem):
                                if ($elem->type == "seller"):?>
                                    <tr>
                                    <td style="margin-top: 10px;"><?php echo substr($elem->date,10)?></td>
                                    <td><?php echo round($elem->course,2);?></td>
                                    <td><?php echo ceil($elem->sum);?></td>
                                    <td><?php echo $elem->currency_from;?></td>
                                        <td><?php echo $elem->currency_to;?></td>
                                    <td style="text-align: left"><?php  echo $elem->description;?><br>
                                        <span style="padding-right: 20px;color: steelblue;">Contracts: 25</span>
                                        <a style="padding-right: 5px" title="Auction" href="<?php echo Url::toRoute(["site/auction/$elem->id"]);?>"class="glyphicon glyphicon-pencil"><?php echo $modal;?></a>
                                        <a href="<?php echo Url::toRoute(["site/accept/$elem->id"]);?>" title="Accept" class="glyphicon glyphicon-ok"></a>
                                    </td>

                                    <td><a href="#"><?php echo $elem->user->login;?></a></td>
                                    </tr>
                                    <?php endif;endforeach;?>

                                </table>

                        </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <table  style="text-align: center" class="table table-hover">
                                    <tr>
                                        <th>Time</th>
                                        <th>Rate</th>
                                        <th>Sum</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th style="text-align: center">Description</th>
                                        <th>User</th>
                                    </tr>

                                <?php foreach ($propositions as $elem):?>
                               <?php if ($elem->type == "buyer"):?>
                                    <tr>
                                   <td style="margin-top: 10px;"><?php echo substr($elem->date,10)?></td>
                                   <td><?php echo round($elem->course,2);?></td>
                                   <td><?php echo ceil($elem->sum);?></td>
                                   <td><?php echo $elem->currency_from;?></td>
                                        <td><?php echo $elem->currency_to;?></td>
                                   <td style="text-align: left"><?php  echo $elem->description;?><br>
                                       <span style="padding-right: 20px;color: steelblue;">Contracts: 25</span>
                                       <a style="padding-right: 5px" title="Auction" href="<?php echo Url::toRoute(['site/auction']);?>" class="glyphicon glyphicon-pencil"></a>
                                       <a href="" title="Accept" class="glyphicon glyphicon-ok"></a>
                                   </td>
                                        <td><a href=""><?php echo $elem->user->login;?></a></td>
                                    </tr>
                               <?php endif;endforeach;?>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>

        </div>

    </div>
</div>
</div>