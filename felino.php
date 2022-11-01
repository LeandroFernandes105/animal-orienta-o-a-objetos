<?php 




interface felinos {
    

    
    public function setCor($cor);
    public function getCor();

    public function setPeso($peso);
    public function getPeso();

 

    
   

                }



     class Cfelinos implements felinos{
    
     
      public function setCor($cor){
       $this->cor=$cor;
       }
   
   
      public function getCor(){
          return $this->cor;
           }
     
      
      public function setPeso($peso){
            $this->peso=$peso;
            }
        
        
           public function getPeso(){
               return $this->peso;
                }     

           public function mostrarDados(){
             echo 'Cor'.$this->getCor().'<br>Peso '.$this->getPeso(). " kg(s)";
          }
     }

     $FelinoA = new Cfelinos();
     $FelinoA->setCor(" Marrom");
    
     $FelinoA->setPeso(2);

    

     $FelinoA->mostrarDados();



























// class Felino{
//     private $cor;
//     private $peso;

//     public function setCor($cor){
//     $this->cor=$cor;
//     }


//     public function getCor(){
//         return $this->cor;
//         }


//      public function setPeso($peso){
//         $this->peso=$peso;
//             }
        
        
//      public function getPeso(){
//         return $this->peso;
//                 }

//                 public function mostrarDados(){
//                   echo '<br>Cor:'. $this->getCor().'<br>Peso:' . $this->getPeso();
//                    }
// }


// $felinoA = new felino();
// $felinoB = new felino();


// $felinoA->setCor("Branco");
// $felinoA->setPeso(180);

// $felinoB->setCor("Marrom");
// $felinoB->setPeso(190);

// echo "<br>felino A:";
// $felinoA->mostrarDados();


// echo "<br>felino B:";
// $felinoB->mostrarDados();