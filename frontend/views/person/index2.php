<?php

use yii\widgets\Pjax;
?>
<div class="alert alert-success"><?= $sql ?></div>

<?php Pjax::begin(); ?>
<?php
echo \yii\grid\GridView::widget([
    'dataProvider' => $dataProvider,
]);
?>
<?php Pjax::end(); ?>

