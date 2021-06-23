<?php
session_start();
require_once "../conexao.php";

if (isset($_POST['data'])) {
  
    parse_str($_POST['data'], $_POST);
    $num_tombo        = $_POST['patrimonio'];
    $name             = $_POST['item'];
    $tp_item          = $_POST['tp_item'];
    $marc_item        = $_POST['marc_item'];
    $situa_item       = $_POST['situa_item'];
    $date_aqui        = $_POST['date_aqui'];
    $num_serie        = $_POST['num_serie'];
    $preco_item       = $_POST['preco_item'];
    $data_lan         =  date("Y/m/d");
    $date_comp        = $_POST['date_comp'];
    $date_garan       = $_POST['date_garant'];
    $company          = $_SESSION['company'];
    $setor            = $_POST['setor'];
    $desc             = $_POST['desc'];
    $obs              = $_POST['obs'];

    
    
   $sql = "INSERT INTO tb_bens
    (num_patrimonio,
    name_item,
    tb_item,
    desc_item,
    marca_item,
    tb_situacao,
    date_aquisi,
    num_serie,
    value_item,
    date_lan,
    date_comp,
    date_garant,
    tb_company,
    tb_setor,
    obs)
    VALUES (
    '$num_tombo'
    ,'$name'
    ,'$tp_item'
    ,'$desc'
    ,'$marc_item'
    ,'$situa_item'
    ,'$date_aqui'
    ,'$num_serie'
    ,'$preco_item'
    ,'$data_lan'
    ,'$date_comp'
    ,'$date_garan'
    ,'$company'
    ,'$setor'
    ,'$obs')";
    
    
    if (mysqli_query($conn, $sql) === TRUE) {
        $msg = 1;
        echo json_encode($msg);
    } else {
        $msg= 0;
        echo json_encode($msg);
        // echo json_encode(mysqli_error($conn));
        
    }
} else {
    echo json_encode("Erro ao tentar cadastrar");
}
session_write_close();
//  foreach ($dados as $key => $value) {
//         $info[$key] = "'{$value}'";
//     }

//     $info2 = implode(",", $info);
//     var_dump($info2);
