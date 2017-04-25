<?php
/**
 * classe TImage
 * classe para exibicao de imagens
 */
class TImage extends TElement
{
   private $source;          // localizacao da imagem
   /**
    * método construtor
    * instancia objeto TImagem
    * @param $source = localizacao da imagem
    */
   public function __construct($source)
   {
      parent::__construct('img');
      // atribui a localizacao da imagem
      $this->src = $source;
      $this->border = 0;
   }
}
?>
