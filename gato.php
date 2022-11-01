<?php 




interface gato {
    

    
    public function setRaca($raca);
    public function getRaca();

   

 

    
   

                }



     class Cgato implements gato{
    
     
      public function setRaca($raca){
       $this->raca=$raca;
       }
   
   
      public function getRaca(){
          return $this->raca;
           }
     
      
     

           public function mostrarDados(){
             echo 'Raça:'.$this->getRaca();
          }
     }

     $GatoA = new Cgato();
     $GatoA->setRaca(" Ashera ");
    
   

    

     $GatoA->mostrarDados();