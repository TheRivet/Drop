<?php
    class Home extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }
        //aqui hace referencia a la vista home, que muestra el mensaje de binvenida 
        public function home($parems){
            //pagina principal
            $this->views->getView($this,"home");
        }
        
        public function insertar(){
            $data = $this->model->setUser("Bryatn",2);
            print_r($data);
        }
    }
?>