<?php

if(!function_exists('paginationHelper')){
    function paginationHelper($baseUrl,$totRows,$perPage,$uri_segment,$usePageNumber=false,$attributes=[],$reuse_query_string=false){
        $ci=& get_instance();
        $config=[
          'base_url'=>$baseUrl,
            'total_rows'=>$totRows,
            'per_page'=>$perPage,
            'uri_segment'=>$uri_segment,
            'use_page_numbers'=>$usePageNumber,
            'reuse_query_string'=>$reuse_query_string,
            /*template*/
            'first_link'=>'<< İlk',
            'last_link'=>'<< Son',
            'attributes'=>$attributes,
            'full_tag_open'=>"<ul class='pagination'>",
            'full_tag_close'=>"</ul>",
            'num_tag_open'=>"<li class='page-item'>",
            'num_tag_close'=>"</li>",
            'cur_tag_open'=>"<li class='page-item active'><a class='page-link' href='#'>",
            'cur_tag_close'=>"</a></li>",
            'next_tag_open'=>"<li class='page-item'>",
            'next_tag_close'=>"</li>",
            'prev_tag_open'=>"<li class='page-item'>",
            'prev_tag_close'=>"</li>",
            'first_tag_open'=>"<li class='page-item'>",
            'first_tag_close'=>"</li>",
            'last_tag_open'=>"<li class='page-item'>",
            'last_tag_close'=>"</li>"
        ];
        $ci->pagination->initialize($config);
        return $ci->pagination->create_links();
    }
}

if(!function_exists('clearFilter')){
    function clearFilter($array){
        $clear=array_filter($array,function ($value){return $value!=='';});
        return array_filter($clear,function ($value){return $value!==null;});
    }
}

if(!function_exists('__printrDie')){
    function __printrDie($data){
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        die();
    }
}

if(!function_exists('__printr')){
    function __printr($data){
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}