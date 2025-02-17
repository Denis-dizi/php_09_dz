<?php
    require_once("Model.php");
    class Controller {
        private $model;
        public function __construct(Model $newmodel) {
            $this->model = $newmodel;
        }
        //we will start the page by routing
        public function route() {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $this->postReq();
            }
            if($_SERVER['REQUEST_METHOD'] == 'GET') {
                $this->getReq();
            }
        }
        private function postReq() {
            //we process our post Requests here
        }
        private function getReq() {
            //we process our get Requests here
            $this->model->processData();
        }
    }