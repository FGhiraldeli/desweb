<?php
/**
 * classe TParagraph
 * classe para exibicao de parágrafos
 */
class TParagraph extends TElement
{
   /**
    * método construtor
    * instancia objeto TParagraph
    */
   public function __construct($text)
   {
      parent::__construct('p');
      // atribui o conteúdo do texto
      parent::add($text);
   }
   
   /**
    * método setAlign()
    * define o alinhamento do texto
    * @param $align = alinhamento do texto
    */
   function setAlign($align)
   {
      $this->align = $align;
   }
}
?>
