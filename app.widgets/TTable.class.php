<?php
/**
 * classe TTable
 * responsável pela exibicao de tabelas
 */
class TTable extends TElement
{
   /**
    * método construtor
    * instancia uma nova tabela
    */
   public function __construct()
   {
      parent::__construc('table');
   }

   /**
    * método addRow
    * agrega um novo objeto linha (TTableRow)
    */
   public function addRow()
   {
      // instancia objeto linha
      $row = new TTableRow;
      // armazena no array de linhas
      parent::add($row);
      return $row;
   }
}
?>
