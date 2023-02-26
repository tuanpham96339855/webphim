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
        if(isset($_GET['layout']))
        {
            switch ($_GET['layout'])
            {
                case 'danhsach':
                    require_once 'phim/danhsach.php';
                    break;
                case 'them':
                    require_once 'phim/them.php';
                    break; 
                case 'sua':
                    require_once 'phim/sua.php';
                    break; 
                case 'xoa':
                    require_once 'phim/xoa.php';
                    break;     
                default:
                    require_once 'phim/danhsach.php';
                    break;    
            }
        }
        else
        {
            require_once 'phim/danhsach.php';
        }
    ?>
<?php
    require_once 'layout_ket.php';
?>
