<?php 





interface animal {
    


    public function getAlimentacao();
    public function setAlimentacao($alimentacao);
    
}



     class Canimal implements animal{
        
       

        public function setAlimentacao($alimentacao){
                $this->alimentacao=$alimentacao;
                }
            
            
                public function getAlimentacao(){
                    return $this->alimentacao;
                     }

                     public function mostrarDados(){
                        echo 'Alimentação: '.$this->getAlimentacao();
                     }
                    }


                    $animalA = new Canimal();
                     $animalA->setAlimentacao("carnivoro");

                    

                     $animalA->mostrarDados();

     
        


     
          







