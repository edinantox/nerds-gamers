<?php
class Main{
    static function title(){
    echo "Nerds & Gamers";

    }
    static function menu(){
        require_once "./classes/conexao.class.php";
        $qr=Conexao::query("select * from menus");

        while($res=mysqli_fetch_array($qr)){
        echo '<li><a href="'.$res['link'].'">'.$res['desc_menu'].'</a></li>';
        }

    }

    static function categorias(){
        require_once "./classes/conexao.class.php";
        $qr=Conexao::query("select * from categorias");

        while($res=mysqli_fetch_array($qr)){
        echo '<li><a href="'.$res['id_cat'].'">'.$res['desc_cat'].'</a>';
        $qr2=Conexao::query("select * from subcategorias where id_cat=".$res['id_cat']);

        if($qr->num_rows>0){
            echo '<ul>';
                while($res2=mysqli_fetch_array($qr2)){
                    echo '<li><a href="'.$res2['id_subcat'].'">'.$res2['desc_subcat'].'</a>';
                }
            echo '</ul>';

        }

        echo'</li>';
        }

    }

}
?>
