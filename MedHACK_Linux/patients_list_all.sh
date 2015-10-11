host=`cat ~/the_tanks/address`
mysql -u the -h $host -p1234 <<EOF
use tanks;
SELECT * from patients;

EOF
