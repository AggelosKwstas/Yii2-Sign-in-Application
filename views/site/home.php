<?php
use yii\helpers\Html;
/** @var yii\web\View $this */

$this->title = 'CRUD';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">CRUD Application Using Yii2 Framework</h1>
    </div>

<div class="row">
<span style="margin: 15px;" ><?= Html::a('Create', ['/site/create'], ['class'=>'btn btn-success'])?></span>
</div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
            <table class="table table-hover">
  <thead>
    <tr class="table-warning">
      <th scope="col">Code</th>
      <th scope="col">Name</th>
      <th scope="col">Population</th>
      <th scope="col">Update Record</th>
      <th scope="col">Delete Record</th>
    </tr>
  </thead>
  <tbody>
      <?php if(count($countries)>0): ?>
         <?php foreach($countries as $country): ?>
      <tr>
      <td><?php echo $country->code; ?></td>
      <td><?php echo $country->name; ?></td>
      <td><?php echo $country->population; ?></td>
      <td><span><?= Html::a('Update', ['/site/update','code'=>$country->code], ['class'=>'btn btn-primary'])?></span></td>
      <td><span><?= Html::a('Delete', ['/site/delete','code'=>$country->code], ['class'=>'btn btn-danger'])?></span></td>
    </tr>
        <?php endforeach; ?>
    <?php else: ?>
    <tr>
        <td>
            No Records Found
        </td>
    </tr>
    <?php endif; ?>
         </tbody>
</table>
            </div>
        </div>

    </div>
</div>
