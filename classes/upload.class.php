<?php
class Upload{
    static function enviar(){
        $uploadname=$_GET['id'];
        preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $_FILES[$uploadname]['name'], $ext);
        $arq=md5( basename($_FILES[$uploadname]['name']).''.date('d/m/Y H:i:s')).'.'.$ext[1];


        if(self->redimensionar($_FILES[$uploadname],$_GET['path'],$arq,$_GET['larg'],$_GET['alt'],$_GET['th'])){
            if(strcmp('./images/banners/',$_GET['path'])==0){
                query("insert into imagens(img,nome) values('".trim($arq)."','".$_FILES[$uploadname]['name']."')");
            }else{
                if(strcmp('../imagens/social/',$_GET['path'])==0){
                    query("insert into links(img) values('".trim($arq)."')");
                }
            }

            echo "success $arq";
        }else{
            echo "error";
        }


    }


    function redimensionar($arq,$local,$nome,$largura,$altura,$th){

        if ($arq['type']=="image/jpeg"){
            $img = imagecreatefromjpeg($arq['tmp_name']);

        }else {
            if ($arq['type']=="image/gif"){
                $img = imagecreatefromgif($arq['tmp_name']);

            }else{
                if ($arq['type']=="image/png"){
                    $img = imagecreatefrompng($arq['tmp_name']);

                }else{
                    if ($arq['type']=="image/bmp"){
                        $img = ImageCreateFromBMP($arq['tmp_name']);
                    }
                }
            }
        }

        $x   = imagesx($img);
        $y   = imagesy($img);
            if($x<1024){$largura=$x;}
            if($y<768){$altura=$y;}


        $nova = imagecreatetruecolor($largura, $altura);

        if($th){
            $thnova = imagecreatetruecolor(200, 200);
            imagecopyresampled($thnova, $img, 0, 0, 0, 0, 200, 200, $x, $y);
        }

        imagecopyresampled($nova, $img, 0, 0, 0, 0, $largura, $altura, $x, $y);
        if ($arq['type']=="image/jpeg"){
            if(imagejpeg($nova, $local.$nome)){
                imagedestroy($img);
                imagedestroy($nova);
                if($th){
                    if(imagejpeg($thnova, $local.'th_'.$nome)){
                        imagedestroy($thnova);
                        return true;
                    }else{
                        return false;
                    }
                }
            }else{
                return false;
            }

        }else {
            if ($arq['type']=="image/gif"){
                if(imagegif($nova, $local.$nome)){
                    imagedestroy($img);
                    imagedestroy($nova);
                    if($th){
                        if(imagegif($thnova, $local.'th_'.$nome)){
                            imagedestroy($thnova);
                            return true;
                        }else{
                            return false;
                        }
                    }
                }else{
                    return false;
                }

            }else{
                if ($arq['type']=="image/png"){
                    if(imagepng($nova, $local.$nome)){
                        imagedestroy($img);
                        imagedestroy($nova);
                        if($th){
                            if(imagepng($thnova, $local.'th_'.$nome)){
                                imagedestroy($thnova);
                                return true;
                            }else{
                                return false;
                            }
                        }
                    }else{
                        return false;
                    }

                }else{
                    if ($arq['type']=="image/bmp"){
                        if(imagewbmp($nova, $local.$nome)){
                            imagedestroy($img);
                            imagedestroy($nova);
                            if($th){
                                if(imagewbmp($thnova, $local.'th_'.$nome)){
                                    imagedestroy($thnova);
                                    return true;
                                }else{
                                    return false;
                                }
                            }
                        }else{
                            return false;
                        }

                    }
                }
            }
        }





    }


    function ImageCreateFromBMP($filename){
        //Ouverture du fichier en mode binaire
        if (! $f1 = fopen($filename,"rb")) return FALSE;

        //1 : Chargement des ent?s FICHIER
        $FILE = unpack("vfile_type/Vfile_size/Vreserved/Vbitmap_offset", fread($f1,14));
        if ($FILE['file_type'] != 19778) return FALSE;

        //2 : Chargement des ent?s BMP
        $BMP = unpack('Vheader_size/Vwidth/Vheight/vplanes/vbits_per_pixel'.
        '/Vcompression/Vsize_bitmap/Vhoriz_resolution'.
        '/Vvert_resolution/Vcolors_used/Vcolors_important', fread($f1,40));
        $BMP['colors'] = pow(2,$BMP['bits_per_pixel']);
        if ($BMP['size_bitmap'] == 0) $BMP['size_bitmap'] = $FILE['file_size'] - $FILE['bitmap_offset'];
        $BMP['bytes_per_pixel'] = $BMP['bits_per_pixel']/8;
        $BMP['bytes_per_pixel2'] = ceil($BMP['bytes_per_pixel']);
        $BMP['decal'] = ($BMP['width']*$BMP['bytes_per_pixel']/4);
        $BMP['decal'] -= floor($BMP['width']*$BMP['bytes_per_pixel']/4);
        $BMP['decal'] = 4-(4*$BMP['decal']);
        if ($BMP['decal'] == 4) $BMP['decal'] = 0;

        //3 : Chargement des couleurs de la palette
        $PALETTE = array();
        if ($BMP['colors'] < 16777216)
        {
        $PALETTE = unpack('V'.$BMP['colors'], fread($f1,$BMP['colors']*4));
        }

        //4 : Cr?ion de l'image
        $IMG = fread($f1,$BMP['size_bitmap']);
        $VIDE = chr(0);

        $res = imagecreatetruecolor($BMP['width'],$BMP['height']);
        $P = 0;
        $Y = $BMP['height']-1;
        while ($Y >= 0)
        {
        $X=0;
        while ($X < $BMP['width'])
        {
        if ($BMP['bits_per_pixel'] == 24)
        $COLOR = unpack("V",substr($IMG,$P,3).$VIDE);
        elseif ($BMP['bits_per_pixel'] == 16)
        {
        $COLOR = unpack("n",substr($IMG,$P,2));
        $COLOR[1] = $PALETTE[$COLOR[1]+1];
        }
        elseif ($BMP['bits_per_pixel'] == 8)
        {
        $COLOR = unpack("n",$VIDE.substr($IMG,$P,1));
        $COLOR[1] = $PALETTE[$COLOR[1]+1];
        }
        elseif ($BMP['bits_per_pixel'] == 4)
        {
        $COLOR = unpack("n",$VIDE.substr($IMG,floor($P),1));
        if (($P*2)%2 == 0) $COLOR[1] = ($COLOR[1] >> 4) ; else $COLOR[1] = ($COLOR[1] & 0x0F);
        $COLOR[1] = $PALETTE[$COLOR[1]+1];
        }
        elseif ($BMP['bits_per_pixel'] == 1)
        {
        $COLOR = unpack("n",$VIDE.substr($IMG,floor($P),1));
        if (($P*8)%8 == 0) $COLOR[1] = $COLOR[1] >>7;
        elseif (($P*8)%8 == 1) $COLOR[1] = ($COLOR[1] & 0x40)>>6;
        elseif (($P*8)%8 == 2) $COLOR[1] = ($COLOR[1] & 0x20)>>5;
        elseif (($P*8)%8 == 3) $COLOR[1] = ($COLOR[1] & 0x10)>>4;
        elseif (($P*8)%8 == 4) $COLOR[1] = ($COLOR[1] & 0x8)>>3;
        elseif (($P*8)%8 == 5) $COLOR[1] = ($COLOR[1] & 0x4)>>2;
        elseif (($P*8)%8 == 6) $COLOR[1] = ($COLOR[1] & 0x2)>>1;
        elseif (($P*8)%8 == 7) $COLOR[1] = ($COLOR[1] & 0x1);
        $COLOR[1] = $PALETTE[$COLOR[1]+1];
        }
        else
        return FALSE;
        imagesetpixel($res,$X,$Y,$COLOR[1]);
        $X++;
        $P += $BMP['bytes_per_pixel'];
        }
        $Y--;
        $P+=$BMP['decal'];
        }

        //Fermeture du fichier
        fclose($f1);

        return $res;
    }



}






?>
