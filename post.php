<div class="card shadow-sm mb-4 post">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <a href="front_panel_post_detail.php?post_id=<?php echo $post['id']; ?>" class="text-primary">
                <h4 class=""><?php echo shortText($post['title']); ?></h4>
            </a>
        </div>

        <div class="my-3">
            <span class="mr-2 text-muted">
                <i class="feather-user text-primary"></i>
                <?php echo user($post['user_id'])['name']; ?>
            </span>

            <span class="mr-2 text-muted">
                <i class="feather-layers text-success"></i>
                <?php echo showCategory($post['category_id'])['title']; ?>
            </span>

            <span class="text-muted">
                <i class="feather-calendar text-danger"></i>
                <?php echo date("j M Y", strtotime($post['created_at'])); ?>
            </span>
        </div>

        <p class="text-muted">
            <?php echo shortText(strip_tags(html_entity_decode($post['description'])), 200); ?>
        </p>
    </div>
</div>