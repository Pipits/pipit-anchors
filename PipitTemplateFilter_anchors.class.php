<?php
class PipitTemplateFilter_anchors extends PerchTemplateFilter {
    public $returns_markup = true;

    public function filterBeforeProcessing($value, $valueIsMarkup = false) {
        $value = preg_replace_callback('/(\<h[1-6](.*?))\>(.*)(<\/h[1-6]>)/i', function($matches) {
            $pre = $matches[1] . $matches[2]; // opening tag e.g. <h2>
            $content = $matches[3]; // heading content
            $post = $matches[4]; // closing tag e.g. </h2>

            $urlified_title = PerchUtil::urlify($content);
            $heading_markup =  $pre . ' id="' . $urlified_title . '">' .  $content . $post;

            return $heading_markup;
        }, $value );

        return $value;
    }
}


PerchSystem::register_template_filter('anchors', 'PipitTemplateFilter_anchors');