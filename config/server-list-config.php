<?php

#####################################
# SUPPORT!
# Contant me on discord!
#####################################

function returnServersList() {

  createServer(
    "server1.png", // SERVER LOGO
    "Arcaica Survival", // SERVER NAME
    "Prontos para uma nova aventura? Aqui no Arcaica Survival, você poderá começar sua caminhada
    em busca de riqueza e fama ou, se desejar, apenas uma vida calma no campo. Gosta de batalhas?
    Junte-se ao campo de batalha na Arena PVP em busca de honra! As oportunidades são infinitas,
    então não perca tempo e junte-se ao mundo de Arcaica!", // SERVER DESCRIPTION
    "server-1" // SERVER ID TO GET PLAYERS
  );

}

function returnServerQuery() {
  createServerQuery("Test", "port1", "br-1.phosting.com.br:10060", "", "#server-1");
  createServerQuery("Test2", "port2", "br-1.phosting.com.br:10060", "", "#server-2");
  createServerQuery("Test3", "port3", "br-1.phosting.com.br:10060", "", "#server-3");
  createServerQuery("Test4", "port4", "br-1.phosting.com.br:10060", "", "#server-4");
}

?>
