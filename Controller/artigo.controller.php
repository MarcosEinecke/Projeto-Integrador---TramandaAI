<?php

$artigo = $database->artigo($_REQUEST['id']);


view('artigo', compact('artigo'));