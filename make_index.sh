

DNAMES="geo_sample grid_sample"

function MAKE_html()
{
    echo "" > menu.html
    for dname in $DNAMES
    do
       echo "<div> <p> $dname </p> "   >> menu.html
       find $dname -type f -regex '.*\.\(php\|html\)' -printf "<p> <a href=\"%p\"> %f </a>\n"  >> menu.html
       echo "</div>"   >> menu.html
    done
}

function GET_files()
{
    for dname in $DNAMES
    do
       find $dname -type f -type f -regex '.*\.\(php\|html\)' -printf "%p\n"
    done

}
function MAKE_json()
{
    echo "{" > menu.json

    echo " \"links\" : [" >>  menu.json

    GET_files | awk '{
           if ( NR > 1 ) printf ",\n";
               printf "\"/%s\"", $1 ;
           }' >> menu.json

    echo " ] " >> menu.json
    echo "}" >> menu.json
}



opt=${1:-"json"}

if [ "$opt"  ==  "json" ]
then
     MAKE_json
else
     GET_files
     MAKE_html

fi


ls -al menu.*

#find geo_sample -name "*.html" -printf "<p> <a href=\"%p\"> %f </a>\n"  >> menu.html
