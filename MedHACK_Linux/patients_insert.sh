host=`cat ~/the_tanks/address`
mysql -u the -h $host -p1234 <<EOF
use tanks;
 INSERT INTO patients
    (barcode_number, name, family)
     VALUES
    ("$1", "$2", "$3");

EOF
