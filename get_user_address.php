<?php
        header('Content-Type: application/json');
        // echo'{
        //   "succes":true,
        //   "message":"tout est bon",
        //   "result":{
        //     "vols":["miami",chicago,"las vegas"]
        //   }
        // }';
    try {
      $db=new PDO('mysql:host=localhost;dbname=db_a38e91_kwen','root','');
    } catch (PDOException $e) {
      die('Erreur:'.$e->getMessage());
    }
    $req=$db->query('select Id_adr,Departement,Commune,Adresse,Email from tbladresse');
    $resultat=[];
    while($row=$req->fetch(PDO::FETCH_OBJ)){
        $resultat[]=[
          'id'=>$row->Id_adr,
          'departement'=>$row->Departement,
          'commune'=>$row->Commune,
          'adresse'=>$row->Adresse,
          'email'=>$row->Email
        ];
    }
    $req->closeCursor();
    echo json_encode($resultat);
  //  echo json_encode('cool');

?>
