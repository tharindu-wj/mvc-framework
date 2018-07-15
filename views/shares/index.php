<?php
/**
 * Created by PhpStorm.
 * User: tharindu
 * Date: 7/1/18
 * Time: 5:45 PM
 */
?>
<div>
    <?php if(isset($_SESSION['is_logged_in'])) : ?>
    <a class="btn btn-success btn-share"
       href="<?php echo ROOT_PATH; ?>shares/add">
        Share Now
    </a>
    <?php endif; ?>
    <?php //var_dump($viewmodel); ?>
    <?php foreach ($viewmodel as $item) : ?>
        <div class="well">
            <h3><?php echo $item['title']; ?></h3>
            <small><?php echo $item['create_date']; ?></small>
            <hr>
            <p><?php echo $item['body']; ?></p>
            <a class="btn btn-default"
               href="<?php echo $item['link']; ?>"
               target="_blank">
                Go to Website
            </a>
        </div>
    <?php endforeach; ?>
</div>
