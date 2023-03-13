<?php
header("Content-Type:application/json");
include("config.php");

if (!empty($_POST)) {

    $list = json_decode($_POST['list']);
    $updateCount = 0;
    $updatedQuery = "";

    foreach ($list as $p) {

        $str = explode("-", $_POST['rack']);

        $scan = $p->scan;
        $loc = $str[0];
        $zone = $str[1];
        $area = $str[2];
        $rack = $str[3];
        $bin = $str[4];
        $scan_datetime = $p->updated_at;
        $idstokcount = $p->idstokcount;

        $updatedQuery = "UPDATE stokcount set scan='$scan', loc='$loc', zone='$zone', area='$area', rack='$rack', bin='$bin', scan_datetime='$scan_datetime' WHERE idstokcount='$idstokcount' ";

        $update = mysqli_query($connect, $updatedQuery);

        $updateCount += $update;
        // $updatedQuery += $updateString;
    }

    if ($updateCount == count($list)) {
        $response = [
            "message" => "Succes Updated Stock",
            "success" => true,
            "code"    => 200,
            "data"  => [],
        ];
    } else {
        $response = [
            "message" => "Failed Updated Stock, Try Again!",
            "success" => true,
            "code"    => 200,
            "data"  => [],
        ];
    }


  echo json_encode($response);

} else {
    $query = "select * FROM stokcount";
    $result = mysqli_query($connect,$query);

    while($row = mysqli_fetch_array($result)){
        $data[] = array(
            "idstokcount" => $row["idstokcount"],
            "item_code" => $row["item_code"],
            "sn" => $row["sn"],
            "sn2" => $row["sn2"],
            "loc" => $row["loc"],
            "zone" => $row["zone"],
            "area" => $row["area"],
            "rack" => $row["rack"],
            "bin" => $row["bin"],
        );
    }

      $response = [
          "message" => "List Stock Count",
          "success" => true,
          "code"    => 200,
          "data"  => $data,
      ];

    echo json_encode($response);
}
// if (isset($_GET['data']) && $_GET['data']!="") {
    

//     $query = "select * FROM stokcount";
//     $result = mysqli_query($connect,$query);

//     while($row = mysqli_fetch_array($result)){
//         $data[] = array(
//             "idstokcount" => $row["idstokcount"],
//             "item_code" => $row["item_code"],
//             "sn" => $row["sn"],
//             "sn2" => $row["sn2"],
//         );
//     }

//     if($_GET['data'] == "PUSH"){
//       $response = [
//           "message" => "List Stock Count",
//           "success" => true,
//           "code"    => 200,
//           "data"  => $data,
//       ];

//       echo json_encode($response);
//     }


// }


?>
