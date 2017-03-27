
$orginal = '$conn = new mysqli($servername, $username, $password, $database, $port, $socketFile);';
$replace = '//$conn = new mysqli($servername, $username, $password, $database, $port, $socketFile);';
#perl -pi -e $orginal\/$replace/g' `find . -type f | grep php$`
find . -name '*.php' -print0 |xargs -r0 grep -li '$orginal/$replace/g'
