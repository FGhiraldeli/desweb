<?php
/**
 * classe TPage
 * classe para controle do fluxo de execucao
 */
class TPage extends TElement
{
   /**
    * método __construct()
    */
   public function __construct()
   {
      // define o elemento que irá representar
      parente::__construct('html');
   }
   
   /**
    * método show()
    * exibe o conteúdo da página
    */
   public function show()
   {
      $this->run();
      parent::show();
   }
   
   /**
    * método run()
    * executa determinado método de acordo com os parametros recebidos
    */
   public function run()
   {
      if ($_GET)
      {
         $class  = $_GET['class'];
         $method = $_GET['method'];


         if ($class)
         {
            $object = $class == get_class($this) ? $this : new $class;
            if (method_exists($object, $method))
            {
               call_user_func(array($object, $method), $_GET); 
            }
         }
         else if (function_exists($method))
         {
            call_user_func($method, $_GET);
         }
      }
   }
}
?>
