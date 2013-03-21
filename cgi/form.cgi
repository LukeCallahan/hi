#!/usr/local/bin/perl


  


read(STDIN,$buffer,$ENV{'CONTENT_LENGTH'});
  @pairs=split(/&/,$buffer);
$count = 0;  
foreach $pair(@pairs)
   {
    ($key,$content)=split(/=/,$pair);
    $content=~tr/+/ /;
    $content=~s/%(..)/pack("c",hex($1))/eg;
    $fields{$key}=$content;
$fields{$count} = $content;
$fieldnames{$count} = $key;
$count++;
   }                          

#compiles redirect address.
$redirect = "$fields{redirect}";

if ($redirect) {
    print ("Location: $redirect\n");
 print ("Content-type: text/html\n\n"); exit
    
} 
    
else{ 
	print "Content-type: text/html\n\n"; 
open (HEADER, "Header.txt");
@head = <HEADER>;
close (HEADER);
print "@head\n";
  print "<HTML>\n";
  print "<BODY BGCOLOR=#FFFFFF>\n";
  print "<CENTER>\n";
  print "$fields{size} $fields{slant} $fields{capitals}</BR>";
  print "</CENTER>\n";
  print "</BODY></HTML>";exit}

