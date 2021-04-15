<?php

/**
 *
 */
class product
{
  private $conn;
  private $table_name = "products";

  public $id;
  public $name;
  public $price;
  public $img;
  public $content;
  public $gost;
  public $description;





  public function __construct($db)
  {
    $this->conn = $db;
  }

  public function readAll()
  {
    $query = "SELECT
                prod_id,
                prod_name,
                prod_price,
                prod_img_link,
                prod_content,
                prod_url_alias,
                prod_gost,
                prod_description
              FROM " .$this->table_name . "
                WHERE
                  prod_vis != 0 LIMIT 3";

        
    $stmt = $this->conn->prepare($query);
    $stmt->execute();

    return $stmt;
  }

  public function readOne()
  {
    // code...
  }




}
