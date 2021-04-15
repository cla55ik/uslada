<?php



class ourTeam {
  private $conn;
  private $table_name = "our_team";

  //свойства объекта
  public $id;
  public $name;
  public $post;
  public $img_link;
  public $text;
  public $tel;


  public function __construct($db) {
        $this->conn = $db;
    }

  public function read(){
    $query = "SELECT name, post, img_link, text, tel FROM " . $this->table_name . " WHERE id = ? LIMIT 1";

    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1, $this->id);
    $stmt->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->name = $row['name'];
    $this->post = $row['post'];
    $this->text = $row['text'];
    $this->img_link = $row['img_link'];
    $this->tel = $row['tel'];

  }


  public function readAll()
  {
    $query = "SELECT t_name, t_img, t_post, t_text, t_tel FROM " . $this->table_name . " WHERE t_vis != 0";

    $stmt = $this->conn->prepare($query);
    $stmt->execute();

    return $stmt;

  }




}
