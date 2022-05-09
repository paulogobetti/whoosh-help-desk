<?php

    require_once('validate-access.php');

    include('top-bar.php');

    $ticketList = array();

    // [pendente] buscar somente se submitar
        $ticketFile = fopen('../private/tickets.tkt', 'r');

        while(!feof($ticketFile)) {

            $ticketLine = fgets($ticketFile);

            $ticketList[] = $ticketLine;

        }

        fclose($ticketFile);

?>

<!DOCTYPE HTML>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Whoosh! Help Desk | Consult a Ticket</title>

</head>

<body>

    <section>
        <div class="container">
            <div>
                <div>
                    <div class="card mt-5 align-middle">
                        <div class="card-header">
                            Consult a Ticket
                        </div>
                        <div id="open-ticket-box">
                            <!-- TICKET CARD -->
                            <?php
                                foreach($ticketList as $ticketItem) {
                            ?>
                            <?php
                                $dynamicTicketCard = explode('#', $ticketItem);
                                if($_SESSION['permission_level'] == 2) {
                                    if($_SESSION['id'] != $dynamicTicketCard[0]) {
                                        continue;
                                    }
                                }
                                if(count($dynamicTicketCard) < 3) {
                                    continue;
                                }
                            ?>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $dynamicTicketCard[1] ?></h5>
                                    <h6 class="card-title"><small><?= $dynamicTicketCard[2] ?></small></h6>
                                    <p class="card-text"><?= $dynamicTicketCard[3] ?></p>
                                </div>
                            </div>
                            <?php } ?>
                            <!-- TICKET CARD -->
                            <button type="submit" class="btn btn-primary">Consult</button>
                            <a href="dashboard.php" class="btn btn-warning">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
