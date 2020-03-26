<?php
    function trigof(){
        $res = 0;
        if($_POST['unit']="°"){
            $rad = ($_POST['val']/180)*M_PI;
            switch($_POST['fun']){
                case 'sin':
                    $res=sin($rad);
                    break;
                case 'cos':
                    $res=cos($rad);
                    break;
                case 'tan':
                    $res=tan($rad);
                    break;
                }
        }
        else{
            switch($_POST['fun']){
                case 'sin':
                    $res=sin($_POST['val']);
                    break;
                case 'cos':
                    $res=cos($_POST['val']);
                    break;
                case 'tan':
                    $res=tan($_POST['val']);
                    break;
            }
        }
        echo $_POST['fun'].$_POST['val'].$_POST['unit']."=".$res;

    }
?>
<DOCTYPE html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>


<?php
trigof();
?>

</body>
