<!DOCTYPE html>
<html lang="zh-Hans">
<?php $this->need('header.php'); ?>
<body>
<main class="page-content" aria-label="Content">
    <div class="wrapper">
        <header class="post-header">
            <a class="site-title" href="/"><?php $this->options->title() ?></a>
            <h1 class="post-title " itemprop="name headline"><?php $this->archiveTitle(' &raquo; ', '', ''); ?></h1>
        </header>

        <div class="post-cover" aria-label="Cover">
            <div class="post-cover-wrapper">
                <img src="<?php $this->options->themeUrl('images/index.jpg'); ?>">
            </div>
        </div>
    </div>
</main>
<?php $this->need('footer.php'); ?>
</body>
</html>
