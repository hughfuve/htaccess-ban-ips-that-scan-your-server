# htaccess-ban-ips-that-scan-your-server
A PHP script that will modify your htaccess file to deny access to any IP that tries to read the file.

PROBLEM: There are a number of probes coming in from Asia that are probing my servers. They seem to hit files like

"help.php"
"log.php"
"java.php"
"_query.php"
and many others.

USAGE:
Just name this PHP file any of these names, then set your .htaccess permissions so that apache has read/write access somethiung like 766.
Make sure you have a htaccess file that is readable and ends in with a closed Limit tag.

&lt; Limit HEAD POST GET &gt;

  order allow,deny
  
  allow from all
  
&lt;/LIMIT&gt;





