<!DOCTYPE html>
<html lang="zh-Hans">
<?php $this->need('header.php'); ?>
<body>
<main class="page-content" aria-label="Content">
    <div class="wrapper">
        <article class="post" lang="zh-Hans" itemscope itemtype="http://schema.org/BlogPosting" >
            <header class="post-header">
                <a class="site-title" href="/"><?php $this->options->title() ?></a>
                <h1 class="post-title" itemprop="name headline"><?php $this->title() ?></h1>
            </header>

            <div class="post-cover" aria-label="Cover">
                <div class="post-cover-wrapper">
                    <img src="<?php echo thumbnail($this->cid); ?>" />
                </div>
            </div>

            <div class="post-content" itemprop="articleBody">
                <?php $this->content(); ?>
            </div>

            <footer class="post-footer">
                <div class="post-meta">
<img src="<?php $this->options->themeUrl('images/appreciate.jpg'); ?>" width="440px" /><br />
                    <time>如果有帮到您,可以扫描打赏 Published At <?php $this->date('F j, Y'); ?></time>
                </div>
            </footer>
        </article>
    </div>
</main>

<?php $this->need('footer.php'); ?>
</body>
</html>
