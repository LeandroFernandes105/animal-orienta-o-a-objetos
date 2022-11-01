<?php 


 interface cachorro {
    

  public function raca();
  public function setRaca($raca);
  public function getRaca();


 

              }



   class Ccachorro implements cachorro{
  
      public function raca() {
          
       }
       public function setRaca($raca){
        $this->raca=$raca;
        }
    
    
       public function getRaca(){
           return $this->raca;
            }
      

            public function mostrarDados(){
              echo 'Raça'.$this->getRaca();
           }
          }


          $cachorroA = new Ccachorro();
           $cachorroA->setRaca(" Akita");

          

           $cachorroA->mostrarDados();






























//  class Cachorro extends lupus{
//     private $raca;
   

//     public function setRaca($raca){
//     $this->raca=$raca;
//     }


//     public function getRaca(){
//         return $this->raca;
//         }




        


//   public function latir(){
//     echo "<br>AuAu!";
//   }
//   public function Deitar(){
//     echo "<br>Ele deitou!";
//   }

//   public function mostrarDados(){
//  echo 'Alimentação: '.$this->getAlimentacao() .'<br>Raça: '.$this->getRaca() . '<br>Cor:'. $this->getCor().'<br>Peso:' . $this->getPeso(). '<br>Sexo: '.$this->getSexo(). '<br>Respirar: '  ;
// }
// }

// $cachorroA = new Cachorro();
// $cachorroB = new Cachorro();
// echo "<br>Cachorro A:";

// echo "<br>";

// $cachorroA-> Idade(" ele tem 2 anos");
// echo "<br>";
// $cachorroA->mostrarDados();

// $cachorroA->SetAlimentacao("Carnivoro");
// $cachorroA->setRaca("Shih tzu");
// $cachorroA->setCor("Branco");
// $cachorroA->setPeso(4);
// $cachorroA->setSexo("masculino");
// $cachorroA->Deitar();

// echo "<br>Cachorro B:";
// echo "<br>";
// $cachorroB-> Idade(" ele tem 3 anos");
// echo "<br>";
// $cachorroB->SetAlimentacao("Carnivoro");
// $cachorroB->setRaca("Pastor alemão");
// $cachorroB->setCor("Marrom");
// $cachorroB->setPeso(15);
// $cachorroA->setSexo("masculino");




// $cachorroB->mostrarDados();
// $cachorroB->latir();




