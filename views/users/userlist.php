<div>
<?php foreach($viewmodel as $item) : ?>
    <div>
        <h3><?php echo $item['name']; ?></h3>
        <small><?php echo $item['email']; ?></small>
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <input class="user-id" style="display: none;" type="text" name="userId" value="<?php echo $item['id']; ?>">
            <input class="btn btn-primary" name="submit" type="submit" value="View Profile" />
        </form>
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>">Edit</a>
        <hr />
        <br />
    </div>
<?php endforeach; ?>

</div>


