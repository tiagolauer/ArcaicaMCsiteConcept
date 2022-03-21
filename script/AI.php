<?php
function annoncements($title, $description, $date, $date_number,$annoncement_title, $announcement_description, $forum_link) {
  echo ('<div class="anunt-catalin">
        <div class="header-anunt">
          <ul class="date">
            <li><p>'.$date.'</p></li>
            <li><p>'.$date_number.'</p></li>
          </ul>
          <ul class="informations">
            <li><h3>'.$title.'</h3></li>
            <li><p>'.$description.'</p></li>
          </ul>
        </div>
        <div class="anunt-scris">
          <h3>'.$annoncement_title.'</h3>
          <p>'.$announcement_description.'</p>
        </div>
        <div class="footer-anunt">
          <a href="'.$forum_link.'"><i class="fas fa-book"></i> Keep Reading</a>
        </div>
      </div>');
}
function createServer($server_icon, $server_name, $server_description, $server_id) {
  echo('
  <div class="server-list-corp">
    <div class="server-list-stanga">
      <div class="server-logo">
        <img src="'.$server_icon.'" alt="server-icon">
      </div>
    </div>
    <div class="server-list-dreapta">
      <div class="server-list-dreapta-block">
        <h1>'.$server_name.' <div class="server-cutie-jucatori"><span class="jucatori-counter" id="'.$server_id.'"></span> Players online</div></h1>
      </div>
      <p class="server-description">'.$server_description.'</p>
    </div>
  </div>
  ');
}
function createServerQuery($server_name_b, $server_port_name,$server_ip, $server_port, $server_id) {
  echo('
    const '.$server_name_b.' = "'.$server_ip.'";
    const '.$server_port_name.' = "'.$server_port.'";
    $.getJSON("https://api.minetools.eu/ping/" + "'.$server_ip.'" + "/" + "'.$server_port.'", function(status) {
        var jucatoriOnline = status.players.online;
        var maxPlayers = " / " + status.players.max;
        $("'.$server_id.'").html(((jucatoriOnline = jucatoriOnline.toString().split("."))[0] = jucatoriOnline[0].replace(/\B(?=(\d{3})+(?!\d))/g, ","), jucatoriOnline.join(".")));
        $("'.$server_id.'").append(((maxPlayers = maxPlayers.toString().split("."))[0] = maxPlayers[0].replace(/\B(?=(\d{3})+(?!\d))/g, ","), maxPlayers.join(".")));
    });');
}
function createNewUpdate($updated_thing, $updated, $author, $date) {
  echo('
  <div class="triplezone-update-col">
    <p>'.$updated_thing.'</p>
    <ul>
      <p><i class="fas fa-folder-open"></i> '.$updated.'</p>
      <p><i class="fas fa-user"></i> '.$author.'</p>
      <p><i class="fas fa-clock"></i> '.$date.'</p>
    </ul>
  </div>
  ');
}
?>
