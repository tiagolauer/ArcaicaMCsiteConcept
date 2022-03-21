<?php

function vote_create() {

    $vote[0] = "Ainda não divulgado";
    $vote_link[0] = "index.php";

    $vote[1] = "Ainda não divulgado";
    $vote_link[1] = "index.php";

    $vote[2] = "Ainda não divulgado";
    $vote_link[2] = "index.php";

    $vote[3] = "Ainda não divulgado";
    $vote_link[3] = "index.php";

    $vote[4] = "Ainda não divulgado";
    $vote_link[4] = "index.php";

    $iteme_vote = count($vote);

    for ($i = 0; $i < $iteme_vote; $i++) {
      echo ('<a href="'.$vote_link[$i].'" target="_blank"><i class="fas fa-thumbs-up"></i> '.$vote[$i].'</a>');
    }

}

function vote_rewards() {

    $reward[0] = "$1,500 In-Game";
    $reward[1] = "$1,500 In-Game";
    $reward[2] = "$1,500 In-Game";
    $reward[3] = "$1,500 In-Game";

    $iteme_reward = count($reward);

    for ($i = 0; $i < $iteme_reward; $i++) {
      echo ('<div class="vote-reward"><p>'.$reward[$i].'</p></div>');
    }

}

?>
