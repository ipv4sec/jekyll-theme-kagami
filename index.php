<?php
/**
 * 这是 kagami-the-jekyll-theme 主题个人修改版
 *
 * @package Kagami Theme
 * @author 小铁匠
 * @version 1.0.0
 * @link https://flippedd.com
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>

<!DOCTYPE html>
<html lang="zh-Hans">
<?php $this->need('header.php'); ?>
<body>
<main class="page-content" aria-label="Content">
    <div class="wrapper">
        <header class="post-header">
            <a class="site-title" href="/"><?php $this->options->title() ?></a>
            <h1 class="post-title " itemprop="name headline">Articles</h1>
        </header>

        <div class="post-cover" aria-label="Cover">
            <div class="post-cover-wrapper">
                <img src="<?php $this->options->themeUrl('images/index.jpg'); ?>">
            </div>
        </div>

        <div>
            <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($relatedPosts); ?>
            <ul class="post-list">
                <?php while ($relatedPosts->next()): ?>
                    <li class="post-list-item">
                        <div class="post-item-cover"></div>
                        <div class="post-item-label">
                            <a class="post-item-link" href="<?php $relatedPosts->permalink(); ?>" title="<?php $relatedPosts->title(); ?>"><?php $relatedPosts->title(); ?></a>
                            <div class="post-item-meta"><?php $relatedPosts->date('F j, Y'); ?></div></li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</main>
<?php $this->need('footer.php'); ?>
</body>
</html>
