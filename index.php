<?php

// current directory
echo getcwd() . "\n";

chdir('ext');

// current directory
echo getcwd() . "\n";

if ($handle = opendir(getcwd())) {
    echo "Directory handle: $handle\n";
    echo "Entries:\n";

    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {
        echo "$entry\n";
    }
	
    closedir($handle);
}

print_r(get_loaded_extensions());


/*
  # get the mongo db name out of the env
  $mongo_url = parse_url(getenv("MONGOLAB_URI"));
  $dbname = str_replace("/", "", $mongo_url["path"]);

  # connect
  $m   = new Mongo(getenv("MONGOLAB_URI"));
  $db  = $m->$dbname;
  $col = $db->access;

  # insert a document
  $visit = array( "ip" => $_SERVER["HTTP_X_FORWARDED_FOR"] );
  $col->insert($visit);

  # print all existing documents
  $data = $col->find();
  foreach($data as $visit) {
    echo "<li>" . $visit["ip"] . "</li>";
  }

  # disconnect
  $m->close();
  */
?>