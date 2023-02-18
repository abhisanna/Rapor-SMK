<?php 
//agama
if($row['agamap'] >= 92){
    $p_agamap = 'A';
}
elseif ($row['agamap'] >= 84){
    $p_agamap = 'B';
}
elseif($row['agamap'] >= 75){
    $p_agamap = 'C';
}
elseif($row['agamap'] < 75){
    $p_agamap = 'D';
}

if($row['agamak'] >= 92){
    $p_agamak = 'A';
}
elseif($row['agamak'] >= 84){
    $p_agamak = 'B';
}
elseif($row['agamak'] >= 75){
    $p_agamak = 'C';
}
elseif($row['agamak'] < 75){
    $p_agamak = 'D';
}

//pkn
if($row['ppknp'] >= 93){
    $p_ppknp = 'A';
}
elseif ($row['ppknp'] >= 85){
    $p_ppknp = 'B';
}
elseif($row['ppknp'] >= 78){
    $p_ppknp = 'C';
}
elseif($row['ppknp'] < 78){
    $p_ppknp = 'D';
}

if($row['ppknk'] >= 93){
    $p_ppknk = 'A';
}
elseif($row['ppknk'] >= 85){
    $p_ppknk = 'B';
}
elseif($row['ppknk'] >= 78){
    $p_ppknk = 'C';
}
elseif($row['ppknk'] < 78){
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
if($row['mtkp'] >= 93){
    $p_mtkp = 'A';
}
elseif ($row['mtkp'] >= 85){
    $p_mtkp = 'B';
}
elseif($row['mtkp'] >= 77){
    $p_mtkp = 'C';
}
elseif($row['mtkp'] < 77){
    $p_mtkp = 'D';
}

if($row['mtkk'] >= 93){
    $p_mtkk = 'A';
}
elseif($row['mtkk'] >= 85){
    $p_mtkk = 'B';
}
elseif($row['mtkk'] >= 77){
    $p_mtkk = 'C';
}
elseif($row['mtkk'] < 77){
    $p_mtkk = 'D';
}

//bing
if($row['bingp'] >= 92){
    $p_bingp = 'A';
}
elseif ($row['bingp'] >= 84){
    $p_bingp = 'B';
}
elseif($row['bingp'] >= 75){
    $p_bingp = 'C';
}
elseif($row['bingp'] < 75){
    $p_bingp = 'D';
}

if($row['bingk'] >= 92){
    $p_bingk = 'A';
}
elseif($row['bingk'] >= 84){
    $p_bingk = 'B';
}
elseif($row['bingk'] >= 75){
    $p_bingk = 'C';
}
elseif($row['bingk'] < 75){
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

//kepegawaian
if($row['otkkpgwp'] >= 92){
    $p_otkkpgwp = 'A';
}
elseif ($row['otkkpgwp'] >= 84){
    $p_otkkpgwp = 'B';
}
elseif($row['otkkpgwp'] >= 75){
    $p_otkkpgwp = 'C';
}
elseif($row['otkkpgwp'] < 75){
    $p_otkkpgwp = 'D';
}

if($row['otkkpgwk'] >= 92){
    $p_otkkpgwk = 'A';
}
elseif($row['otkkpgwk'] >= 84){
    $p_otkkpgwk = 'B';
}
elseif($row['otkkpgwk'] >= 75){
    $p_otkkpgwk = 'C';
}
elseif($row['otkkpgwk'] < 75){
    $p_otkkpgwk = 'D';
}

//otkkeu
if($row['otkkeup'] >= 92){
    $p_otkkeup = 'A';
}
elseif ($row['otkkeup'] >= 84){
    $p_otkkeup = 'B';
}
elseif($row['otkkeup'] >= 75){
    $p_otkkeup = 'C';
}
elseif($row['otkkeup'] < 75){
    $p_otkkeup = 'D';
}

if($row['otkkeuk'] >= 92){
    $p_otkkeuk = 'A';
}
elseif($row['otkkeuk'] >= 84){
    $p_otkkeuk = 'B';
}
elseif($row['otkkeuk'] >= 75){
    $p_otkkeuk = 'C';
}
elseif($row['otkkeuk'] < 75){
    $p_otkkeuk = 'D';
}

//otksarpras
if($row['otksarprasp'] >= 92){
    $p_otksarprasp = 'A';
}
elseif ($row['otksarprasp'] >= 84){
    $p_otksarprasp = 'B';
}
elseif($row['otksarprasp'] >= 75){
    $p_otksarprasp = 'C';
}
elseif($row['otksarprasp'] < 75){
    $p_otksarprasp = 'D';
}

if($row['otksarprask'] >= 92){
    $p_otksarprask = 'A';
}
elseif($row['otksarprask'] >= 84){
    $p_otksarprask = 'B';
}
elseif($row['otksarprask'] >= 75){
    $p_otksarprask = 'C';
}
elseif($row['otksarprask'] < 75){
    $p_otksarprask = 'D';
}

//otkhumas
if($row['otkhumasp'] >= 92){
    $p_otkhumasp = 'A';
}
elseif ($row['otkhumasp'] >= 84){
    $p_otkhumasp = 'B';
}
elseif($row['otkhumasp'] >= 75){
    $p_otkhumasp = 'C';
}
elseif($row['otkhumasp'] < 75){
    $p_otkhumasp = 'D';
}

if($row['otkhumask'] >= 92){
    $p_otkhumask = 'A';
}
elseif($row['otkhumask'] >= 84){
    $p_otkhumask = 'B';
}
elseif($row['otkhumask'] >= 75){
    $p_otkhumask = 'C';
}
elseif($row['otkhumask'] < 75){
    $p_otkhumask = 'D';
}

//kwu
if($row['kwup'] >= 93){
    $p_kwup = 'A';
}
elseif ($row['kwup'] >= 85){
    $p_kwup = 'B';
}
elseif($row['kwup'] >= 77){
    $p_kwup = 'C';
}
elseif($row['kwup'] < 77){
    $p_kwup = 'D';
}

if($row['kwuk'] >= 93){
    $p_kwuk = 'A';
}
elseif($row['kwuk'] >= 85){
    $p_kwuk = 'B';
}
elseif($row['kwuk'] >= 77){
    $p_kwuk = 'C';
}
elseif($row['kwuk'] < 77){
    $p_kwuk = 'D';
}
?>