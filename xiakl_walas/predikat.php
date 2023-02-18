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
elseif($row['bindop'] >= 78){
    $p_bindop = 'C';
}
elseif($row['bindop'] < 78){
    $p_bindop = 'D';
}

if($row['bindok'] >= 93){
    $p_bindok = 'A';
}
elseif($row['bindok'] >= 85){
    $p_bindok = 'B';
}
elseif($row['bindok'] >= 78){
    $p_bindok = 'C';
}
elseif($row['bindok'] < 78){
    $p_bindok = 'D';
}

//mtk
if($row['mtkp'] >= 93){
    $p_mtkp = 'A';
}
elseif ($row['mtkp'] >= 85){
    $p_mtkp = 'B';
}
elseif($row['mtkp'] >= 78){
    $p_mtkp = 'C';
}
elseif($row['mtkp'] < 78){
    $p_mtkp = 'D';
}

if($row['mtkk'] >= 93){
    $p_mtkk = 'A';
}
elseif($row['mtkk'] >= 85){
    $p_mtkk = 'B';
}
elseif($row['mtkk'] >= 78){
    $p_mtkk = 'C';
}
elseif($row['mtkk'] < 78){
    $p_mtkk = 'D';
}

//bing
if($row['bingp'] >= 93){
    $p_bingp = 'A';
}
elseif ($row['bingp'] >= 85){
    $p_bingp = 'B';
}
elseif($row['bingp'] >= 77){
    $p_bingp = 'C';
}
elseif($row['bingp'] < 77){
    $p_bingp = 'D';
}

if($row['bingk'] >= 93){
    $p_bingk = 'A';
}
elseif($row['bingk'] >= 85){
    $p_bingk = 'B';
}
elseif($row['bingk'] >= 77){
    $p_bingk = 'C';
}
elseif($row['bingk'] < 77){
    $p_bingk = 'D';
}

// pjok
if($row['pjokp'] >= 93){
    $p_pjokp = 'A';
}
elseif($row['pjokp'] >= 85){
    $p_pjokp = 'B';
}
elseif($row['pjokp'] >= 78){
    $p_pjokp = 'C';
}
elseif($row['pjokp'] < 78){
    $p_pjokp = 'D';
}

if($row['pjokk'] >= 93){
    $p_pjokk = 'A';
}
elseif($row['pjokk'] >= 85){
    $p_pjokk = 'B';
}
elseif($row['pjokk'] >= 78){
    $p_pjokk = 'C';
}
elseif($row['pjokk'] < 78){
    $p_pjokk = 'D';
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

//jasdag
if($row['prakjasdagp'] >= 93){
    $p_prakjasdagp = 'A';
}
elseif ($row['prakjasdagp'] >= 85){
    $p_prakjasdagp = 'B';
}
elseif($row['prakjasdagp'] >= 78){
    $p_prakjasdagp = 'C';
}
elseif($row['prakjasdagp'] < 78){
    $p_prakjasdagp = 'D';
}

if($row['prakjasdagk'] >= 93){
    $p_prakjasdagk = 'A';
}
elseif($row['prakjasdagk'] >= 85){
    $p_prakjasdagk = 'B';
}
elseif($row['prakjasdagk'] >= 78){
    $p_prakjasdagk = 'C';
}
elseif($row['prakjasdagk'] < 78){
    $p_prakjasdagk = 'D';
}

//prakakupem
if($row['prakakupemp'] >= 93){
    $p_prakakupemp = 'A';
}
elseif ($row['prakakupemp'] >= 85){
    $p_prakakupemp = 'B';
}
elseif($row['prakakupemp'] >= 78){
    $p_prakakupemp = 'C';
}
elseif($row['prakakupemp'] < 78){
    $p_prakakupemp = 'D';
}

if($row['prakakupemk'] >= 93){
    $p_prakakupemk = 'A';
}
elseif($row['prakakupemk'] >= 85){
    $p_prakakupemk = 'B';
}
elseif($row['prakakupemk'] >= 78){
    $p_prakakupemk = 'C';
}
elseif($row['prakakupemk'] < 78){
    $p_prakakupemk = 'D';
}

//akkeu
if($row['akkeup'] >= 93){
    $p_akkeup = 'A';
}
elseif ($row['akkeup'] >= 85){
    $p_akkeup = 'B';
}
elseif($row['akkeup'] >= 78){
    $p_akkeup = 'C';
}
elseif($row['akkeup'] < 78){
    $p_akkeup = 'D';
}

if($row['akkeuk'] >= 93){
    $p_akkeuk = 'A';
}
elseif($row['akkeuk'] >= 85){
    $p_akkeuk = 'B';
}
elseif($row['akkeuk'] >= 78){
    $p_akkeuk = 'C';
}
elseif($row['akkeuk'] < 78){
    $p_akkeuk = 'D';
}

//kompak
if($row['kompakp'] >= 93){
    $p_kompakp = 'A';
}
elseif ($row['kompakp'] >= 85){
    $p_kompakp = 'B';
}
elseif($row['kompakp'] >= 78){
    $p_kompakp = 'C';
}
elseif($row['kompakp'] < 78){
    $p_kompakp = 'D';
}

if($row['kompakk'] >= 93){
    $p_kompakk = 'A';
}
elseif($row['kompakk'] >= 85){
    $p_kompakk = 'B';
}
elseif($row['kompakk'] >= 78){
    $p_kompakk = 'C';
}
elseif($row['kompakk'] < 78){
    $p_kompakk = 'D';
}

//pajak
if($row['pajakp'] >= 93){
    $p_pajakp = 'A';
}
elseif ($row['pajakp'] >= 85){
    $p_pajakp = 'B';
}
elseif($row['pajakp'] >= 78){
    $p_pajakp = 'C';
}
elseif($row['pajakp'] < 78){
    $p_pajakp = 'D';
}

if($row['pajakk'] >= 93){
    $p_pajakk = 'A';
}
elseif($row['pajakk'] >= 85){
    $p_pajakk = 'B';
}
elseif($row['pajakk'] >= 78){
    $p_pajakk = 'C';
}
elseif($row['pajakk'] < 78){
    $p_pajakk = 'D';
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