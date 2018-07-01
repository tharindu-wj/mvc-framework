<?php
/**
 * Created by PhpStorm.
 * User: tharindu
 * Date: 7/1/18
 * Time: 5:45 PM
 */
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Share Something</h3>
    </div>
    <div class="panel-body">
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label>Share Title</label>
            <input type="text" name="title" class="form-control" />
        </div>
        <div class="form-group">
            <label>Share body</label>
           <textarea class="form-control" name="body"></textarea>
        </div>
        <div class="form-group">
            <label>Share Link</label>
            <input type="text" name="link" class="form-control" />
        </div>
        <input class="btn btn-success" type="submit" name="submit" value="Submit">
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
        </form>
    </div>
</div>
