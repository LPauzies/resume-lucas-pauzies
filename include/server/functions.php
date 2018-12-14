<?php

/* Script used for server side management, file reading, file uploading, file inclusion etc etc */

/*
 * Author : Lucas Pauzies
 * Date : 21/11/2018
 * Input : language defined by the user
 * Output : URL to change the language
 */
function HandleLangURL($language) {
  //Root
  if ($_SERVER['REQUEST_URI'] == '/') {
    return $_SERVER['REQUEST_URI'].'?lang='.$language;
  //lang not in URL
  } elseif (strpos($_SERVER['REQUEST_URI'],'lang') === false) {
    if (strpos($_SERVER['REQUEST_URI'],'?') === false) {
      return $_SERVER['REQUEST_URI'].'?lang='.$language;
    } else {
      return $_SERVER['REQUEST_URI'].'&lang='.$language;
    }
  //lang in URL
  } else {
    $pattern = '/lang=[a-z]{2}/';
    $replacement = "lang={$language}";
    return preg_replace($pattern, $replacement, $_SERVER['REQUEST_URI']);
  }
}

function sendMail($from,$to,$topic,$body) {

  $passage_ligne = "\n";
  $boundary = "-----=".md5(rand());

  //Header
  $header = "From: \"Cair0n Website\"<".$from.">".$passage_ligne;
  $header .= "Reply-to: \"Cair0n Website\" <".$from.">".$passage_ligne;
  $header .= "MIME-Version: 1.0".$passage_ligne;
  $header .= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"".$boundary."\"".$passage_ligne;

  $message = $passage_ligne."--".$boundary.$passage_ligne;
  $message .= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
  $message .= "Content-Transfer-Encoding: 8bit".$passage_ligne;
  $message .= $passage_ligne.$body.$passage_ligne;

  mail($to,$topic,$message,$header);
}

?>
