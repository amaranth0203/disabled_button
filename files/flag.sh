#!/bin/bash

echo '<?php' > /var/www/html/can_you_guess_my_file_name_flag.php
echo "echo '$FLAG';" >> /var/www/html/can_you_guess_my_file_name_flag.php

export FLAG=not_flag
FLAG=not_flag

rm -f /flag.sh
