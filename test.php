<?php

$post['pcodate'] = '07.08.2019';
echo DateTime::createFromFormat('d.m.Y', $post['pcodate'])->format('Y-m-d');