<div>

    <?php if(isset($_SESSION['is_logged_in'])) : ?>
    <a class="btn btn-primary text-center" href="<?php echo ROOT_PATH; ?>courses/add">Add a course</a>
    <?php endif; ?>
        <?php foreach($viewmodel as $item) : ?>
            <div>
                <h3><?php echo $item['course_name']; ?></h3>
                <small><?php echo $item['course']; ?></small>
            </div>

        <?php endforeach; ?>
</div>