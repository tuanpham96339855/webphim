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
        if(isset($_GET['layout_PL']))
        {
            switch ($_GET['layout_PL'])
            {
                case 'danhsach':
                    require_once 'phimle/danhsach.php';
                    break;
                case 'them':
                    require_once 'phimle/them.php';
                    break; 
                case 'sua':
                    require_once 'phimle/sua.php';
                    break; 
                case 'xoa':
                    require_once 'phimle/xoa.php';
                    break;     
                default:
                    require_once 'phimle/danhsach.php';
                    break;    
            }
        }
        else
        {
            require_once 'phimle/danhsach.php';
        }
    ?>
<?php
    require_once 'layout_ket.php';
?>