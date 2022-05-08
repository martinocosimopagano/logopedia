<?php
/* @var $this yii\web\View */
?>
<h1>pagina 2!!!</h1>

<p>
    pagina 2
</p>

<h1><?php echo $messaggio1; ?></h1>

<?php foreach($posts as $post): ?>
    <h1><?php echo $post->username ?></h1>
<?php endforeach ?>