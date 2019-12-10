mkdir -p "./dist/about/"
SCRIPT_FILENAME=index.php REQUEST_URI=/ php index.php > "./dist/index.html"
SCRIPT_FILENAME=index.php REQUEST_URI=/about php index.php > "./dist/about/index.html"
SCRIPT_FILENAME=index.php REQUEST_URI=/about/team php index.php > "./dist/about/team.html"
