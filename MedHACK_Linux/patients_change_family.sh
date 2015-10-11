host=`cat ~/the_tanks/address`
mysql -u the -h $host -p1234 <<EOF
use tanks;
UPDATE patients SET family="$2" WHERE barcode_number=$1

EOF
