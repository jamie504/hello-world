<?php
  $xmlstr = <<<XML 
  <?xml version='1.0' standalone='yes'?> 
  <books> 
   <book> 
    <title>Great American Novel</title> 
    <characters> 
     <character> 
      <name>Cliff</name> 
      <desc>really great guy</desc> 
     </character> 
     <character> 
      <name>Lovely Woman</name> 
      <desc>matchless beauty</desc> 
     </character> 
     <character> 
      <name>Loyal Dog</name> 
      <desc>sleepy</desc> 
     </character> 
     <character> 
      <name>Yellow Cat</name> 
      <desc>aloof</desc> 
     </character> 
    </characters> 
    <plot> 
     Cliff meets Lovely Woman.  Loyal Dog sleeps, but wakes up to bark 
     at mailman. 
    </plot> 
    <success type="bestseller">4</success> 
    <success type="bookclubs">9</success> 
   </book> 
  </books> 
XML; 
      ?> 
 
  <?php
  include 'example.php'; 
  $xml = new SimpleXMLElement($xmlstr); 
 
  $character = $xml->book[0]->characters->addChild('character'); 
  $character->addChild('name', 'Yellow Cat'); 
  $character->addChild('desc', 'aloof'); 
 
  $success = $xml->book[0]->addChild('success', '2'); 
  $success->addAttribute('type', 'reprints'); 
 
  echo $xml->asXML(); 
  ?>