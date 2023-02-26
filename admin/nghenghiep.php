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
        if(isset($_GET['layout_NN']))
        {
            switch ($_GET['layout_NN'])
            {
                case 'danhsach':
                    require_once 'nghenghiep/danhsach.php';
                    break;
                case 'them':
                    require_once 'nghenghiep/them.php';
                    break; 
                case 'sua':
                    require_once 'nghenghiep/sua.php';
                    break; 
                case 'xoa':
                    require_once 'nghenghiep/xoa.php';
                    break;     
                default:
                    require_once 'nghenghiep/danhsach.php';
                    break;    
            }
        }
        else
        {
            require_once 'nghenghiep/danhsach.php';
        }
    ?>
<?php
    require_once 'layout_ket.php';
?>