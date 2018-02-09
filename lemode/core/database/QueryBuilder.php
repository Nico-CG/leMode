<?php

class QueryBuilder {

  protected $pdo;

  public function __construct($pdo){
    $this->pdo = $pdo;
  }

  public function selectAll($table){
    $statement = $this->pdo->prepare("select * from {$table}");

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS);

  }

  public function insert($table, $parameters){

    $sql = sprintf(

      'insert into %s (%s) values (%s)',
      $table,

      implode(',', array_keys($parameters)),

      ':' . implode(', :', array_keys($parameters))

    );

    try{

      $statement = $this->pdo->prepare($sql);

      $statement->execute($parameters);
      } catch (Exception $e) {
        die('error');
      }

  }

  public function delete($id){

    $sql = "DELETE FROM menu_items WHERE id =  :filmID";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindParam(':filmID', $id, PDO::PARAM_INT);
    $stmt->execute();

    // $sql = sprintf(
    //
    //   "delete from (%s) where id=(%s)",
    //
    //   'menu_items',
    //
    //   $id
    //
    // );
    //
    // try{
    //
    //   $statement = $this->pdo->prepare($sql);
    //
    //   $statement->execute($parameters);
    //   } catch (Exception $e) {
    //     die('error');
    //   }

  }

}

 ?>
