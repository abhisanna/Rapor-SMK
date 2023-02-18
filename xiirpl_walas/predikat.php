<?php 
//agama
if($row['agamap'] >= 93){
    $p_agamap = 'A';
}
elseif ($row['agamap'] >= 85){
    $p_agamap = 'B';
}
elseif($row['agamap'] >= 77){
    $p_agamap = 'C';
}
elseif($row['agamap'] < 77){
    $p_agamap = 'D';
}

if($row['agamak'] >= 93){
    $p_agamak = 'A';
}
elseif($row['agamak'] >= 85){
    $p_agamak = 'B';
}
elseif($row['agamak'] >= 77){
    $p_agamak = 'C';
}
elseif($row['agamak'] < 77){
    $p_agamak = 'D';
}

//pkn
if($row['ppknp'] >= 93){
    $p_ppknp = 'A';
}
elseif ($row['ppknp'] >= 85){
    $p_ppknp = 'B';
}
elseif($row['ppknp'] >= 77){
    $p_ppknp = 'C';
}
elseif($row['ppknp'] < 77){
    $p_ppknp = 'D';
}

if($row['ppknk'] >= 93){
    $p_ppknk = 'A';
}
elseif($row['ppknk'] >= 85){
    $p_ppknk = 'B';
}
elseif($row['ppknk'] >= 77){
    $p_ppknk = 'C';
}
elseif($row['ppknk'] < 77){
    $p_ppknk = 'D';
}

//bindo
if($row['bindop'] >= 93){
    $p_bindop = 'A';
}
elseif ($row['bindop'] >= 85){
    $p_bindop = 'B';
}
elseif($row['bindop'] >= 77){
    $p_bindop = 'C';
}
elseif($row['bindop'] < 77){
    $p_bindop = 'D';
}

if($row['bindok'] >= 93){
    $p_bindok = 'A';
}
elseif($row['bindok'] >= 85){
    $p_bindok = 'B';
}
elseif($row['bindok'] >= 77){
    $p_bindok = 'C';
}
elseif($row['bindok'] < 77){
    $p_bindok = 'D';
}

//mtk
if($row['mtkp'] >= 92){
    $p_mtkp = 'A';
}
elseif ($row['mtkp'] >= 84){
    $p_mtkp = 'B';
}
elseif($row['mtkp'] >= 76){
    $p_mtkp = 'C';
}
elseif($row['mtkp'] < 76){
    $p_mtkp = 'D';
}

if($row['mtkk'] >= 92){
    $p_mtkk = 'A';
}
elseif($row['mtkk'] >= 84){
    $p_mtkk = 'B';
}
elseif($row['mtkk'] >= 76){
    $p_mtkk = 'C';
}
elseif($row['mtkk'] < 76){
    $p_mtkk = 'D';
}

//bing
if($row['bingp'] >= 92){
    $p_bingp = 'A';
}
elseif ($row['bingp'] >= 84){
    $p_bingp = 'B';
}
elseif($row['bingp'] >= 76){
    $p_bingp = 'C';
}
elseif($row['bingp'] < 76){
    $p_bingp = 'D';
}

if($row['bingk'] >= 92){
    $p_bingk = 'A';
}
elseif($row['bingk'] >= 84){
    $p_bingk = 'B';
}
elseif($row['bingk'] >= 76){
    $p_bingk = 'C';
}
elseif($row['bingk'] < 76){
    $p_bingk = 'D';
}

//mandarin
if($row['mandp'] >= 92){
    $p_mandp = 'A';
}
elseif ($row['mandp'] >= 84){
    $p_mandp = 'B';
}
elseif($row['mandp'] >= 75){
    $p_mandp = 'C';
}
elseif($row['mandp'] < 75){
    $p_mandp = 'D';
}

if($row['mandk'] >= 92){
    $p_mandk = 'A';
}
elseif($row['mandk'] >= 84){
    $p_mandk = 'B';
}
elseif($row['mandk'] >= 75){
    $p_mandk = 'C';
}
elseif($row['mandk'] < 75){
    $p_mandk = 'D';
}

//bhum
if($row['bhump'] >= 92){
    $p_bhump = 'A';
}
elseif ($row['bhump'] >= 84){
    $p_bhump = 'B';
}
elseif($row['bhump'] >= 75){
    $p_bhump = 'C';
}
elseif($row['bhump'] < 75){
    $p_bhump = 'D';
}

if($row['bhumk'] >= 92){
    $p_bhumk = 'A';
}
elseif($row['bhumk'] >= 84){
    $p_bhumk = 'B';
}
elseif($row['bhumk'] >= 75){
    $p_bhumk = 'C';
}
elseif($row['bhumk'] < 75){
    $p_bhumk = 'D';
}

//basis data
if($row['basdatap'] >= 93){
    $p_basdatap = 'A';
}
elseif ($row['basdatap'] >= 85){
    $p_basdatap = 'B';
}
elseif($row['basdatap'] >= 78){
    $p_basdatap = 'C';
}
elseif($row['basdatap'] < 78){
    $p_basdatap = 'D';
}

if($row['basdatak'] >= 93){
    $p_basdatak = 'A';
}
elseif($row['basdatak'] >= 85){
    $p_basdatak = 'B';
}
elseif($row['basdatak'] >= 78){
    $p_basdatak = 'C';
}
elseif($row['basdatak'] < 78){
    $p_basdatak = 'D';
}

//pbo
if($row['pbop'] >= 93){
    $p_pbop = 'A';
}
elseif ($row['pbop'] >= 85){
    $p_pbop = 'B';
}
elseif($row['pbop'] >= 78){
    $p_pbop = 'C';
}
elseif($row['pbop'] < 78){
    $p_pbop = 'D';
}

if($row['pbok'] >= 93){
    $p_pbok = 'A';
}
elseif($row['pbok'] >= 85){
    $p_pbok = 'B';
}
elseif($row['pbok'] >= 78){
    $p_pbok = 'C';
}
elseif($row['pbok'] < 78){
    $p_pbok = 'D';
}

//progweb
if($row['progwebp'] >= 93){
    $p_progwebp = 'A';
}
elseif ($row['progwebp'] >= 85){
    $p_progwebp = 'B';
}
elseif($row['progwebp'] >= 78){
    $p_progwebp = 'C';
}
elseif($row['progwebp'] < 78){
    $p_progwebp = 'D';
}

if($row['progwebk'] >= 93){
    $p_progwebk = 'A';
}
elseif($row['progwebk'] >= 85){
    $p_progwebk = 'B';
}
elseif($row['progwebk'] >= 78){
    $p_progwebk = 'C';
}
elseif($row['progwebk'] < 78){
    $p_progwebk = 'D';
}

//kwu
if($row['kwup'] >= 93){
    $p_kwup = 'A';
}
elseif ($row['kwup'] >= 85){
    $p_kwup = 'B';
}
elseif($row['kwup'] >= 78){
    $p_kwup = 'C';
}
elseif($row['kwup'] < 78){
    $p_kwup = 'D';
}

if($row['kwuk'] >= 93){
    $p_kwuk = 'A';
}
elseif($row['kwuk'] >= 85){
    $p_kwuk = 'B';
}
elseif($row['kwuk'] >= 78){
    $p_kwuk = 'C';
}
elseif($row['kwuk'] < 78){
    $p_kwuk = 'D';
}
?>