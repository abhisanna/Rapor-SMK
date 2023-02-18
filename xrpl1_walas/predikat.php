<?php 
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

//sejarah
if($row['sejarahp'] >= 93){
    $p_sejarahp = 'A';
}
elseif ($row['sejarahp'] >= 85){
    $p_sejarahp = 'B';
}
elseif($row['sejarahp'] >= 77){
    $p_sejarahp = 'C';
}
elseif($row['sejarahp'] < 77){
    $p_sejarahp = 'D';
}

if($row['sejarahk'] >= 93){
    $p_sejarahk = 'A';
}
elseif($row['sejarahk'] >= 85){
    $p_sejarahk = 'B';
}
elseif($row['sejarahk'] >= 77){
    $p_sejarahk = 'C';
}
elseif($row['sejarahk'] < 77){
    $p_sejarahk = 'D';
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

//sbd
if($row['sbdp'] >= 92){
    $p_sbdp = 'A';
}
elseif ($row['sbdp'] >= 84){
    $p_sbdp = 'B';
}
elseif($row['sbdp'] >= 76){
    $p_sbdp = 'C';
}
elseif($row['sbdp'] < 76){
    $p_sbdp = 'D';
}

if($row['sbdk'] >= 92){
    $p_sbdk = 'A';
}
elseif ($row['sbdk'] >= 84){
    $p_sbdk = 'B';
}
elseif($row['sbdk'] >= 76){
    $p_sbdk = 'C';
}
elseif($row['sbdk'] < 76){
    $p_sbdk = 'D';
}

// pjok
if($row['pjokp'] >= 93){
    $p_pjokp = 'A';
}
elseif($row['pjokp'] >= 85){
    $p_pjokp = 'B';
}
elseif($row['pjokp'] >= 77){
    $p_pjokp = 'C';
}
elseif($row['pjokp'] < 77){
    $p_pjokp = 'D';
}

if($row['pjokk'] >= 93){
    $p_pjokk = 'A';
}
elseif($row['pjokk'] >= 85){
    $p_pjokk = 'B';
}
elseif($row['pjokk'] >= 77){
    $p_pjokk = 'C';
}
elseif($row['pjokk'] < 77){
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

//simkomdig
if($row['simdigp'] >= 93){
    $p_simdigp = 'A';
}
elseif ($row['simdigp'] >= 85){
    $p_simdigp = 'B';
}
elseif($row['simdigp'] >= 78){
    $p_simdigp = 'C';
}
elseif($row['simdigp'] < 78){
    $p_simdigp = 'D';
}

if($row['simdigk'] >= 93){
    $p_simdigk = 'A';
}
elseif($row['simdigk'] >= 85){
    $p_simdigk = 'B';
}
elseif($row['simdigk'] >= 78){
    $p_simdigk = 'C';
}
elseif($row['simdigk'] < 78){
    $p_simdigk = 'D';
}

//fisika
if($row['fisikap'] >= 92){
    $p_fisikap = 'A';
}
elseif ($row['fisikap'] >= 84){
    $p_fisikap = 'B';
}
elseif($row['fisikap'] >= 75){
    $p_fisikap = 'C';
}
elseif($row['fisikap'] < 75){
    $p_fisikap = 'D';
}

if($row['fisikak'] >= 92){
    $p_fisikak = 'A';
}
elseif($row['fisikak'] >= 84){
    $p_fisikak = 'B';
}
elseif($row['fisikak'] >= 75){
    $p_fisikak = 'C';
}
elseif($row['fisikak'] < 75){
    $p_fisikak = 'D';
}

//kimia
if($row['kimiap'] >= 92){
    $p_kimiap = 'A';
}
elseif ($row['kimiap'] >= 84){
    $p_kimiap = 'B';
}
elseif($row['kimiap'] >= 75){
    $p_kimiap = 'C';
}
elseif($row['kimiap'] < 75){
    $p_kimiap = 'D';
}

if($row['kimiak'] >= 92){
    $p_kimiak = 'A';
}
elseif($row['kimiak'] >= 84){
    $p_kimiak = 'B';
}
elseif($row['kimiak'] >= 75){
    $p_kimiak = 'C';
}
elseif($row['kimiak'] < 75){
    $p_kimiak = 'D';
}

//sistekom
if($row['sistekomp'] >= 93){
    $p_sistekomp = 'A';
}
elseif ($row['sistekomp'] >= 85){
    $p_sistekomp = 'B';
}
elseif($row['sistekomp'] >= 78){
    $p_sistekomp = 'C';
}
elseif($row['sistekomp'] < 78){
    $p_sistekomp = 'D';
}

if($row['sistekomk'] >= 93){
    $p_sistekomk = 'A';
}
elseif($row['sistekomk'] >= 85){
    $p_sistekomk = 'B';
}
elseif($row['sistekomk'] >= 78){
    $p_sistekomk = 'C';
}
elseif($row['sistekomk'] < 78){
    $p_sistekomk = 'D';
}

//komjardas
if($row['komjardasp'] >= 93){
    $p_komjardasp = 'A';
}
elseif ($row['komjardasp'] >= 85){
    $p_komjardasp = 'B';
}
elseif($row['komjardasp'] >= 78){
    $p_komjardasp = 'C';
}
elseif($row['komjardasp'] < 78){
    $p_komjardasp = 'D';
}

if($row['komjardask'] >= 93){
    $p_komjardask = 'A';
}
elseif($row['komjardask'] >= 85){
    $p_komjardask = 'B';
}
elseif($row['komjardask'] >= 78){
    $p_komjardask = 'C';
}
elseif($row['komjardask'] < 78){
    $p_komjardask = 'D';
}

//progdas
if($row['progdasp'] >= 93){
    $p_progdasp = 'A';
}
elseif ($row['progdasp'] >= 85){
    $p_progdasp = 'B';
}
elseif($row['progdasp'] >= 78){
    $p_progdasp = 'C';
}
elseif($row['progdasp'] < 78){
    $p_progdasp = 'D';
}

if($row['progdask'] >= 93){
    $p_progdask = 'A';
}
elseif($row['progdask'] >= 85){
    $p_progdask = 'B';
}
elseif($row['progdask'] >= 78){
    $p_progdask = 'C';
}
elseif($row['progdask'] < 78){
    $p_progdask = 'D';
}

//desgraf
if($row['desgrafp'] >= 93){
    $p_desgrafp = 'A';
}
elseif ($row['desgrafp'] >= 85){
    $p_desgrafp = 'B';
}
elseif($row['desgrafp'] >= 78){
    $p_desgrafp = 'C';
}
elseif($row['desgrafp'] < 78){
    $p_desgrafp = 'D';
}

if($row['desgrafk'] >= 93){
    $p_desgrafk = 'A';
}
elseif($row['desgrafk'] >= 85){
    $p_desgrafk = 'B';
}
elseif($row['desgrafk'] >= 78){
    $p_desgrafk = 'C';
}
elseif($row['desgrafk'] < 78){
    $p_desgrafk = 'D';
}
?>