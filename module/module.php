<?php
    session_start();
    function getData($sql){
        include('connect.php');
        $query = mysqli_query($conn, $sql);
    
        if(mysqli_num_rows($query) > 0){
            $arr = array();
            while($row = mysqli_fetch_array($query)){
                $arr[] = $row;
            }
            return $arr;
        }else{
            return 0;
        }
    }

    function setData($sql) {
        include('connect.php');
        $query = mysqli_query($conn, $sql);
        if($query) {
            return $query;
        } else {
            return 'error';
        }
    }

    function showAlert($text, $url) {
        echo "<script>
            alert('$text');
            location.href = '$url';
        </script>";
    }
?>