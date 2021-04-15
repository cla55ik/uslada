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
    $query = "SELECT
                prod_id,
                prod_name,
                prod_price,
                prod_img_link,
                prod_content,
                prod_url_alias,
                prod_gost,
                prod_description
              FROM " . $this->table_name . "
                WHERE
                  prod_id = ?";

    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1, $this->id);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->id = $row['prod_id'];
    $this->name = $row['prod_name'];
    $this->price = $row['prod_price'];
    $this->img = $row['prod_img_link'];
    $this->content = $row['prod_content'];
    $this->gost = $row['prod_gost'];
    $this->description = $row['prod_description'];
  }







}
