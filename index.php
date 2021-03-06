<?php
/**
 * 瀑布流布局的typecho主题practice01，这是我写的第一个typecho主题，纯属练习的作品，所以命名为practice01。主题功能请在使用中慢慢体会：）
 * 
 * @package practice01
 * @author 小宇
 * @version 20200515
 * @link https://kisxy.com
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
    $this->need('header.php');
?>
<?php if($this->is('index') && !empty($this->options->SimpleHomeOn) && in_array('simpleHome', $this->options->SimpleHomeOn)): ?>
<?php $this->need('simplehome.php'); ?>
<?php else: ?>
<div class="site-wrap">
    <div class="flex-left">
        <div class="left-side">
            <div class="inside">
                <div id="content" class="content">
                    <?php while($this->next()): ?>
                        <?php
                            $getCate = $this->category;
                            if ($getCate != 'gallery' && $getCate != 'timeline') {
                                include("post_common.php");
                            }
                        ?>
                    <?php endwhile; ?>
                </div>
                <div id="ajaxloadpost" style="padding: 0 10px;">
                    <?php $this->pageLink('下一页','next'); ?>
                </div>
                <div id="showtext"></div>
                </div>                
            </div>
        </div>
        <?php $this->need('sidebar.php'); ?>
        <?php $this->need('footer.php'); ?>
<?php endif; ?>