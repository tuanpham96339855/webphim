<?php
    session_start();
    if(!isset($_SESSION['TaiKhoan']))
    {
        header('location: login.php');
    }
    require_once 'db.php';
    require_once 'layout_mo.php';
?>

    <?php
        if(isset($_GET['layout_QG']))
        {
            switch ($_GET['layout_QG'])
            {
                case 'danhsach':
                    require_once 'quocgia/danhsach.php';
                    break;
                case 'them':
                    require_once 'quocgia/them.php';
                    break; 
                case 'sua':
                    require_once 'quocgia/sua.php';
                    break; 
                case 'xoa':
                    require_once 'quocgia/xoa.php';
                    break;     
                default:
                    require_once 'quocgia/danhsach.php';
                    break;    
            }
        }
        else
        {
            require_once 'quocgia/danhsach.php';
        }
    ?>
<?php
    require_once 'layout_ket.php';
?>