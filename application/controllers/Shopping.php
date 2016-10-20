<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping extends Application {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/
     * 	- or -
     * 		http://example.com/welcome/index
     *
     * So any other public methods not prefixed with an underscore will
     * map to /welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function __construct() {
        parent::__construct();
    }

    public function index() {
        $stuff = file_get_contents('../data/receipt.md');
        $this->data['receipt'] = $this->parsedown->parse($stuff);
        $this->data['content'] = '';

        // pictorial menu
        $count = 1;
        foreach ($this->categories->all() as $category) {
            $chunk = 'category' . $count; 
            $this->data[$chunk] = $this->parser->parse('category_shop',$category,true);
            foreach($this->menu->all() as $menuitem) {
                    if ($menuitem->category != $category->id)
                    {
                        continue;
                    }
                    $this->data[$chunk] .= $this->parser->parse('menuitem_shop',$menuitem,true);
            }
            $count++;
        }
    }

}
