<?php

   $branch = "BRANCHPLACEHOLDER";
   $branch = strtolower($branch);
   $dat = explode("/",$branch);
   if (count($dat) > 1){
        if ($dat[0] == "release"){
            echo str_replace("/","",str_replace(".","",$branch));
            return 0;
            die();
        } else {
            $data = explode("-",$dat[1]);
            if ($data[0] == "pd") {
                echo $data[0].$data[1];
                return 0;
                die();
            }
        }
    }
    echo str_replace("-","",str_replace("/","",str_replace(".","",$branch)));
    return 0;
