<div>

    <?php if(isset($_SESSION['is_logged_in'])) : ?>
    <a class="btn btn-primary text-center" href="<?php echo ROOT_PATH; ?>shares/add">Share Something</a>
    <?php endif; ?>
        <?php foreach($viewmodel as $item) : ?>
            <div>
                <h3><?php echo $item['title']; ?></h3>
                <small><?php echo $item['create_date']; ?></small>
                <hr />
                <p><?php echo $item['body']; ?></p>
                <br />
                <a class="btn btn-default" href="<?php echo $item['link']; ?>" target="_blank">Go to Site</a>
            </div>

        <?php endforeach; ?>
</div>