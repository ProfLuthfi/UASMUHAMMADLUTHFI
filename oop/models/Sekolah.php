<?php
class Sekolah
{
    // Connection
    private $conn;
    // Table
    private $db_table = "tb_sekolah";
    // Columns
    public $id_user;
    public $id_sekolah;
    public $sekolah;
    public $tahun;
    public $jurusan;
    // Db connection
    public function __construct($db)
    {
        $this->conn = $db;
    }
    //read
    public function getUser()
    {
        $sqlQuery = "SELECT * FROM " . $this->db_table . "";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }
    public function getUserId()
    {
        $sqlQuery = "SELECT
        id_user,
        id_sekolah,
        sekolah,
        tahun,
        jurusan
        FROM
        " . $this->db_table . "
        WHERE
        id_user = ? ";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->bindParam(1, $this->id_user);
        $stmt->execute();
        $dataRow = $stmt->fetchAll(PDO::FETCH_ASSOC);
        var_dump($dataRow);
        die;
        return $dataRow;
    }
    public function getsekolahId()
    {
        $sqlQuery = "SELECT
        id_user,
        id_sekolah,
        sekolah,
        tahun,
        jurusan
        FROM
        " . $this->db_table . "
        WHERE
        id_user = :id_user ";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->bindParam(":id_user", $this->id_user);
        $stmt->execute();
        $dataRow = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $dataRow;
    }
    //CREATE
    public function createSekolah()
    {
        $sqlQuery = "INSERT INTO
        " . $this->db_table . "
        SET
        id_user = :id_user,
        sekolah = :sekolah,
        tahun = :tahun,
        jurusan = :jurusan";
        $stmt = $this->conn->prepare($sqlQuery);
        // sanitize
        $this->id_user = htmlspecialchars(strip_tags($this->id_user));
        $this->sekolah = htmlspecialchars(strip_tags($this->sekolah));
        $this->tahun = htmlspecialchars(strip_tags($this->tahun));
        $this->jurusan = htmlspecialchars(strip_tags($this->jurusan));
        // bind data
        $stmt->bindParam(":id_user", $this->id_user);
        $stmt->bindParam(":sekolah", $this->sekolah);
        $stmt->bindParam(":tahun", $this->tahun);
        $stmt->bindParam(":jurusan", $this->jurusan);
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
    //UPDATE
    public function updateSekolah()
    {
        $sqlQuery = "UPDATE
        " . $this->db_table . "
        SET
        id_user = :id_user,
        sekolah = :sekolah,
        tahun = :tahun,
        jurusan = :jurusan,
        WHERE
        id_sekolah = :id_sekolah";
        $stmt = $this->conn->prepare($sqlQuery);
        $this->id_sekolah = htmlspecialchars(strip_tags($this->id_sekolah));
        $this->sekolah = htmlspecialchars(strip_tags($this->sekolah));
        $this->tahun = htmlspecialchars(strip_tags($this->tahun));
        $this->jurusan = htmlspecialchars(strip_tags($this->jurusan));
        $this->id_user = htmlspecialchars(strip_tags($this->id_user));
        // bind data
        $stmt->bindParam(":id_sekolah", $this->id_sekolah);
        $stmt->bindParam(":sekolah", $this->sekolah);
        $stmt->bindParam(":tahun", $this->tahun);
        $stmt->bindParam(":jurusan", $this->jurusan);
        $stmt->bindParam(":id_user", $this->id_user);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
    //DELETE
    function deletesekolah()
    {
        $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id_sekolah = ?";
        $stmt = $this->conn->prepare($sqlQuery);
        $this->id_sekolah = htmlspecialchars(strip_tags($this->id_sekolah));
        $stmt->bindParam(1, $this->id_sekolah);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
