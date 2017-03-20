curdir=$(basename `pwd` )
find . -name "*.html" -printf "<p> <a href=\"/$curdir/%f\"> %f </a>\n" > index.html
