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

    static function menu_categorias(){
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

    static function banners(){
        require_once "./classes/conexao.class.php";
        $qr=Conexao::query("select * from banner");
        while($res=mysqli_fetch_array($qr)){
            echo '<a href="'.$res['link'].'"><img src="./images/banners/'.$res['img'].'" title="'.$res['texto'].'" /></a>';

        }
    }

    static function novidades(){
        require_once "./classes/conexao.class.php";
        $qr=Conexao::query("select id_prod,desc_prod from produtos order by data desc limit 10 ");
        while($res=mysqli_fetch_array($qr)){
            echo '<a href="./produto.php?prod='.$res['id_prod'].'"><img src="./images/produtos/';
                $qr2=Conexao::query("select * from produtos_img where id_prod=".$res['id_prod'].' limit 1');
                while($res2=mysqli_fetch_array($qr2)){
                    echo $res2['img'];
                }
            echo '.jpg" title="'.$res['desc_prod'].'" /><p>'.$res['desc_prod'].'</p></a>';

        }

    }

    static function listar_categorias(){
        require_once "./classes/conexao.class.php";
        $qr=Conexao::query("select * from categorias order by desc_cat asc");

        while($res=mysqli_fetch_array($qr)){
        echo '<li><a href="?cat='.$res['id_cat'].'">'.$res['desc_cat'].'</a></li>';
        }

    }

    static function todas_categorias(){
        require_once "./classes/conexao.class.php";
        $qr=Conexao::query("select * from produtos order by data desc,id_cat,id_subcat,qtd,desc_prod limit 12");
        $i=0;
            echo '<div class="section group">';
        while($res=mysqli_fetch_array($qr)){


            if($i==4){
                echo '</div><div class="section group">';
                $i=0;

            }
            echo '
                <div class="grid_1_of_4 images_1_of_4">
					<h4><a href="./produto.php?prod='.$res['id_prod'].'">'.$res['desc_prod'].'</a></h4>
					 <a href="./produto.php?prod='.$res['id_prod'].'"><img src="./images/produtos/';

                $qr2=Conexao::query("select * from produtos_img where id_prod=".$res['id_prod'].' limit 1');
                while($res2=mysqli_fetch_array($qr2)){
                    echo $res2['img'];
                }

                echo '.jpg" alt="" /></a>
					<div class="price-details">
				        <div class="price-number">
							<p><span class="rupees">R$'.$res['preco'].' </span></p>
				        </div>
				        <div class="add-cart">
							<h4><a href="./produto.php?prod='.$res['id_prod'].'">Ver</a></h4>
						</div>
						<div class="clear">
                        </div>
					</div>

                </div>
            ';

             $i++;

        }
            echo '</div>';

    }

    static function artigos(){
        require_once "./classes/conexao.class.php";
        $qr=Conexao::query("select * from artigos order by data limit 5");

        while($res=mysqli_fetch_array($qr)){
        echo'
                    <li>
			      <div class="article">
			      	<p><span>'.$res['titulo'].'</span></p>
			      	<p>'.substr($res['texto'],0,250).'...</p>
			      	<p><a href="./artigo.php?art='.$res['id_art'].'">Ler Artigo</a></p>
			      </div>
			      </li>
        ';
        }
    }
}
?>
