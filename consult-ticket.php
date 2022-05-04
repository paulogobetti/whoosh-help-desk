<?php

    require_once('validate-access.php');

    include('top-bar.php');

    $ticketList = array();

    // [pendente] Buscar somente se submitar
        $ticketFile = fopen('tickets.tkt', 'r');

        while(!feof($ticketFile)) {

            $ticketLine = fgets($ticketFile);

            $ticketList[] = $ticketLine;

        }

        fclose($ticketFile);

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <title>Whoosh! Help Desk | Consult a Ticket</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
                            <!-- CARD TICKET -->
                            <?php
                                foreach($ticketList as $ticketItem) {
                            ?>
                            <?php
                                $dynamicTicketCard = explode('#', $ticketItem);
                                if(count($dynamicTicketCard) < 3) {
                                    continue;
                                }
                            ?>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $dynamicTicketCard[0] ?></h5>
                                    <h6 class="card-title"><small><?= $dynamicTicketCard[1] ?></small></h6>
                                    <p class="card-text"><?= $dynamicTicketCard[2]?></p>
                                </div>
                            </div>
                            <?php } ?>
                            <!-- CARD TICKET -->
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
