<?php
function checkHoroscope($month, $day){
    //SM=StartMonth. EM=EndMonth, SD=StartDay, ED=EndDay
        $horoscopes = array(
            "vädurenSM"     => 3,       "vädurenEM"     => 4,       "vädurenSD"     => 21,      "vädurenED"     => 20,
            "oxenSM"        => 4,       "oxenEM"        => 5,       "oxenSD"        => 21,      "oxenED"        => 21,
            "tvillingenSM"  => 5,       "tvillingenEM"  => 6,       "tvillingenSD"  => 22,      "tvillingenED"  => 21,
            "kräftanSM"     => 6,       "kräftanEM"     => 7,       "kräftanSD"     => 22,      "kräftanED"     => 22,
            "lejonetSM"     => 7,       "lejonetEM"     => 8,       "lejonetSD"     => 23,      "lejonetED"     => 23,
            "jungfrunSM"    => 8,       "jungfrunEM"    => 9,       "jungfrunSD"    => 24,      "jungfrunED"    => 22,
            "vågenSM"       => 9,       "vågenEM"       => 10,      "vågenSD"       => 23,      "vågenED"       => 23,
            "skorionenSM"   => 10,      "skorionenEM"   => 11,      "skorionenSD"   => 24,      "skorionenED"   => 22,
            "skyttenSM"     => 11,      "skyttenEM"     => 12,      "skyttenSD"     => 23,      "skyttenED"     => 21,
            "stenbockenSM"  => 12,      "stenbockenEM"  => 1,       "stenbockenSD"  => 22,      "stenbockenED"  => 20,
            "vattumannenSM" => 1,       "vattumannenEM" => 2,       "vattumannenSD" => 21,      "vattumannenED" => 18,
            "fiskarnaSM"    => 2,       "fiskarnaEM"    => 3,       "fiskarnaSD"    => 19,      "fiskarnaED"    => 20,
        );
        if($month == $horoscopes["vädurenSM"] && $day >= $horoscopes["vädurenSD"] || $month == $horoscopes["vädurenEM"] && $day <= $horoscopes["vädurenED"]){          
            $myHoroscope = "<h1>Vädur</h1><img src='./img/vaduren.jpg'>";
        }
        if($month == $horoscopes["oxenSM"] && $day >= $horoscopes["oxenSD"] || $month == $horoscopes["oxenEM"] && $day <= $horoscopes["oxenED"]){          
            $myHoroscope = "<h1>Oxe</h1><img src='./img/oxen.jpg'>";
        }
        if($month == $horoscopes["tvillingenSM"] && $day >= $horoscopes["tvillingenSD"] || $month == $horoscopes["tvillingenEM"] && $day <= $horoscopes["tvillingenED"]){          
            $myHoroscope = "<h1>Tvilling</h1><img src='./img/tvilling.jpg'>";
        }
        if($month == $horoscopes["kräftanSM"] && $day >= $horoscopes["kräftanSD"] || $month == $horoscopes["kräftanEM"] && $day <= $horoscopes["kräftanED"]){          
            $myHoroscope = "<h1>Kräfta</h1><img src='./img/kräftan.jpg'>";
        }
        if($month == $horoscopes["lejonetSM"] && $day >= $horoscopes["lejonetSD"] || $month == $horoscopes["lejonetEM"] && $day <= $horoscopes["lejonetED"]){          
            $myHoroscope = "<h1>Lejon</h1><img src='./img/lejonet.jpg'>";
        }
        if($month == $horoscopes["jungfrunSM"] && $day >= $horoscopes["jungfrunSD"] || $month == $horoscopes["jungfrunEM"] && $day <= $horoscopes["jungfrunED"]){          
            $myHoroscope = "<h1>Jungfru</h1><img src='./img/jungfrun.jpg'>";
        }
        if($month == $horoscopes["vågenSM"] && $day >= $horoscopes["vågenSD"] || $month == $horoscopes["vågenEM"] && $day <= $horoscopes["vågenED"]){          
            $myHoroscope = "<h1>Våg</h1><img src='./img/vågen.jpg'>";
        }
        if($month == $horoscopes["skorionenSM"] && $day >= $horoscopes["skorionenSD"] || $month == $horoscopes["skorionenEM"] && $day <= $horoscopes["skorionenED"]){          
            $myHoroscope = "<h1>Skorpion</h1><img src='./img/skorpionen.jpg'>";
        }
        if($month == $horoscopes["skyttenSM"] && $day >= $horoscopes["skyttenSD"] || $month == $horoscopes["skyttenEM"] && $day <= $horoscopes["skyttenED"]){          
            $myHoroscope = "<h1>Skytt</h1><img src='./img/skytten.jpg'>";
        }
        if($month == $horoscopes["stenbockenSM"] && $day >= $horoscopes["stenbockenSD"] || $month == $horoscopes["stenbockenEM"] && $day <= $horoscopes["stenbockenED"]){          
            $myHoroscope = "<h1>Stenbock</h1><img src='./img/stenbocken.jpg'>";
        }
        if($month == $horoscopes["vattumannenSM"] && $day >= $horoscopes["vattumannenSD"] || $month == $horoscopes["vattumannenEM"] && $day <= $horoscopes["vattumannenED"]){          
            $myHoroscope = "<h1>Vattuman</h1><img src='./img/vattumannen.jpg'>";
        }
        if($month == $horoscopes["fiskarnaSM"] && $day >= $horoscopes["fiskarnaSD"] || $month == $horoscopes["fiskarnaEM"] && $day <= $horoscopes["fiskarnaED"]){          
            $myHoroscope = "<h1>Fisk</h1><img src='./img/fiskarna.jpg'>";
        }
        
        return $myHoroscope;
}
?>