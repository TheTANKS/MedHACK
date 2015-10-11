mysql -u the -h 192.168.112.106 -p1234 <<EOF
use tanks;
UPDATE patients SET name='ivan' WHERE barcode_number="123456789011";
UPDATE patients SET family='petrov' WHERE barcode_number="123456789011";

EOF
