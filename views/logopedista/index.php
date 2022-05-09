<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
?>

<h1>Logopedisti</h1>
<ul>
<?php foreach ($logopedisti as $logopedista): ?>
    <li>
        <?= $logopedista->username ?> - 
        <?= $logopedista->email ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>