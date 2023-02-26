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
        if(isset($_GET['layout_DV']))
        {
            switch ($_GET['layout_DV'])
            {
                case 'danhsach':
                    require_once 'dienvien/danhsach.php';
                    break;
                case 'them':
                    require_once 'dienvien/them.php';
                    break; 
                case 'sua':
                    require_once 'dienvien/sua.php';
                    break; 
                case 'xoa':
                    require_once 'dienvien/xoa.php';
                    break;     
                default:
                    require_once 'dienvien/danhsach.php';
                    break;    
            }
        }
        else
        {
            require_once 'dienvien/danhsach.php';
        }
    ?>
<?php
    require_once 'layout_ket.php';
?>