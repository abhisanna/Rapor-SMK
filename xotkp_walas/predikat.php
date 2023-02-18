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
if($row['bindop'] >= 92){
    $p_bindop = 'A';
}
elseif ($row['bindop'] >= 84){
    $p_bindop = 'B';
}
elseif($row['bindop'] >= 75){
    $p_bindop = 'C';
}
elseif($row['bindop'] < 75){
    $p_bindop = 'D';
}

if($row['bindok'] >= 92){
    $p_bindok = 'A';
}
elseif($row['bindok'] >= 84){
    $p_bindok = 'B';
}
elseif($row['bindok'] >= 75){
    $p_bindok = 'C';
}
elseif($row['bindok'] < 75){
    $p_bindok = 'D';
}

//mtk
if($row['mtkp'] >= 92){
    $p_mtkp = 'A';
}
elseif ($row['mtkp'] >= 84){
    $p_mtkp = 'B';
}
elseif($row['mtkp'] >= 75){
    $p_mtkp = 'C';
}
elseif($row['mtkp'] < 75){
    $p_mtkp = 'D';
}

if($row['mtkk'] >= 92){
    $p_mtkk = 'A';
}
elseif($row['mtkk'] >= 84){
    $p_mtkk = 'B';
}
elseif($row['mtkk'] >= 75){
    $p_mtkk = 'C';
}
elseif($row['mtkk'] < 75){
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
if($row['simdigp'] >= 92){
    $p_simdigp = 'A';
}
elseif ($row['simdigp'] >= 84){
    $p_simdigp = 'B';
}
elseif($row['simdigp'] >= 75){
    $p_simdigp = 'C';
}
elseif($row['simdigp'] < 75){
    $p_simdigp = 'D';
}

if($row['simdigk'] >= 92){
    $p_simdigk = 'A';
}
elseif($row['simdigk'] >= 84){
    $p_simdigk = 'B';
}
elseif($row['simdigk'] >= 75){
    $p_simdigk = 'C';
}
elseif($row['simdigk'] < 75){
    $p_simdigk = 'D';
}

//ekbis
if($row['ekbisp'] >= 92){
    $p_ekbisp = 'A';
}
elseif ($row['ekbisp'] >= 84){
    $p_ekbisp = 'B';
}
elseif($row['ekbisp'] >= 75){
    $p_ekbisp = 'C';
}
elseif($row['ekbisp'] < 75){
    $p_ekbisp = 'D';
}

if($row['ekbisk'] >= 92){
    $p_ekbisk = 'A';
}
elseif($row['ekbisk'] >= 84){
    $p_ekbisk = 'B';
}
elseif($row['ekbisk'] >= 75){
    $p_ekbisk = 'C';
}
elseif($row['ekbisk'] < 75){
    $p_ekbisk = 'D';
}

//adm
if($row['admp'] >= 92){
    $p_admp = 'A';
}
elseif ($row['admp'] >= 84){
    $p_admp = 'B';
}
elseif($row['admp'] >= 75){
    $p_admp = 'C';
}
elseif($row['admp'] < 75){
    $p_admp = 'D';
}

if($row['admk'] >= 92){
    $p_admk = 'A';
}
elseif($row['admk'] >= 84){
    $p_admk = 'B';
}
elseif($row['admk'] >= 75){
    $p_admk = 'C';
}
elseif($row['admk'] < 75){
    $p_admk = 'D';
}

//ipa
if($row['ipap'] >= 92){
    $p_ipap = 'A';
}
elseif ($row['ipap'] >= 84){
    $p_ipap = 'B';
}
elseif($row['ipap'] >= 75){
    $p_ipap = 'C';
}
elseif($row['ipap'] < 75){
    $p_ipap = 'D';
}

if($row['ipak'] >= 92){
    $p_ipak = 'A';
}
elseif($row['ipak'] >= 84){
    $p_ipak = 'B';
}
elseif($row['ipak'] >= 75){
    $p_ipak = 'C';
}
elseif($row['ipak'] < 75){
    $p_ipak = 'D';
}

//teknologi perkantoran
if($row['tekperp'] >= 92){
    $p_tekperp = 'A';
}
elseif ($row['tekperp'] >= 84){
    $p_tekperp = 'B';
}
elseif($row['tekperp'] >= 75){
    $p_tekperp = 'C';
}
elseif($row['tekperp'] < 75){
    $p_tekperp = 'D';
}

if($row['tekperk'] >= 92){
    $p_tekperk = 'A';
}
elseif($row['tekperk'] >= 84){
    $p_tekperk = 'B';
}
elseif($row['tekperk'] >= 75){
    $p_tekperk = 'C';
}
elseif($row['tekperk'] < 75){
    $p_tekperk = 'D';
}

//korespon
if($row['koresponp'] >= 92){
    $p_koresponp = 'A';
}
elseif ($row['koresponp'] >= 84){
    $p_koresponp = 'B';
}
elseif($row['koresponp'] >= 75){
    $p_koresponp = 'C';
}
elseif($row['koresponp'] < 75){
    $p_koresponp = 'D';
}

if($row['koresponk'] >= 92){
    $p_koresponk = 'A';
}
elseif($row['koresponk'] >= 84){
    $p_koresponk = 'B';
}
elseif($row['koresponk'] >= 75){
    $p_koresponk = 'C';
}
elseif($row['koresponk'] < 75){
    $p_koresponk = 'D';
}

//kearsipan
if($row['arsipp'] >= 92){
    $p_arsipp = 'A';
}
elseif ($row['arsipp'] >= 84){
    $p_arsipp = 'B';
}
elseif($row['arsipp'] >= 75){
    $p_arsipp = 'C';
}
elseif($row['arsipp'] < 75){
    $p_arsipp = 'D';
}

if($row['arsipk'] >= 92){
    $p_arsipk = 'A';
}
elseif($row['arsipk'] >= 84){
    $p_arsipk = 'B';
}
elseif($row['arsipk'] >= 75){
    $p_arsipk = 'C';
}
elseif($row['arsipk'] < 75){
    $p_arsipk = 'D';
}
?>