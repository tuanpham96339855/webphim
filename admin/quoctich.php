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
        if(isset($_GET['layout_QT']))
        {
            switch ($_GET['layout_QT'])
            {
                case 'danhsach':
                    require_once 'quoctich/danhsach.php';
                    break;
                case 'them':
                    require_once 'quoctich/them.php';
                    break; 
                case 'sua':
                    require_once 'quoctich/sua.php';
                    break; 
                case 'xoa':
                    require_once 'quoctich/xoa.php';
                    break;     
                default:
                    require_once 'quoctich/danhsach.php';
                    break;    
            }
        }
        else
        {
            require_once 'quoctich/danhsach.php';
        }
    ?>
<?php
    require_once 'layout_ket.php';
?>