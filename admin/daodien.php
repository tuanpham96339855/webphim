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
        if(isset($_GET['layout_DD']))
        {
            switch ($_GET['layout_DD'])
            {
                case 'danhsach':
                    require_once 'daodien/danhsach.php';
                    break;
                case 'them':
                    require_once 'daodien/them.php';
                    break; 
                case 'sua':
                    require_once 'daodien/sua.php';
                    break; 
                case 'xoa':
                    require_once 'daodien/xoa.php';
                    break;     
                default:
                    require_once 'daodien/danhsach.php';
                    break;    
            }
        }
        else
        {
            require_once 'daodien/danhsach.php';
        }
    ?>
<?php
    require_once 'layout_ket.php';
?>