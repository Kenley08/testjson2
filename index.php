<?php
    // require_once 'post.class.php';
        // require_once 'post.class.php';
    // $post=new Post("mon super titre","Mon super contenu");
    // $post_s=serialize($post);
    // var_dump($post_s);

?>

<html>
<head>
  <title>Document</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <head>
  <body>

      <div class="container">
          <h1>Les adresses sauvegardees</h1>
        <table id="user_adr" class="table table-striped table-bordered">
            <tr>
              <th>ID</th>
                <th>DEPARTMENT</th>
                  <th>COMMUNE</th>
                    <th>ADRESSE</th>
                      <th>EMAIL</th>
            </tr>
        </table>
      </div>


      <?php
        //$tab=array('toto','momo');
        // $tab=array(array('nom'=>"Kenley",'email'=>"fleurinekenley@gmail.com"),
        //     array('nom'=>"David",'email'=>"david509y@gmail.com"));
      //  $tab=array('Nom'=>"Kenley");
    //    echo  $tab['Nom'];
      //  $ta_e=json_encode($tab);
      //  $ta_d=json_decode($ta_e,true);
      //  echo $ta_d['Nom'];
        //var_dump($ta_e);
      ?>
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
      <script>

        $.getJSON('get_user_address.php', function(data){
          var infos=[];
          $.each(data,function(key,adress){
            infos.push(
              '<tr>\
                <td>'+adress.id+'</td>\
                  <td>'+adress.departement+'</td>\
                    <td>'+adress.commune+'</td>\
                      <td>'+adress.adresse+'</td>\
                        <td>'+adress.email+'</td>\
              </tr>'
            );
          });
        //  console.log(infos);
       $("table#user_adr").append(infos.join(""));
        });
      </script>

  </body>

</html>
