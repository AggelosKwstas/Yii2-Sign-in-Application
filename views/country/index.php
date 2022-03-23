<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Countries</h1>
<ul>
<?php
if($countries>1)
echo "works";
else
echo "not found";
?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>