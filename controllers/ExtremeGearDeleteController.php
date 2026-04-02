<?php

class ExtremeGearDeleteController extends BaseController {
    public function post(array $context)
    {
        $id = $_POST['id'];

        $sql =<<<EOL
DELETE FROM extreme_gears WHERE id = :id
EOL; 
        

        $query = $this->pdo->prepare($sql);
        $query->bindValue(":id", $id);
        $query->execute();

        header("Location: /");
        exit;
    }
}