<?php
    
    class Pages extends Controller {
        public function __construct() {
            // echo "Pages Loaded <br>";
            
        }

        public function index() {
            $data = [
                'title' => 'ChakMVC'
            ];

            $this->views('pages/index', $data);
        }

        public function about() {
            $this->views('pages/about', ['title' => 'About us']);
        }
    }
?>