<div class="site-wrap">
    <div class="flex-left-gallery">
        <div class="left-side">
            <div class="inside">       
                <div id="content" class="content">
                    <div class="post_body_gallery">
                            <?php
                                $fullcontent = $this->content;
                                $reg = '/(http:|https:)(.*?)(.jpg|.png|.gif|.jpeg)/i';
                                $matches = array();
                                preg_match_all($reg, $fullcontent, $matches);
                                $countPostImg = count($matches[0]);
                                for ($k=0; $k < $countPostImg; $k++) { 
                                    echo '<div class="gallery_item main2"><div class="gallery_item_act"><div class="innerGallery"><a data-fancybox="gallery" href="'.$matches[0][$k].'"><img data-original="'.$matches[0][$k].'" class="lazyload" src="https://res.sunxyu.cn/images/loading.gif"></a></div></div></div>';
                                }   
                            ?>
                    </div>
                </div>
                <div style="margin-bottom: 20px;">
                    <p class="post_meta">
                        <span class="head_meta noneformo">Title&nbsp;:&nbsp;<?php $this->title() ?></span>
                        <span class="head_meta noneformo">Category&nbsp;:&nbsp;<?php $this->category(',', false); ?></span>
                        <span class="head_meta">Views&nbsp;:&nbsp;<?php get_post_view($this) ?></span>
                        <span>Posted on&nbsp;:&nbsp;<time style="font-size: 12px;" datetime="<?php $this->date('Y-m-d'); ?>"><?php $this->date(); ?></time></span>
                    </p>
                </div>
                <div class="gallery_comment">
                    <div class="post_comments">
                        <div class="comments_body">
                            <?php $this->need('comments.php'); ?>
                        </div>   
                    </div>
                </div>    
            </div>
        </div>
    </div>








