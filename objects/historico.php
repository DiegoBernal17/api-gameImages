<?php
class Historico {
  // database connection and table name
  private $conn;
  private $table_name = "historico_usuarios";

  // object properties
  public $id;
  public $P1;
  public $P1_intentos;
  public $P2;
  public $P2_intentos;
  public $P3;
  public $P3_intentos;
  public $P4;
  public $P4_intentos;
  public $P5;
  public $P5_intentos;
  public $P6;
  public $P6_intentos;
  public $P7;
  public $P7_intentos;
  public $P8;
  public $P8_intentos;
  public $P9;
  public $P9_intentos;
  public $fecha_partida;

  // constructor with $db as database connection
  public function __construct($db){
    $this->conn = $db;
  }

    // read historico
  function read(){
  
    // select all query
    $query = "SELECT * FROM " . $this->table_name . " WHERE id_partida = ? LIMIT 0,1";

    // prepare query statement
    $stmt = $this->conn->prepare($query);

    // bind id of product to be updated
    $stmt->bindParam(1, $this->id);
 
    // execute query
    $stmt->execute();
 
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
    // set values to object properties
    $this->P1 = $row['P1'];
    $this->P1_audio = $row['P1_audio'];
    $this->P1_intentos = $row['P1_intentos'];
    $this->P2 = $row['P2'];
    $this->P2_audio = $row['P2_audio'];
    $this->P2_intentos = $row['P2_intentos'];
    $this->P3 = $row['P3'];
    $this->P3_audio = $row['P3_audio'];
    $this->P3_intentos = $row['P3_intentos'];
    $this->P4 = $row['P4'];
    $this->P4_audio = $row['P4_audio'];
    $this->P4_intentos = $row['P4_intentos'];
    $this->P5 = $row['P5'];
    $this->P5_audio = $row['P5_audio'];
    $this->P5_intentos = $row['P5_intentos'];
    $this->P6 = $row['P6'];
    $this->P6_audio = $row['P6_audio'];
    $this->P6_intentos = $row['P6_intentos'];
    $this->P7 = $row['P7'];
    $this->P7_audio = $row['P7_audio'];
    $this->P7_intentos = $row['P7_intentos'];
    $this->P8 = $row['P8'];
    $this->P8_audio = $row['P8_audio'];
    $this->P8_intentos = $row['P8_intentos'];
    $this->P9 = $row['P9'];
    $this->P9_audio = $row['P9_audio'];
    $this->P9_intentos = $row['P9_intentos'];
    $this->fecha_partida = $row['fecha_partida'];
  }

    // create product
  function create(){
  
    // query to insert record
    $query = "INSERT INTO " . $this->table_name . "
            SET
              P1=:P1, P1_audio=:P1_audio, P1_intentos=:P1_intentos,
              P2=:P2, P2_audio=:P2_audio, P2_intentos=:P2_intentos,
              P3=:P3, P3_audio=:P3_audio, P3_intentos=:P3_intentos,
              P4=:P4, P4_audio=:P4_audio, P4_intentos=:P4_intentos,
              P5=:P5, P5_audio=:P5_audio, P5_intentos=:P5_intentos,
              P6=:P6, P6_audio=:P6_audio, P6_intentos=:P6_intentos,
              P7=:P7, P7_audio=:P7_audio, P7_intentos=:P7_intentos,
              P8=:P8, P8_audio=:P8_audio, P8_intentos=:P8_intentos,
              P9=:P9, P9_audio=:P9_audio, P9_intentos=:P9_intentos,
              fecha_partida=:fecha_partida";

    // prepare query
    $stmt = $this->conn->prepare($query);

    // sanitize
    $this->P1=htmlspecialchars(strip_tags($this->P1));
    $this->P1_intentos=htmlspecialchars(strip_tags($this->P1_intentos));
    $this->P2=htmlspecialchars(strip_tags($this->P2));
    $this->P2_intentos=htmlspecialchars(strip_tags($this->P2_intentos));
    $this->P3=htmlspecialchars(strip_tags($this->P3));
    $this->P3_intentos=htmlspecialchars(strip_tags($this->P3_intentos));
    $this->P4=htmlspecialchars(strip_tags($this->P4));
    $this->P4_intentos=htmlspecialchars(strip_tags($this->P4_intentos));
    $this->P5=htmlspecialchars(strip_tags($this->P5));
    $this->P5_intentos=htmlspecialchars(strip_tags($this->P5_intentos));
    $this->P6=htmlspecialchars(strip_tags($this->P6));
    $this->P6_intentos=htmlspecialchars(strip_tags($this->P6_intentos));
    $this->P7=htmlspecialchars(strip_tags($this->P7));
    $this->P7_intentos=htmlspecialchars(strip_tags($this->P7_intentos));
    $this->P8=htmlspecialchars(strip_tags($this->P8));
    $this->P8_intentos=htmlspecialchars(strip_tags($this->P8_intentos));
    $this->P9=htmlspecialchars(strip_tags($this->P9));
    $this->P9_intentos=htmlspecialchars(strip_tags($this->P9_intentos));
    $this->fecha_partida=htmlspecialchars(strip_tags($this->fecha_partida));

    // bind values
    $stmt->bindParam(":P1", $this->P1);
    $stmt->bindParam(":P1_audio", $this->P1_audio);
    $stmt->bindParam(":P1_intentos", $this->P1_intentos);
    $stmt->bindParam(":P2", $this->P2);
    $stmt->bindParam(":P2_audio", $this->P2_audio);
    $stmt->bindParam(":P2_intentos", $this->P2_intentos);
    $stmt->bindParam(":P3", $this->P3);
    $stmt->bindParam(":P3_audio", $this->P3_audio);
    $stmt->bindParam(":P3_intentos", $this->P3_intentos);
    $stmt->bindParam(":P4", $this->P4);
    $stmt->bindParam(":P4_audio", $this->P4_audio);
    $stmt->bindParam(":P4_intentos", $this->P4_intentos);
    $stmt->bindParam(":P5", $this->P5);
    $stmt->bindParam(":P5_audio", $this->P5_audio);
    $stmt->bindParam(":P5_intentos", $this->P5_intentos);
    $stmt->bindParam(":P6", $this->P6);
    $stmt->bindParam(":P6_audio", $this->P6_audio);
    $stmt->bindParam(":P6_intentos", $this->P6_intentos);
    $stmt->bindParam(":P7", $this->P7);
    $stmt->bindParam(":P7_audio", $this->P7_audio);
    $stmt->bindParam(":P7_intentos", $this->P7_intentos);
    $stmt->bindParam(":P8", $this->P8);
    $stmt->bindParam(":P8_audio", $this->P8_audio);
    $stmt->bindParam(":P8_intentos", $this->P8_intentos);
    $stmt->bindParam(":P9", $this->P9);
    $stmt->bindParam(":P9_audio", $this->P9_audio);
    $stmt->bindParam(":P9_intentos", $this->P9_intentos);
    $stmt->bindParam(":fecha_partida", $this->fecha_partida);

    // execute query
    if($stmt->execute()){
        return true;
    }

    return false;
  }
}
?>