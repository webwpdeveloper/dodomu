<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ul itemscope itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="index.php" itemprop="item">
                    <span itemprop="name">Головна</span>
                </a>
                <meta itemprop="position" content="1">
            </li>
            <?php if ($prevPage) : ?>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a href="<?php echo $link ?>" itemprop="item">
                        <span itemprop="name"><?php echo $prevPage ?></span>
                    </a>
                    <meta itemprop="position" content="2">
                </li>
            <?php endif; ?>

            <?php if ($currentPage) : ?>
                <li class="active" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <span itemprop="name"><?php echo $currentPage ?></span>
                    <meta itemprop="position" content="3">
                </li>
            <?php endif; ?>
        </ul>
    </div>
</div>