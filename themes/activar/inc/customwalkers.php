<?php 

class Custom_walker extends Walker_Nav_Menu {

    function start_lvl(&$output, $depth = 0, $args = NULL, $id = null){
        
        $output .= "<div>";
    }

    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0) {
        $object = $item->object;
        $type = $item->type;
        $title = $item->title;
        $title = "fa-" . $item->title;
    	$description = $item->description;
    	$permalink = $item->url;
        $output .='<a href="' . $permalink . '"><i class="fab '. esc_attr(strtolower($title)) . '">';
        
    }
    public function end_el(  &$output, $item, $depth = 0, $args = null) {
        $output .= '</a></i>';
    }
    function end_lvl( &$output, $depth = 0, $args = NULL) {
        
        $output .= "{n}</div>";
    }

}

