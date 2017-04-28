<?php
/**
 * classe TAction
 * encapsula uma acao
 */
class TAction
{
   private $action;
   private $param;


   /**
    * método __construct()
    * intancia uma nova acao
    * @param $action = método a ser executado
    */
   public function __construct($action)
   {
      $this->action = $action;
   }


   /**
    * método serParamere()
    * acrescenta um parametro ao método a ser executado
    * @param $param = nome do parametro
    * @param $param = valor co parametro
    */
   public function setParameter($param, $value)
   {
      $this->param[$param] = $value;
   }


   /**
    * método serialize()
    * transforma a acao em uma string do tipo URL
    */
   public function serialize()
   {
      // verifica se a acao é um método
      if (is_array($this->action))
      {
         // obtém o nome da classe
         $url['class'] = get_class($this->action[0]);
         // obtém o nome do método
         $url['method'] = $this->action[1]; 
      }
      else if (is_string($this->action)) // é uma string
      {
         // obtém o nome da funcao
         $url['method'] = $this->action;
      }


      // verifica se há parametros
      if ($this->param)
      {
         $url = array_merge($url, $this->param);
      }


      // monta a URL
      return '?' . http_build_query($url);
   }
}
?>
